<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Game Design and Development Documentation</title>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" media="all" href="css/styles.css" />
</head>
<body>
	<?php require('./menu.php'); ?>
	<article>
		<h1>
			Interface</h1>
		<h2><a name="visual">Visual System</a></h2>
		<h3>
			HUD</h3>
		<ul>
			<li>
				Time of the night is displayed in the center top of the screen. This is a major component because the levels have a time based component to them</li>
			<li>
				Health of the player is in the bottom of the screen as a bar that extends the entire bottom. Health is not a huge element of the game but some elements can influence it.</li>
			<li>
				Item/Weapon in the main hand is iconified on the bottom right of the screen</li>
			<li>
				Notifications will appear at the middle right of the screen</li>
			<li>
				Interactions with objects will result in a popup in the game window.</li>
			<li>
				Objects that you can carry with change the cursor to a hand and display it in the center &nbsp;</li>
		</ul>
		<h3>
			Menus</h3>
		<ul>
			<li>
				Main Menu
				<ul>
					<li>
						Play Game</li>
					<li>
						Options</li>
					<li>
						Exit Game</li>
				</ul>
			</li>
			<li>
				Options
				<ul>
					<li>
						Audio</li>
					<li>
						Resolution</li>
					<li>
						Brightness</li>
					<li>
						Contrast</li>
					<li>
						Controls</li>
					<li>
						Back</li>
				</ul>
			</li>
			<li>
				Multiplayer Lobby Menu
				<ul>
					<li>
						Create Game</li>
					<li>
						Join Game</li>
					<li>
						Exit to Main</li>
					<li>
						Exit Game</li>
				</ul>
			</li>
			<li>
				Create Game Menu
				<ul>
					<li>
						Number of players.</li>
					<li>
						Difficulty</li>
					<li>
						Misc</li>
					<li>
						Back</li>
				</ul>
			</li>
			<li>
				Join Game Menu
				<ul>
					<li>
						Name</li>
					<li>
						Ready</li>
					<li>
						Exit</li>
				</ul>
			</li>
		</ul>
		<h3>
			Rendering System</h3>
		<p>
			Unity</p>
		<h3>
			Camera</h3>
		<p>
			Survivors: First Person Perspective</p>
		<p>
			House: Top Down View</p>
		<h3>
			Lighting Models</h3>
		<p>
			Ambient light with large use of particle effects to simulate the dark brooding atmosphere</p>
		<h2>
			<a name="control">Control System</a></h2>
		<p>
			Survivors:</p>
		<p>
			Standard First Person Controls</p>
		<ul>
			<li>
				W is Forward</li>
			<li>
				S is Backwards</li>
			<li>
				A is Strafe Left</li>
			<li>
				D is Strafe Right</li>
			<li>
				Shift for Sprint</li>
		</ul>
		<ul>
			<li>
				Spacebar for Jump</li>
			<li>
				Q is next available weapon/item</li>
			<li>
				E is previous available weapon/item</li>
			<li>
				Left mouse click for attack/use item</li>
			<li>
				Right mouse click for interact with game object</li>
		</ul>

		<ul>
			<p>
				Journal:</p>
			<ul>
				<li>
					A is turn page LEFT</li>
				<li>
					D is turn page RIGHT</li>
				<li>
					Esc/Tab is exit journal</li>
				<li>
					All keys to type a message</li>
				<li>
					Enter to end typing.</li>
			</ul>
		</ul>
		<p>
			House:</p>
		<ul>
			<p>
				Mouse at the edges of the screen will pan the floor.</p>
			<p>
				Left click will select the object or survivor.</p>
			<p>
				Left click and hold from the actions bar will allow for actions to be dragged into the floor.</p>
			<p>
				Right click will pull up available actions on that object.</p>
			<p>
				Messages can be dropped in game with text messages provoking survivors.</p>
			<p>
				All the keys on the keyboard to type messages.</p>
			<p>
				Control Antagonist:</p>
			<ul>
				<li>
					All general and other movement for survivors.</li>
			</ul>
		</ul>
		<h2>
			<a name="audio">Audio</a></h2>
		<p>
			Audio editing using Audacity with styles based on the survivor timelines. We are using Unity&rsquo;s positional audio system so the house can directly place audio effects in the game allowing for a richer experience.</p>
		<h2><a name="music">Music</a></h2>
		<p>
			Background Music specific to the timeline</p>
		<h2><a name="effects">Sound Effects</a></h2>
		<ul>
			<li>
				Walking</li>
			<li>
				Opening objects</li>
			<li>
				Screams</li>
			<li>
				Rattles</li>
			<li>
				Anything scary</li>
			<li>
				Stomping</li>
			<li>
				Banging</li>
		</ul>
		<h2><a name="help">Help System</a></h2>
		<p>
			Basic user feedback system to explain the introductory skills the rest is found by the user.</p>
	<?php require('./footer.php'); ?> </article>
</body>
</html>