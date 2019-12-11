<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div id=container>

<div id=prod1>
<p>produit 1</p>
<input type="submit" value='delete' name="sbmt">
<input type="submit" value='ADD' name="add">

</div>

<div id=prod2>
<p>produit 2</p>

<input type="submit" value='delete' name="sbmt">
<input type="submit" value='ADD' name="add">
</div>

<div id=prod3>
<p>produit 3</p>

<input type="submit" value='delete' name="sbmt">
<input type="submit" value='ADD' name="add">
</div>

<div id=prod4>
<p>produit 4</p>

<input type="submit" value='delete' name="sbmt">
<input type="submit" value='ADD' name="add">
</div>

<div id=prod5>
<p>produit 5</p>

<input type="submit" value='delete' name="sbmt">
<input type="submit" value='ADD' name="add">
</div>

<div id=prod6>
<p>produit 6</p>

<input type="submit" value='delete' name="sbmt">
<input type="submit" value='ADD' name="add">
</div>


</div>
<!-- ------------------------------------------------------------------------------------------------- -->




<?php


$tab = array(
"prod1" => 50,
"prod2" => 45,
"prod3" => 30,
"prod4" => 35,
"prod5" => 41,
"prod6" => 24,
);



$element = 'hello';



unset($tab[array_search($element, $tab)]);

print_r($tab);

// affiche
// Array ( [0] => world [2] => good [3] => planet )

sort($tab); // Trie un tableau

print_r($tab);
// Affiche
// Array ( [0] => good [1] => planet [2] => world )



/*---------------------------------------------------------------*/
/*
    Titre : Supprime un élément dans un tableau                                                                         
                                                                                                                          
    URL   : https://phpsources.net/code_s.php?id=188
    Date édition     : 11 Déc 2006                                                                                        
    Date mise à jour : 24 Sept 2019                                                                                      
    Rapport de la maj:                                                                                                    
    - fonctionnement du code vérifié                                                                                    
*/
/*---------------------------------------------------------------*/

   
 
?>
</body>
</html>



   













