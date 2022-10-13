<?php
require_once 'functions.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les fonctions</title>
</head>
<body>
    <main>
        <?php

        $calls = [
            [0,9,1],
            [0,10,1],
            [1,10,1],
            [12,25,1],
            [10,0,-1],
            [25,50,5],
            [25,-10,-3],
        ];

    makeAllLoops($calls);

       makeALoop(0, 9);
       makeALoop(0, 10);
       makeALoop(1, 10);
       makeALoop(12, 25);

       makeALoop(10, 0, -1);
       makeALoop(25, 50, 5);
       makeALoop(25, -10, -3);

        
        ?>
    </main>
</body>
</html>

