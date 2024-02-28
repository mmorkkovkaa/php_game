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
            echo '<button name="action" value="start" >Играть</button>';

            echo '</form>';
        } elseif ($_POST['action'] == 'start') {
            echo '<div id="gameContainer">';
            echo '<div id="intro">';
            echo '<p>Приключение начинается! Выбери свой путь:</p>';
            echo '<img src="forest.jpg" alt="Forest" >';
            echo '<img src="mountains.jpg" alt="Mountains" >';
            echo '<form method="post">';
            echo '<button name="action" value="forest">Пойти в лес</button>';
            echo '<button name="action" value="mountains">Пойти в горы</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            
        } elseif ($_POST['action'] == 'forest') {
            echo '<div id="forest">';
            echo '<p>Вы зашли в лес и встретили медведя. Ваши действия?</p>';
            echo '<img src="bear.jpg" alt="Bear" >';
            echo '<form method="post">';
            echo '<button name="action" value="runAwayFromBear">Убегать</button>';
            echo '<button name="action" value="befriendBear">Попытаться подружиться</button>';
            echo '</form>';
            echo '</div>';
        }
        
        elseif ($_POST['action'] == 'runAwayFromBear') {
            echo '<img src="runaway.jpg" alt="Bear" >';
            echo '<p>Вы решили бежать. Как вы будете бежать?</p>';
            echo '<form method="post">';
            echo '<button name="action" value="mountains">Очень быстро!</button>';
            echo '<button name="action" value="slowly">Медленно...</button>';
            echo '</form>';
        }

        elseif ($_POST['action'] == 'slowly') {
            echo '<img src="death.jpg" alt="Bear" >';
            echo '<p>Вы бежали слишком медленно. Зверь вас догнал и съел</p>';
            echo '<form method="post">';
            echo '<button name="action" value="startOver">Начать сначала!</button>';
            echo '</form>';
        }
        
        elseif ($_POST['action'] == 'befriendBear') {
            echo '<img src="honey.jpg" alt="Bear" >';
            echo '<p>Вы попытались подружиться. Медведь оказался добрым, поделился с вами медом, и вы стали лучшими друзьями.</p>';
            echo '<form method="post">';
            echo '<button name="action" value="startOver">Начать сначала!</button>';
            echo '</form>';
        }
        
        elseif ($_POST['action'] == 'mountains') {
            echo '<div id="mountains">';
            echo '<p>Вы поднялись на заснеженные горы. Там вы встретили волка. Что будете делаете?</p>';
            echo '<img src="wolf.jpg" alt="Wolf">';
            echo '<form method="post">';
            echo '<button name="action" value="runAway">Бежать!</button>';
            echo '<button name="action" value="tame">Постараться приручить...</button>';
            echo '</form>';
            echo '</div>';

        } elseif ($_POST['action'] == 'runAway') {
            echo '<img src="runaway.jpg" alt="Bear" >';
            echo '<p>Вы решили бежать. Как вы будете бежать?</p>';
            echo '<form method="post">';
            echo '<button name="action" value="forest">Быстро!</button>';
            echo '<button name="action" value="slowly">Медленно...</button>';
            echo '</form>';

        } elseif ($_POST['action'] == 'tame') {
            echo '<img src="death.jpg" alt="Bear" >';
            echo '<p>Вы попытались приручить волка, но у вас не получилось, Волк вас съел</p>';
            echo '<form method="post">';
            echo '<button name="action" value="startOver">Начать сначала</button>';
            echo '</form>';

        } elseif ($_POST['action'] == 'startOver') {
            echo '<form method="post">';
            echo '<button name="action" value="start">Играть</button>';
            echo '</form>';
        }
        ?>
    </div>
</body>
</html>

