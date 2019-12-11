<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>


    <body>
    
        <div id="container">

            <!-- zone de connexion -->
            
            <form action="verification.php"  method="post" >

                <h1>Connexion</h1>
                
            <label><b>Nom d'utilisateur</b></label>

                <input type="text" name="username" value="identifiant">

            <label><b>Mot de passe</b></label>

                <input type="password" name="password" value="mot de passe">


<!-- bouton connexion -->
                <input type="submit" value='LOGIN' name="sbmt">
            </form>


<!----------------------------------------------------------------------------------------------------->

        </div>
    </body>
</html>