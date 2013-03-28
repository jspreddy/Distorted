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
                Artificial Intelligence</h1>
            <h2>
                <a name="opponent">Opponent AI</a></h2>
            <p>
                The embodiment of Desmond playing as the house is the main opponent. While being controlled by a player no AI will be used. While not controlled by a player the house will keep track of each player&rsquo;s position and use algorithms to separate they players as much as possible. The efficiency measurement that the AI will use is calculated by how far apart the players are and attempt to use the actions available to it to separate them.</p>
            <p>
                When the house has acquired enough strength Desmond can be summoned. Desmond will have its own simple AI to path find to each survivor and attack when in range.</p>
            <h2>
                <a name="support">Support AI</a></h2>
            <p>
                For the survivors there is some support AI to help the survivors keep track of the objective. Since some objective may contain simultaneous actions there will be onscreen notifications that one player needs the other.</p>
            <h3>
                Player and Collision Detection</h3>
            <p>
                Basic collision detection for Desmond will be used. Summoned ghosts will not use collision detection.</p>
            <h3>
                Pathfinding</h3>
            <p>
                Pathfinding for Desmond will be relatively simplistic since he spawn in the same room as the survivor and they have to escape his grasp before he does enough damage to them. For collision avoidance we will use a modification of A* using Unity&rsquo;s built in NavMesh.</p>
        <?php require('./footer.php'); ?> </article>
    </body>
</html>