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

                <h1>inscription</h1>
                
                 <p>Nom d'utilisateur</p>

                 <input type="text" name="username" value="identifiant">

                 <p>Mot de passe</p>

                 <input type="password" name="password" value="mot de passe">

                 <p>Répeter votre mot de passe</p>

                 <input type="password" name="repeatpassword" value="mot de passe1">



<!-- bouton connexion -->
                <input type="submit" value='inscription' name="submit">
            </form>

        </div>



<?php

if (isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $repeatpassword=$_POST['password'];

    if ($username&&$password&&$repeatpassword)
    {


       if ($password==$repeatpassword) 
       {
           $connect=mysql_connect('localhost','root','Current-Root-Password') or die ('Error');

           mysql_select_db('phpaccueil');

           $query=mysql_query("INSERT INTO users VALUES('','$username','$password')");

           die("inscription terminé veuillez vous  <a href='accueil.php'>connecter</a>");



       }else echo "les mots de passe doivent être identiques";


    }else echo "veuillez saisir tous les champs";
}

?>


    </body>
</html>