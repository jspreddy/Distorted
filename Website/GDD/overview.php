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
			Game Overview</h1>
		<h2><a name="concept">
			Game Concept</a></h2>
		<p>
			Distorted is a multiplayer approach to a psychological thriller/horror that involves two or more players that are unable to interact with each other directly. Only cues from the surrounding environment and built in limited communication mechanics, the players must use teamwork to progress through the story.</p>

		<h3>Background:</h3>
		<p>
			The antagonist is killed within his house by a mob that sought his death for many serial rapes/murders around the surrounding villages. Upon his death he cursed that his work was not done and became a possession of the house. Every year on the anniversary of his death he reawakens to exact his revenge on unsuspecting victims. Because the house is possessed by a ghost that does not seem to exist in one specific timeline the day of his death happens in any iteration of time and space that the house is connected to. The two survivors attempting to escape are from very distinct timeframes, though they house is the same in their respective timeline.</p>
		<p>
			While the survivors are attempting to escape the house with aid from the other survivor, the house being possessed is actively trying to kill the players. This is done by separating the players and allowing for the antagonist to gain strength. When enough strength has accumulated he can materialize and pursue the survivors for a limited time. As the night progresses to his early morning murder he gains strength and will eventually require little distance between the players to exact his revenge.</p>

		<h3>Characters:</h3>
		<p>
			1-2 players will be survivors trying to escape the house.</p>
		<p>
			0-1 players may act as the house with intent to kill the survivors.</p>
		<h3>
			Environment:</h3>
		<p>
			<strong>Survivors:</strong></p>
		<p>
			The environment consists of a possessed castle of the antagonist through different timelines resulting in environments that have duplicated layouts but vastly different styles/architecture.</p>
		<p>
			<strong>House:</strong></p>
		<p>
			The house has a generic layout with no specific representation of timeline so the focus is on the survivors. The purpose of the house is to separate the survivors so that the antagonist can come out and kill them.&nbsp;</p>
		<h2>
			<a name="feature">Feature Set</a></h2>
		<ul>
			<li>
				Two distinct themes for each survivor. One current day, another steampunk.</li>
			<li>
				Survivors cannot directly interact with each other. Played in First Person View.</li>
			<li>
				House will attempt to aggressively separate survivors and kill them. Played in Top Down View.</li>
			<li>
				Online play with a lobby to find matches.</li>
			<li>
				Puzzles requiring components from each timeline to be solved.</li>
		</ul>
		<h2>
			<a name="genre">Genre</a></h2>
		<p>
			Psychological Thriller/Horror</p>
		<h2>
			<a name="target">Target Audience</a></h2>
		
		<p>
			<img align="left" height="89" hspace="12" src="images/teen.gif" width="60" />
			ESRB Rating target is: <strong>TEEN</strong></p>
		<p>
			Content is generally suitable for ages 13 and up. May contain violence, suggestive themes, crude humor, minimal blood, simulated gambling and/or infrequent use of strong language.</p>
		<h2><a name="flow">Game Flow</a></h2>
		<p>
			The house will be a three dimensional environment with limited areas of exploration depending on the current progression of the game. Items required for progression will be clearly marked for easy identification.</p>
		<p>
			Players playing as a survivor will be looking through the survivors eyes as they try to navigate the house using a first person perspective. Movement and interaction is based on a standard WASD and single key concepts.</p>
		<p>
			Players playing as the house will be looking at the house from a top down perspective. The flow is similar to a Sim style game that objects in the environment are selectable and specific actions are allowed. The house will also be able to see both survivors and the direction they are facing.</p>
		<h2>
			<a name="look">Look and Feel</a></h2>
		<p>
			The primary feel of the game is a dark environment with heavy ambience. The setting of the game is late night to early morning. The layout of the house is a castle from the 14<sup>th</sup> century.</p>
		<p>
			Two distinct looks for each timeline while the layout of the house remains the same.</p>
		<ul>
			<li>
				Timeline 1: 19<sup>th</sup> century steampunk a subgenre of science fiction, which often blends steam-powered machinery with Victorian era style and architecture. Tools and weapons will be designed for this period. The inspiration is similar to Dishonored the game.</li>
		</ul>
		<ul>
			<li>
				Timeline 2: 21<sup>st</sup> century current day style and architecture. Tools and weapons will be designed for this period.</li>
		</ul>
		<h2><a name="scope">Project Scope</a></h2>
		<p>
			The game will consist of 3 levels, 2 indoor and 1 outdoors. Each level will contain a different theme. Each level will act as a step to the awakening of the antagonist.</p>
		<h3>
			Number of locations</h3>
		<p>
			1: Castle from the 14<sup>th</sup> century to include the basement, ground floor and surround outdoor areas.</p>
		<h3>
			Number of levels</h3>
		<ul>
			<p>
				0: Lobby</p>
			<p>
				1: Basement</p>
			<p>
				2: Main floor</p>
			<p>
				3: Greenhouse, garden, forest</p>
		</ul>
		<h3>
			Number of NPC&rsquo;s</h3>
		<ul>
			<li>
				House(If controlled by the AI)</li>
			<li>
				Survivor(If controlled by the AI)</li>
			<li>
				Antagonist</li>
			<li>
				Summoned entities</li>
		</ul>
		<h3>
			Number of weapons</h3>
		<ul>
			<li>
				Timeline specific melee</li>
		</ul>
	<?php require('./footer.php'); ?> </article>
</body>
</html>