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
		<h1>Gameplay and Mechanics</h1>
		<p>The gameplay will be familiar for those who played FPS Adventure/Horror games.</p>
		<h2>Gameplay</h2>
		<h3>Game Progression</h3>
		<p>The player progresses as he/she clears the level of obstacles advancing to the next area.&nbsp; Additional resources and hints will be unlocked with exploration of the current area.</p>
		<h3>Mission/challenge Structure</h3>
		<p>Primary mission is to escape the house without getting killed. Cooperative play is required for completing obstacles while staying close to the other survivor.</p>
		<p>Difficulty will determine the speed at which time elapses, and when the antagonist can come out.</p>
		<h3>Puzzle Structure</h3>
		<p>Both survivors will have the same puzzle though each survivor will have a part specific to them. Only when both survivors have accomplished there individual task can they advance. Some puzzles may require simultaneous interaction in order to advance.</p>
		<h3>Objectives</h3>
		<p>Survive and escape the house.</p>
		<h3>Play Flow</h3>
		<p>The game itself is not fast paced because of the dark environment and limited visibility.&nbsp; Limited communication between players is possible with the journal, scraps are only found with exploration of the area.</p>
		<p>The house can use interactions with the environment to direct players to or from areas in order to gain strength.</p>
		<h2><a name="mechanics">Mechanics</a></h2>
		<h3>Physics</h3>
		<p>Game world is very similar to current environment. All references are to the survivors which are women that are approximately 5&rsquo;6&rdquo;.</p>
		<ul>
			<li>Gravity is standard 9.78m/s^2(Earth)</li>
			<li>Jumping</li>
			<li>Sprinting up to a max duration</li>
			<li>Opening and closing objects</li>
			<li>Throwing objects</li>
			<li>Collide with walls and objects</li>
		</ul>
		<h3>
			Movement</h3>
		<h4>
			General Movement</h4>
		<p><strong>Survivors:</strong></p>
		<p style="margin-left:.5in;">Standard First Person Controls</p>
		<ul style="margin-left: 40px;">
			<li>W is Forward</li>
			<li>S is Backwards</li>
			<li>A is Strafe Left</li>
			<li>D is Strafe Right</li>
		</ul>
		<p style="margin-left:.5in;">Mouse Look</p>
		<p><strong>House:</strong></p>
		<p style="margin-left:.5in;">Mouse at the edges of the screen will pan the floor.</p>
		<p style="margin-left:.5in;">Left click will select the object or survivor.</p>
		<p style="margin-left:.5in;">Left click and hold from the actions bar will allow for actions to be dragged into the floor.</p>
		<p style="margin-left:.5in;">Right click will pull up available actions on that object.</p>
		<p style="margin-left:.5in;">&nbsp;</p>
		<h4>Other Movement</h4>
		<p><strong>Survivor:</strong></p>
		<ul>
			<li>Shift for Sprint</li>
			<li>Spacebar for Jump</li>
			<li>Q is next available weapon/item</li>
			<li>E is previous available weapon/item</li>
			<li>Left mouse click for attack/use item</li>
			<li>Right mouse click for interact with game object</li>
			
		</ul>
		<ul>
			Journal
			<ul>
			
				<li>A is turn page LEFT</li>
				<li>D is turn page RIGHT</li>
				<li>Esc/Tab is exit journal</li>
				<li>All keys to type a message</li>
				<li>Enter to end typing.</li>
			</ul>
		</ul>
		<p><strong>House:</strong></p>
		<ul>
			<p>Messages can be dropped in game with text messages provoking survivors.</p>
			<p>All the keys on the keyboard to type messages.</p>
			
		</ul>
		<ul>
			Control Antagonist:
			<ul>
				<li>All general and other movement for survivors.</li>
			</ul>
		</ul>
		<h3>Objects</h3>
		<h4>Picking Up Objects</h4>
		<p>Various objects can be picked up that help both survivors progress through the area.</p>
		<ol>
			<li>Journal</li>
			<li>Weapons</li>
			<li>Notes</li>
			<li>Monocular</li>
			<li>Matches/Light</li>
			<li>Potions</li>
		</ol>
		<h4>Moving Objects</h4>
		<p>Moving objects is required for the advancement of objectives. Some items may be out of normal grabbing range and require moving of surrounding objects to gain access. Additionally extra areas may be only accessible by moving objects. Some objectives may require the action of both players in order to advance.</p>
		<h3>Actions</h3>
		<h4>Switches and Buttons</h4>
		<p>All interaction within the game world will be with the activate key (Right Mouse Button)</p>
		<p>Items to interact with:</p>
		<ul>
			<li>Switch, ex. Light Switches</li>
			<li>Levers, ex. Gates, Objectives, Sprinklers</li>
			<li>Buttons, ex. Generator, Computers</li>
			<li>Doors, ex. Cupboards, Cabinets, Closets.</li>
			<li>Turn Dials, ex. Hand Cranks. Multiple Clicks to perform turn or click and motion.</li>
		</ul>
		<h4>Picking Up, Carrying and Dropping</h4>
		<p>Similar to switches in that a single interact key will pick up the item. The item will hover in front of the player allowing them to move it were they want in the game world with the mouse. General movement can be used for directional moving while the object is still being held in front of the user. A second interact key will drop the item.</p>
		<p>The house cannot interact with moveable objects already in the game world but using its action bar is able to click and drag new items into the environment.</p>
		<h4>Talking</h4>
		<p>No direct talking dialogue between the survivors. All dialogue between characters will be done with cut scenes that explain the story.</p>
		<p>Written messages are possible in the form of notes by proxy of the journal. The written messages have a limited character count because they are only scraps from the journal that the survivors may find. More or less scraps may be available depending on the difficulty settings and any additional messages the house may drop. The messages have to be found in order to see a message from the other player. Once a message is received a visible cue will notify the player of a message.</p>
		<p>The journal is a diary of the antagonist detailing his deeds for later pleasure. Because this item is a definition of the antagonist it manifests itself when he does. This helps with some backstory of how twisted he is, and why they want to get out. Plus it is an item that is linked between the two timelines so allows for communications between each survivor.</p>
		<h4>Reading</h4>
		<p>Activating the journal will open the book full screen and allow for additional controls of the journal. There are multiple pages that give some backstory to the antagonist. After reading those pages every subsequent opening of the book will go to the last viewed page. This is to facilitate fast transitions to the message scraps near the end.</p>
		<h3>Combat</h3>
		<p>Combat will be very limited and sparse due to the nature of the game. If it does occur it will be simple hack and slash style. Left click of the mouse will perform an action, assuming the weapon is slotted to swing.</p>
		<p>Pure ethereal creatures will not be attackable so evasion is a must. Once the antagonist is fully materialized it will be possible to hurt him. Since he exists in both timeline he has one health bar for both survivors. Advantage to the survivors exists if they fight together.</p>
		<h3>Economy</h3>
		<p>There is no economy to the game.</p>
		<h2><a name="flow">Screen Flow</a></h2>
		<h3>Screen Flow Chart</h3>
		<p><a href="images/ScreenFlowChart.jpg" target="_blank"><img src="images/ScreenFlowChart.jpg" width="400" height="300"/></a></p>
		<h3>Screen Descriptions</h3>
		<ul>
			<li>Splash
				<ul>
					<li>Game and Team Logos</li>
					<li>Game Name</li>
				</ul>
			</li>
			<li>
				Main Menu
				<ul>
					<li>Play Game --&gt; Multiplayer Lobby Menu</li>
					<li>Options --&gt; Options Menu</li>
					<li>Exit Game</li>
				</ul>
			</li>
			<li>
				Options
				<ul>
					<li>Audio</li>
					<li>Resolution</li>
					<li>Brightness</li>
					<li>Contrast</li>
					<li>Controls</li>
					<li>Back --&gt; Main Menu</li>
				</ul>
			</li>
			<li>
				Multiplayer Lobby Menu
				<ul>
					<li>Create Game --&gt; Create Game Menu</li>
					<li>Join Game --&gt; Join Game Menu</li>
					<li>Exit to Main --&gt; Main Menu</li>
					<li>Exit Game</li>
				</ul>
			</li>
			<li>
				Create Game Menu
				<ul>
					<li>Number of players.</li>
					<li>Difficulty</li>
					<li>Misc</li>
					<li>Back --&gt; Multiplayer Lobby Menu</li>
				</ul>
			</li>
			<li>
				Join Game Menu
				<ul>
					<li>Name</li>
					<li>Ready</li>
					<li>Exit --&gt; Multiplayer Lobby Menu</li>
				</ul>
			</li>
		</ul>
		<h2><a name="options">Game Options</a></h2>
		<p>Since the game is based online the only options available in game options will be specific to the client. Resolution settings, audio volumes, brightness, contrast, control configurations for the keyboard and mouse.</p>
		<h2><a name="replay">Replaying and Saving</a></h2>
		<p>There is no saving in the game. Once you are dead you are dead. Upon dying you will be returned to the game lobby and allowed to replay another attempt.</p>
		<h2><a name="cheats">Cheats and Easter Eggs</a></h2>
		<p>No cheats or Easter eggs. This is designed to be a hardcore game where death is final.</p>
	<?php require('./footer.php'); ?> </article>
</body>
</html>