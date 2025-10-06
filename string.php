<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sentence = "My name is Ton-od, Andrei Nash";
        $char_count = strlen($sentence);
        $word_count = str_word_count($sentence);
        $uppercase_sentence = strtoupper($sentence);
        $lowercase_sentence = strtolower($sentence);

        echo "The sentence is: '$sentence'","<br>";
        echo "It has $char_count characters","<br>";
        echo "It has $word_count words","<br>";
        echo "In uppercase, it becomes: $uppercase_sentence","<br>";
        echo "In lowercase, it becomes: $lowercase_sentence";
    ?>
</body>
</html>