<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Registrierung"; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Registrierung</h1>

    <form action="registrierung.php" method="POST">
        <label for="anrede">Anrede:</label>
        <select id="anrede" name="anrede" required>
            <option value="">Bitte auswählen</option>
            <option value="Herr">Herr</option>
            <option value="Frau">Frau</option>
            <option value="Divers">Divers</option>
        </select>
        <br>

        <label for="vorname">Vorname:</label>
        <input type="text" id="vorname" name="vorname" required minlength="2">
        <br>

        <label for="nachname">Nachname:</label>
        <input type="text" id="nachname" name="nachname" required minlength="2">
        <br>

        <label for="email">E-Mail-Adresse:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required minlength="3">
        <br>

        <label for="password">Passwort:</label>
        <input type="password" id="password" name="password" 
       required minlength="8" 
       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=]).{8,}" 
       title="Das Passwort muss mindestens einen Großbuchstaben, einen Kleinbuchstaben, eine Zahl und ein Sonderzeichen enthalten.">
        <br>

        <label for="password_repeat">Passwort wiederholen:</label>
        <input type="password" id="password_repeat" name="password_repeat" required>
        <br>

        <button type="submit">Registrieren</button>
    </form>
</body>

</html>