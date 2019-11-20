$(document).ready(function(){ 
    var total=0;
    var victoireU=0;
    var defaiteU=0;


    $("#boutonshifumi").click(function(){
        var ordinateur=Math.round(Math.random() * 2)
        document.getElementById('choixordinateur').selectedIndex=ordinateur;
        var utilisateur=document.getElementById('choixutilisateur').selectedIndex;
     total++;

        if ((ordinateur===2 && utilisateur===1)||(ordinateur===0 && utilisateur===2)||(ordinateur===1 && utilisateur===0)) 
        {document.getElementById("part").value="ordinateur à gagné";
            defaiteU++;
        }
        else 
        {

        if ((utilisateur===2 && ordinateur===1)||(utilisateur===0 && ordinateur===2)||(utilisateur===1 && ordinateur===0)) 
        {document.getElementById("part").value="vous-avez gagné";
            victoireU++;
        }
        else 
        {document.getElementById("part").value="Match nul";
    
        }

        }

        document.getElementById("part1").value=(victoireU/total)*100;
        document.getElementById("part2").value=(defaiteU/total)*100;


    });
    
});
    

