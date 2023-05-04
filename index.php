<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censored</title>
</head>
<body>
    <form action="censored.php" method="GET">
        <label for="textarea">Inserisci il testo</label>
        <textarea name="textarea" id="textarea"> </textarea>

        <label for="word">Parola da censurare</label>
        <input type="text" name="word" id="word">
        
        <button type="submit">Invia</button>
        <button type="reset">Annulla</button>
    </form>
</body>
</html>