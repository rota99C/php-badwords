<?php
//Creare una variabile con un paragrafo di testo a vostra scelta.
$pragraphText = "lorem Lorem, fucking dolor sit amet consectetur adipisicing elit. Voluptatem dolorem, quam possimus cumque nisi dignissimos sed illum praesentium tempora aut, aliquam mollitia ea voluptatibus esse cum consequuntur non id error";
$brutteParole = $get['parole'];
//Una parola da censurare viene passata dall'utente tramite parametro GET.
$censurato = str_replace($brutteParole, "***", $pragraphText);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>
        paragrafo da anilizzare
    </h1>
    <p>
        <?php echo $pragraphText ?>
    </p>

    <h2>
    <!-- Stampare a schermo il paragrafo e la sua lunghezza. -->
        questo paragrafo ha questa lunghezza: 
        <?php  
            echo strlen($pragraphText); 
        ?> 

    </h2>

    <p>
        <h3>→ Censurato:</h3>
        <?php echo $censurato ?>
    </p>
    
</body>
</html>