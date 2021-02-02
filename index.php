<?php
    #strings
    $mode = "dark";
    $name = "Josh";

    //data type
    #integer 
    $num = 42;
    #double
    $dub = 42.02;
    #bool
    $boo = true; 
    #arrays
    $arr = array('a', 'b', 'c');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INF653 Week 2</title>
</head>
<body>
<i>
    <?php echo "<h1>Hello {$name}!</h1>" ?>
</i>
    <p><?php echo $arr[2] ?></p>
</body>
</html>