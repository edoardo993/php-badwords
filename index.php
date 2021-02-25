<!-- EXERCISE
    Creare una variabile con un paragrafo di testo. Usate pure il Lorem Ipsum.
    Scrivere a schermo la lunghezza del paragrafo.
    Infine, visualizzare il paragrafo sostituendo la badword passata in GET con tre *.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP</title>
</head>
<body>

    <?php

        $text='Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint magni fuga aut.
        Nostrum error repudiandae nesciunt recusandae! Magni quos, harum deserunt minus,
        ullam debitis, provident odit excepturi porro fugit ut!';

        $lengthParagraph=strlen($text);

        $text=str_replace('debitis', '***', $text);
        
    ?>
    <div class="container">

        <h1 class="main-title"><span class="php-word">PHP</span> BADWORDS</h1>

        <div class="text-container">
            <p class="text"><?php echo $text; ?></p>
            <p class="length-text">La lunghezza del paragrafo è di <span class="length-number"><?php echo $lengthParagraph?></span> lettere!</p>
        </div>

    </div>

</body>
</html>