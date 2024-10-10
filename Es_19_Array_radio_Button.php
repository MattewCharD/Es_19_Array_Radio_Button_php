<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domanda Pianeti</title>
</head>
<body style="background-color: lightblue;">

<?php 
    $domanda="Qual è il pianeta più vicino al sole?"; 
    $risposte=["Venere" , "Terra" , "Marte" , "Mercurio" , "Giove"];
    $str="";
    for ($i=0; $i < count($risposte); $i++) { 
        $str=$str."<input type='radio' id='p".$i."' name='pianeta' >
        <label for='p".$i."'>".$risposte[$i]."</label><br>";
    }
    $str=$str." </select>";
    echo "<p style='font-style: italic; font-weight: bold;'>".$domanda."</p><br>".$str;

?>


</body>
</html>