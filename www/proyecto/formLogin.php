<?php
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <p>
        <?php
            if(isset($error)){
                echo $error;
            }
        ?>
    </p>
    <form action='login.php' method='post'>
        <fieldset>
            <legend>Login</legend>
            <div>
                <label for='login'>login:</label>
                <input type='text' name='login' id='login' maxlength="50" required>
            </div>
            <div>
                <label for='password'>password:</label>
                <input type='password' name='password' id='password' maxlength="50" required>
            </div>
            <div>
                <input type='submit' name='enviar' value='Enviar' />
            </div>
        </fieldset>
    </form>
</body>
</html>