
<html>


    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>


    <body>

   

    
        <div id="container">

            <!-- zone de connexion -->
            
            <form action="index.php"  method="post" >

                <h1>Connexion</h1>
                
            <label><b>Nom d'utilisateur</b></label>

                <input type="text" name="username" value="identifiant">

            <label><b>Mot de passe</b></label>

                <input type="password" name="password" value="mot de passe">


<!-- bouton connexion -->
                <input type="submit" value='LOGIN' name="sbmt">
            </form>

        </div>

<!---------------------------------------------------------------------------------------------------->


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


 if(array_key_exists($_POST['username'], $array))
{

        echo 'username OK';



     if($_POST['password'] == $array[$_POST['username']])

     {
        echo 'password OK';
        header("Location:verification.php");

     }

      else 

      {
        echo 'password incorrecte';
      }
}

else 

   {
      echo 'saisie incorrecte';
   }


   ?>


    </body>
</html>