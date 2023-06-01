<?php



$days = 'sun';



switch ($days) 
{
    case 'mon':
        echo"Mon<br>";
        break;

        case 'tue':
            echo"Tue<br>";
break;
            case 'wed':
                echo"Wed<br>";
break;
                case 'thur':
                    echo"Thu<br>";
break;
                    case 'fri':
                        echo"Fri<br>";
break;
                        case 'sat':
                            echo"Sat<br>";
break;
                            case 'sun':
                                echo"Sun<br>";
break;

    default:
    echo"invalid ";
        break;
}


?>