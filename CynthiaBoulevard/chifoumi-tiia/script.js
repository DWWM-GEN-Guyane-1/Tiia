for (var manche = 0; manche < 3; manche++) {
	 var choixUtilisateur = prompt("Choisissez-vous pierre, feuille, ou ciseaux ?");
	 var pierrepPapierCiseaux = ["pierre", "papier", "ciseaux"];
     var choixOrdi = pierrepPapierCiseaux[Math.floor(Math.random() * pierrepPapierCiseaux.length)];
	
	// Condition du tirage de l'ordinateur
	
	if (choixOrdi < 0.34) {
		choixOrdi = "pierre";
	} 
	else if(choixOrdi <= 0.67) {
		choixOrdi = "feuille";
	} 
	else {
		choixOrdi = "ciseaux";
	} 
	
	console.log("Ordinateur : " + choixOrdi);
	
	// Comparaison entre le choixOrdi et choixUtilisateur
	
	var comparer = function(choixOrdi, choixUtilisateur) {
	
		  if(choixOrdi === choixUtilisateur){
			  return "Egalité !";
		  }
		  
		  else if(choixOrdi === "pierre"){
			  if(choixUtilisateur === "ciseaux"){
				  return "Pierre gagne !";
			  }
			  else {
				  return "feuille gagne !";
			  }
		  }
		  
		  else if(choixOrdi === "feuille"){
			  if(choixUtilisateur === "pierre"){
				  return "Feuille gagne !";
			  }
		  }
		  
		  else if(choixOrdi === "ciseaux"){
			  if(choixUtilisateur === "feuille"){
				  return "Ciseaux gagnent !";
			  }
		  }
		  else{
		  choixUtilisateur = prompt("Choisissez pierre, feuille, ou ciseaux");
		  }
		
	}
	
	var resultat = comparer(choixUtilisateur,choixOrdi);
	
	
	var scoreOrdi = 0;
	var scoreUtilisateur = 0;
	
	  // afficher les résultats de la manche
	
	  if (resultat === 'Egalité !'){
		console.log('=> Egalité !');
	  } else if (resultat === choixUtilisateur) {
		  scoreUtilisateur++;
	
		alert('=> Coup gagnant '+ resultat  +' Score = moi :'+ scoreUtilisateur + 'et ordi:' + scoreOrdi);
	
	  } else {
		  scoreOrdi++;
	}
	
	
	// afficher résultats du jeu
	
	
	var message;
	if (scoreOrdi === scoreUtilisateur) {
	  message = 'Attention ! Égalité !';
	} else if (scoreOrdi > scoreUtilisateur) {
	  message = 'Bouh ! Vous avez perdu !';
	} else {
	  message = 'Youpi ! Vous avez gagné !';
	}
	
	}
	
	alert(message + ' Votre score est de : ' + scoreUtilisateur + ', Contre : ' + scoreOrdi);
	
	
	
	
	
	
	
	
	
	
	
	