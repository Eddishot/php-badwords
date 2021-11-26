
<?php

/*
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) 
tutte le occorrenze della parola da censurare.

*/
    $myText = "Digitare qua la tua parola da censurare";
    // var_dump($myText);

    // strlen($myText);


    $censoredWord= $_GET["word"];

    $badWord = str_replace($censoredWord, "***", $myText);




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
     <?php echo $myText ?> 
    </h1>
     <p>Lunghezza Stringa
        <?php echo strlen($myText) ?> 
     </p>
   
    <h1>
        <?php echo $badWord ?>
    </h1>
    <p>Lunghezza Stringa
        <?php echo strlen($badWord) ?> 
    </p> 
    
</body>
</html> 
    
        
    