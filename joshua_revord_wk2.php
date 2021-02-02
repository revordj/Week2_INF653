

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2 INF653 Assignment</title>
    <link rel="stylesheet" type="text/css" href="css/wk2.css">
</head>
<body>
    <div id = 'hbar'>
    <p id= 'htxt'> Today is <?php echo date('D M j, Y') ?></p>
    </div>

    <div id = 'mainbar'>
    <?php
        $fname = filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_STRING);
        $lname = filter_input(INPUT_GET, 'lastname', FILTER_SANITIZE_STRING);
        $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);

        if($fname != ''){
            $fnExists = true;
        }
        else{
            $fnExists = false;
            echo "You did not submit the firstname parameter</br>";
        }

        if($lname != ''){
            $lnExists = true;
        }
        else{
            $lnExists = false;
            echo "You did not submit the lastname parameter </br>";
        }
        
        if($age != ''){
            $ageExists = true;
        }
        else{
            $ageExists = false;
            echo "You did not submit the age parameter</br>";
        }
        
        if($fnExists && $lnExists && $ageExists)
        {
            echo "<span id = 'titlespan'>Hello, my name is " . $fname . ' ' . $lname . ".</span></br></br>";
            if($age < 18)
            {
                echo "<span id = 'infospan'>I am " . $age . " years old, and I am not old enough to vote in the United States. </br></br>";
            }
            else
            {
                echo "<span id = 'infospan'>I am " . $age . " years old, and I am old enough to vote in the United States. </br></br>";
            }

            echo "That means I'm at least " . number_format($age * 365) . " days old.</span>";
        }

    ?>
    </div>
</body>
</html>