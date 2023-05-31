<?php


//if-else 
//if-elseif-else
//Nested if-else
//If-else Ladder


//switch case

//for loop
//while  loop
//do  while loop
//foreach loop   



$marks = 65;

// if($marks>=33)
// {
//     echo"You Passed";
// }
// else
// {
//     echo"You Failed";
// }




// if ($marks>=98) 
// {
//     echo " Pappu Pass Hogaya<br>";
// } //exit
// elseif($marks>80)
// {
//     echo " Kitna Padhega Bhai<br>";
// } //exit  
// else
// {
//     echo "Pappu Ghar ja";
// }



// if($marks>=33)
// {
//     if($marks>=33 && $marks<=50)
//     {
//         echo "ThikThak";
//     }
//     elseif($marks>=51 && $marks<=70)
//     {
//         echo "Bhadiya";
//     }
//     elseif($marks>=71 && $marks<=90)
//     {
//         echo "Aur Kitna Padhega";
//     }
//     elseif($marks>=91 && $marks<=100)
//     {
//         echo "Mere jasie 3 pass hojaye";
//     }
//     else
//     {
//         echo "5 Marks Extra For Good Handwriting";
//         echo "Chacha Vidhayak Hai Hamare";
//     }
// }
// else
// {
//     echo "Padhai Likhai kro IAS VIAS Bano Aur Desh Ko Sambhalo";
// }


if($marks>33)
{
    if($marks>50)
    {
        if($marks>70)
        {
            if($marks>90)
            {
                echo"Well Done";
            }
            else
            {
                echo"try again";
            }
        }
        else
        {
            echo"try again";
        }
    }
    else
    {
        echo"try again";
    }
}
else
{
    echo"try again";
}



?>