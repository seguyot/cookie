<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MiniChat</title>
    <link rel="stylesheet" type="text/css" href="miaou.css">
</head>
<body>
<center>
<h1> Welcome To My MiniChat!</h1>
<h3>Please fill the form,thank you</h3>
</center>
<center>
<form method="POST" action="" >
<fieldset>

    <label for="pseudo">Pseudo</label>
    <input type="text" name="pseudo" id="pseudo"
    <?php
    if (isset ($_COOKIE['pseudo'])){
        $cookhoover = htmlspecialchars(strip_tags ($_COOKIE['pseudo']));
        echo "value=".$cookhoover;
    }
    ?>
    >

    <br>
    <label for="message">Message</label>
    <input type="text" name="message" id="message">
    <br>
    <input type="submit" value="Valider" /><br>

</fieldset>
</form>
 </center>   
 <?php
include( 'send.php');
include('return.php');
?>
</body>
</html>