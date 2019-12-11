

<?php

$array = 
[
"lulu" => "lulu973",
"jojo" => "jojo973",
"nana" => "nana973",
"soso" => "soso973",
"vivi" => "vivi973",
"kath" => "kath973",
];


if(array_key_exists($_POST['username'], $array) )
{
        echo 'username OK';
    
     if($_POST['password'] == $array[$_POST['username']])

     {
        echo 'password OK';
     }

   //   else ($_POST['password'] != $array[$_POST['username']])

   //   {
   //      echo 'saisi incorrecte';
   //   }

}    
  
   













// ) && isset($_POST['password']))