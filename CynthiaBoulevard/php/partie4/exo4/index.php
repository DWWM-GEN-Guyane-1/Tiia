<!-- exo4/

 

 Faire une fonction qui prend en paramètre deux nombres. 

 La fonction doit retourner :



    Le premier nombre est plus grand si le premier nombre 

	est plus grand que le deuxième,

	

    Le premier nombre est plus petit si le premier nombre 

	est plus petit que le deuxième,

	

    Les deux nombres sont identiques si les deux nombres sont égaux -->





<?php





function tu($a,$b)

{

	

	if ($a>$b)

	

   { return "le premier nombre est plus que le deuxième";

   }



   else if ($a<$b)

   { return "Le premier nombre est plus petit";

   }

   else 

   { return "Les deux nombres sont identiques";

   }

}


$a=15;

$b=20;





 echo tu($a,$b);
