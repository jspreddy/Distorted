//**
// Group: Distorted
// Programmers: Stan Hormell, John Taylor
// Purpose: Implement a quaternion camera for use with Unity.
// 
//**

using UnityEngine;
using System.Collections;
using System;

public class DQuaternion : MonoBehaviour {
	
    //Structure of a Quaternion
    public float x;
    public float y;
    public float z;
    public float w;
	
	public DQuaternion(float value)                             // Using single float
    	{
            x = value;
            y = value;
            z = value;
            w = value;
        }

	public DQuaternion(Vector4 value)                           // Using a Vector 4
        {
            x = value.x;
            y = value.y;
            z = value.z;
            w = value.w;
        }
		
	public DQuaternion(Vector3 value, float w)                  // Using a Vector 3 and float
    {
            x = value.x;
            y = value.y;
            z = value.z;
            this.w = w;
    }
	
	public DQuaternion(float x, float y, float z, float w)      // Using four different floats
        {
            this.x = x;
            this.y = y;
            this.z = z;
            this.w = w;
        }
	
    //Static methods for easy use.
	public static readonly DQuaternion Zero = new DQuaternion(0.0f, 0.0f, 0.0f, 0.0f);              // Quaternion with all zeroes
	public static readonly DQuaternion Identity = new DQuaternion(0.0f, 0.0f, 0.0f, 1.0f);          // Quaternion with zeroes but W = 1
	public static readonly DQuaternion One = new DQuaternion(1.0f, 1.0f, 1.0f, 1.0f);               // Quaternion with all ones.
    public static float Angle(DQuaternion left, DQuaternion right)
    {
        return (float)Math.Acos(Dot(left, right));
    }

    //The dot product between two rotations.
    public static float Dot(DQuaternion left, DQuaternion right)
    {
        return (left.x * right.x) + (left.y * right.y) + (left.z * right.z) + (left.w * right.w);
    }
	
    //Check if Identity
	public bool IsIdentity
    {
        get { return this.Equals(Identity); }
    }
	
    //Check if Normalized
	public bool IsNormalized
    {	
        get { return Math.Abs((x * x) + (y * y) + (z * z) + (w * w) - 1f) < 0; }
    }
	
    //Returns lengthSquared which is everything multiplied by itself.
	public float LengthSquared()
	{
		return (x * x) + (y * y) + (z * z) + (w * w);
	}

    //Returns lengh which is x,y,z multiplied by itself.
	public float Length()
	{
		return (x * x) + (y * y) + (z * z);
	}

    //Returns the magnitude which is the square root of the length.
    public float Magnitude()
    {
        return (float)Math.Sqrt(Length());
    }
	
    //Method that give the inverse of the Quaternion
	public void Inverse()
    {
        float lengthSq = LengthSquared();
        if (lengthSq > 0)                                                           //Check for lengthsqured. If less then 0 what are you going to inverse. 
        {
            lengthSq = 1.0f / lengthSq;

            x = -x * lengthSq;
            y = -y * lengthSq;
            z = -z * lengthSq;
            w = w * lengthSq;
        }
    }
	
    //Method that normalizes the Quaternion
	public void Normalize()
    {
        float length = (float)Math.Sqrt((x * x) + (y * y) + (z * z) + (w * w));
        if (length > 0)                                                             //Check for size. If less then 0 what is there to normalize
        {
            float inverse = 1.0f / length;
            x *= inverse;
            y *= inverse;
            z *= inverse;
            w *= inverse;
        }
    }

    //Converts a rotation to angle-axis representation.
    public void ToAngleAxis (out Vector3 axis, out float angle)
    {
        angle = (float)Math.Acos(w);
        axis.x = x / (float)Math.Sin(angle);
        axis.y = y / (float)Math.Sin(angle);
        axis.z = z / (float)Math.Sin(angle);
    }

    //Creates a rotation which rotates from fromDirection to toDirection.
	public void SetFromToRotation (Vector3 fromDirection , Vector3 toDirection)
    {
        Vector3 cross = Vector3.Cross(fromDirection, toDirection);
		x = cross.x;
		y = cross.y;
        z = cross.z;                                                                // Uses the magnitude, which is the same as length of a vector3
                                                                                    // The length of the vector is square root of (x*x+y*y+z*z).
		w = (float)Math.Sqrt((fromDirection.magnitude * fromDirection.magnitude) * (toDirection.magnitude * toDirection.magnitude) + Vector3.Dot(fromDirection, toDirection));
    }

    // Creates a rotation with the specified forward and upwards directions.
    //If used to orient a Transform, the Z axis will be aligned with forward and the Y axis with upwards. Logs an error if the forward direction is zero.
    public void SetLookRotation(Vector3 view, Vector3 up)
    {
        float recip = 1.0f / (4.0f * w);                                            // Reciprical
        Vector3 cross = Vector3.Cross(up, view);                                    // CrossProduct

        x = (up.z - cross.y) * recip;                                       
        y = (view.x - cross.z) * recip;
        z = (cross.z - up.x) * recip;
        w = (float)Math.Sqrt(1.0f + cross.x + up.y + view.z);
    }

    //Creates a rotation which rotates angle degrees around axis.
	public static DQuaternion AngleAxis(float angle, Vector3 axis)
    {
		if (((axis.x * axis.x) + (axis.y * axis.y) + (axis.z * axis.z)) == 0.0f)    //If it is 0 then clearly we have an identity. Just return without extra work.
			return Identity;
		
		DQuaternion result = Identity;
		angle *= 0.5f;
		axis.Normalize();                                                           // Normalize the axis
		
		result.x = axis.x * (float)Math.Sin(angle);
		result.y = axis.y * (float)Math.Sin(angle);
		result.z = axis.z * (float)Math.Sin(angle);
		result.w = (float)Math.Cos(angle);
		result.Normalize ();                                                        // Put into result then normalize
		
		return result;
    }
	
    // Creates a rotation which rotates from fromDirection to toDirection.
    //Usually you use this to rotate a transform so that one of its axes eg. the y-axis - follows a target direction toDirection in world space. 
	public static DQuaternion FromToRotation (Vector3 from, Vector3 to)
	{
		DQuaternion result = Zero;
		Vector3 cross = Vector3.Cross(from, to);                                    // CrossProduct
		result.x = cross.x;
		result.y = cross.y;
		result.z = cross.z;                                                         // Uses the magnitude, which is the same as length of a vector3
                                                                                    // The length of the vector is square root of (x*x+y*y+z*z).
		result.w = (float)Math.Sqrt((from.magnitude * from.magnitude)* (to.magnitude * to.magnitude)) + Vector3.Dot(from, to);
		return result;
	}

    // Creates a rotation with the specified forward and upwards directions.
    //If used to orient a Transform, the Z axis will be aligned with forward and the Y axis with upwards. Logs an error if the forward direction is zero. 
    public static DQuaternion LookRotation(Vector3 forward, Vector3 up)
    {
        Vector3 cross = Vector3.Cross(up, forward);                                 // CrossProduct
        DQuaternion result = Zero;
        float recip = 1.0f / (4.0f * result.w);                                     // Reciprical

        result.x = (up.z - forward.y) * recip;
        result.y = (forward.x - cross.z) * recip;
        result.z = (cross.z - up.x) * recip;
        result.w = (float)Math.Sqrt(1.0f + cross.x + up.y + forward.z);
        return result;
    }

    //Spherically interpolates between from and to by t.
    public static DQuaternion Slerp(DQuaternion start, DQuaternion end, float amount)
    {
        float opposite;
        float inverse;
        float dot = Dot(start, end);                                            // Dot product
        DQuaternion result = Zero;

        if (Math.Abs(dot) > 1.0f)                                               // If abs is greater then 1
        {                                                                       // This simple logic helps with the 
            inverse = 1.0f - amount;                                            // look between slerp and lerp
            opposite = amount * Math.Sign(dot);                                 // This is default for lerp
        }
        else                                                                    // else it will calculate a 
        {                                                                       // better inverse and opposite using 
            float acos = (float)Math.Acos(Math.Abs(dot));                       // acos and inverse sin
            float invSin = (float)(1.0 / Math.Sin(acos));

            inverse = (float)Math.Sin((1.0f - amount) * acos) * invSin;
            opposite = (float)Math.Sin(amount * acos) * invSin * Math.Sign(dot);
        }

        result.x = (inverse * start.x) + (opposite * end.x);
        result.y = (inverse * start.y) + (opposite * end.y);
        result.z = (inverse * start.z) + (opposite * end.z);
        result.w = (inverse * start.w) + (opposite * end.w);

        return result;
        
    }

    //Interpolates between from and to by t and normalizes the result afterwards.
    //This is faster than Slerp but looks worse if the rotations are far apart. 
    //Similar to Slerp but normalizes at the end. Probably why for the terrible looks
    public static DQuaternion Lerp(DQuaternion start, DQuaternion end, float amount)
    {
	    float inverse = 1.0f - amount;
		DQuaternion result = Zero;

        if (Dot(start, end) >= 0.0f)
            {
                result.x = (inverse * start.x) + (amount * end.x);
                result.y = (inverse * start.y) + (amount * end.y);
                result.z = (inverse * start.z) + (amount * end.z);
                result.w = (inverse * start.w) + (amount * end.w);
            }
        else
            {
                result.x = (inverse * start.x) - (amount * end.x);
                result.y = (inverse * start.y) - (amount * end.y);
                result.z = (inverse * start.z) - (amount * end.z);
                result.w = (inverse * start.w) - (amount * end.w);
            }

        result.Normalize();
		return result;
		
    }

    //Rotates a rotation from towards to.
    //The from quaternion is rotated towards to by an angular step of maxDegreesDelta (but note that the rotation will not overshoot). 
    //Negative values of maxDegreesDelta will move away from to until the rotation is exactly the opposite direction. 
    public static DQuaternion RotateTowards(DQuaternion from, DQuaternion to, float maxDegreesDelta)
    {
        float angle = Angle(from, to);
        if (angle < maxDegreesDelta)
            return to;
        else
            return Slerp(from, to, maxDegreesDelta / angle);
    }

    //Returns a rotation that rotates z degrees around the z axis, x degrees around the x axis, and y degrees around the y axis (in that order).
	public static DQuaternion Euler(float x, float y, float z)
	{
        DQuaternion result = Zero;
		float num1 = x * 0.5f;
		float num2 = (float)Math.Sin((double)num1);
		float num3 = (float)Math.Cos((double)num1);
        float num4 = y * 0.5f;
		float num5 = (float)Math.Sin((double)num4);
		float num6 = (float)Math.Cos((double)num4);
        float num7 = z * 0.5f;
		float num8 = (float)Math.Sin((double)num7);
		float num9 = (float)Math.Cos((double)num7);
		
		result.x = num9 * num5 * num3 + num8 * num6 * num2;
		result.y = num8 * num6 * num3 - num9 * num5 * num2;
		result.z = num9 * num6 * num2 - num8 * num5 * num3;
		result.w = num9 * num6 * num3 + num8 * num5 * num2;
		return result;
	}

    //Returns a rotation that rotates z degrees around the z axis, x degrees around the x axis, and y degrees around the y axis (in that order).
    //Was a bit of a pain to find because almost everyone else calls it yaw,pitch,roll.
    public static DQuaternion Euler(Vector3 euler)
    {
        DQuaternion result = Zero;
        float num1 = euler.x * 0.5f;
        float num2 = (float)Math.Sin((double)num1);
        float num3 = (float)Math.Cos((double)num1);
        float num4 = euler.y * 0.5f;
        float num5 = (float)Math.Sin((double)num4);
        float num6 = (float)Math.Cos((double)num4);
        float num7 = euler.z * 0.5f;
        float num8 = (float)Math.Sin((double)num7);
        float num9 = (float)Math.Cos((double)num7);

        result.x = num9 * num5 * num3 + num8 * num6 * num2;
        result.y = num8 * num6 * num3 - num9 * num5 * num2;
        result.z = num9 * num6 * num2 - num8 * num5 * num3;
        result.w = num9 * num6 * num3 + num8 * num5 * num2;
        return result;
    }
}

