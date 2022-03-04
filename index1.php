<?php

$first = 10;
$second = 20;
$third = 20;

switch (true) {
    case $first>=$second&&$first>=$third:
        echo $first . "<br>";
        switch(true){
            case $second >=$third:
                echo $second . "<br>";
                echo $third . "<br>";
                break;
            case $third >= $second:
                echo $third . "<br>";
                echo $second . "<br>";
                break;
        }
        break;
        case $second>=$first&&$second>=$third:
            echo $second . "<br>";
            switch(true){
                case $first >=$third:
                    echo $first . "<br>";
                    echo $third . "<br>";
                    break;
                case $third >= $first:
                    echo $third . "<br>";
                    echo $first . "<br>";
                    break;
            }
            break;
            case $third>=$first&&$third>=$second:
                echo $third . "<br>";
                switch(true){
                    case $first >=$second:
                        echo $first . "<br>";
                        echo $second . "<br>";
                        break;
                    case $second >= $first:
                        echo $second . "<br>";
                        echo $first . "<br>";
                        break;
                }
                break;
    
    default:
        echo "there is no order";
        break;
}

if($first>=$second && $first>=$third){
    echo $first . "<br>";
    if($second>=$third){
        echo $second . "<br>";
        echo $third . "<br>";
    }else{
        echo $third . "<br>";
        echo $second . "<br>";
    }
}elseif($second>=$first && $second>=$third){
    echo $second . "<br>";
    if($first >= $third){
        echo $first . "<br>";
        echo $third . "<br>";
    }else{
        echo $third . "<br>";
        echo $first . "<br>";
    }
}elseif($third>=$first && $third>=$second){
    echo $third . "<br>";
    if($first >= $second){
        echo $first . "<br>";
        echo $second . "<br>";
    }else{
        echo $second . "<br>";
        echo $first . "<br>";
    }
}

?>