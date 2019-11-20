
$(document).ready(function(){ 


// dès qu'on clic sur le bouton moye
    $("#MG").click(function(){


    var ta=(document.getElementById('note1').value+"+"+
        document.getElementById('note2').value+"+"+
        document.getElementById('note3').value+"+"+
        document.getElementById('note4').value+"+"+
        document.getElementById('note5').value);
        ta=eval(ta)/5;

        document.getElementById('moyenne').value=ta; 