<?php
$paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa atque libero necessitatibus qui et deleniti explicabo perferendis facilis minima unde, esse harum consequuntur quae id quo! Modi adipisci doloremque pariatur!";
$explode_paragraph = explode(' ', $paragraph);
$censure = $_GET['censure'];
$censure_paragraph = str_replace($censure, '***', $explode_paragraph);
$paragraph_lenght = strlen(implode(' ', $censure_paragraph));

// Per stampare la lunghezza di una stringa usiamo strlen(stringa)
// Immagino sia da usare str_replace(porzionedaModificare, conCosa, stringa)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-BADWORDS</title>
</head>

<body>
    <h1><?php echo implode(' ', $censure_paragraph) ?></h1>
    <h2>Lunghezza del paragrafo: <?php echo $paragraph_lenght ?> caratteri</h2>


</body>

</html>