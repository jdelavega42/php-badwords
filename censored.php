<?php
$textarea = $_GET['textarea'];
$word = $_GET['word'];

// if(isset($_GET['textarea'])){
//     $textarea = $_GET['textarea'];
// };

// if(isset($_GET['word'])){
//   $word = $_GET['word'];
// };
$censored_text = str_replace($word,'***', $textarea);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censored: OutPut</title>
</head>
<body>
    <h2>Testo originale</h2>
    <p><?php echo $textarea; ?></p>
    <p>Lunghezza testo: <?php echo strlen($textarea); ?> caratteri</p>
    
    <h2>Testo censurato</h2>
    <p><?php echo $censored_text; ?></p>
    <p>Lunghezza testo: <?php echo strlen($censored_text); ?> caratteri</p>
</body>
</html>