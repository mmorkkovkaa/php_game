<!DOCTYPE html>
<html>
<head>
    <title>Adventure Game</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
    <div class="container">
        <h1>Adventure Game</h1>
        <?php
        if (!isset($_POST['action'])) {
            echo '<form method="post">';
            echo '<button name="action" value="start" >Start</button>';

            echo '</form>';
        } elseif ($_POST['action'] == 'start') {
            echo '<div id="gameContainer">';
            echo '<div id="intro">';
            echo '<p>Welcome to the adventure! Choose your path:</p>';
            echo '<img src="forest.jpg" alt="Forest" >';
            echo '<img src="mountains.jpg" alt="Mountains" >';
            echo '<form method="post">';
            echo '<button name="action" value="forest">Go to the forest</button>';
            echo '<button name="action" value="mountains">Go to the mountains</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            
        } elseif ($_POST['action'] == 'forest') {
            echo '<div id="forest">';
            echo '<p>You entered the forest and met a bear. What do you do?</p>';
            echo '<img src="bear.jpg" alt="Bear" >';
            echo '<form method="post">';
            echo '<button name="action" value="runAwayFromBear">Run away</button>';
            echo '<button name="action" value="befriendBear">Try to befriend</button>';
            echo '</form>';
            echo '</div>';
        }
        
        elseif ($_POST['action'] == 'runAwayFromBear') {
            echo '<img src="runaway.jpg" alt="Bear" >';
            echo '<p>How will you run?</p>';
            echo '<form method="post">';
            echo '<button name="action" value="mountains">Fast!</button>';
            echo '<button name="action" value="slowly">Slowly..</button>';
            echo '</form>';
        }

        elseif ($_POST['action'] == 'slowly') {
            echo '<img src="death.jpg" alt="Bear" >';
            echo '<p>You failed. You were eaten.</p>';
            echo '<form method="post">';
            echo '<button name="action" value="startOver">Start Over</button>';
            echo '</form>';
        }
        
        elseif ($_POST['action'] == 'befriendBear') {
            echo '<img src="honey.jpg" alt="Bear" >';
            echo '<p>The bear turned out to be kind, shared honey with you, and you became best friends.</p>';
            echo '<form method="post">';
            echo '<button name="action" value="startOver">Start Over</button>';
            echo '</form>';
        }
        
        elseif ($_POST['action'] == 'mountains') {
            echo '<div id="mountains">';
            echo '<p>You decided to climb the snowy mountains. You met a wolf. What do you do?</p>';
            echo '<img src="wolf.jpg" alt="Wolf">';
            echo '<form method="post">';
            echo '<button name="action" value="runAway">Run away</button>';
            echo '<button name="action" value="tame">Try to tame</button>';
            echo '</form>';
            echo '</div>';

        } elseif ($_POST['action'] == 'runAway') {
            echo '<img src="runaway.jpg" alt="Bear" >';
            echo '<p>How will you run?</p>';
            echo '<form method="post">';
            echo '<button name="action" value="forest">Fast!</button>';
            echo '<button name="action" value="slowly">Slowly..</button>';
            echo '</form>';

        } elseif ($_POST['action'] == 'tame') {
            echo '<img src="death.jpg" alt="Bear" >';
            echo '<p>You failed. The wolf ate you.</p>';
            echo '<form method="post">';
            echo '<button name="action" value="startOver">Start Over</button>';
            echo '</form>';

        } elseif ($_POST['action'] == 'startOver') {
            echo '<form method="post">';
            echo '<button name="action" value="start">Start</button>';
            echo '</form>';
        }
        ?>
    </div>
</body>
</html>

