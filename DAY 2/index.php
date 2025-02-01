<?php

    $num = -2;
    if($num < 0 ){
        echo "$num is less than 0 <br>";
    }else{
        echo "$num is bigger than 0 <br>";
    }
  
    if($num < 0 ){
        echo "The value of the number is negative <br>";
    }elseif($num == 0){
        echo "The value of the number is zero <br>";
    }else{
        echo "The value of the number is pozitive <br>";
    }


    $age = 15;

    if(($age > 12) && ($age < 20)){
        echo "Ypu are a teenager <br>";
    }
    

    $a = 20;
    $b = 10;

    if($a == $b){
        echo "The value of these two is equal <br>";
    }else{
        echo "The value of these two is not equal <br>";
    }


    $day = "Monday";

    switch($day){
        case 'Monday':
        echo "Start of the week <br>";
        break;
        case 'Tuesday':
        echo "Let's get through the week <br>";
        break;
        case 'Wednesday':
        echo "The middle of the week <br>";
        break;
        case 'Thursday':
        echo "Almost there <br>";
        break;
        case 'Friday':
        echo "Weekend is here! <br>";
        break;
        default:
        echo "Invalid day <br>";
        break;
    }

    
    //loops-gjerat qe perseriten

    #while loop
    $x = 1; //1 ,2 ,3 ,4 ,5 

    while($x <= 5){
        echo "The number is: $x <br> ";

        $x++; //e vazhdon deri sa nuk permbushet me rregulla ne fillim 
    }


    $y = 0;

    do{
        echo "The number is $y <br> <br>";
        $y++;
    }while($y <= 5); //e vazhdon edhe ni numer ma shum per me trg se ma nuk vlen me shembull


?>