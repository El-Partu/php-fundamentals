<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditionals</title>
</head>
<body>
    <?php
    //     /*CONDITIONALS */
    //if statement

    if($x > 10){
        echo "God is in charge";
    }else{
        echo "In all things I give God the glory"."<br/>";
    }

    //Switch case
    switch($x){
        case 1:
            case 2:
                case 3:
                    echo "You are part of my family"."<br/>";
                break;
        case  4:
            echo "Hey! you're still part of my family"."<br/>";
            break;
        default:
        echo "You are not in any of the family"."<br/>";
    }

    //Tenary operator
   echo $x > 3 ?  "Whatever God has said about me shall come to pass":"God is preparing me for something more than I can dream of";
    ?>
</body>
</html>