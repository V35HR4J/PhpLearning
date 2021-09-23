<?php
$marks=90;

switch($marks){
    case 10:
        echo "You got 10 marks and your marks is very poor <br>";
        break;
    case 40:
        echo "You got 50 marks and you are just passed <br>";
        break;
    case 90:
        echo "You got 90 marks, you are passed with excellent marks! <br>";
        break;
    default:
        echo "You marks are weird! <br>";
        break;
}

?>