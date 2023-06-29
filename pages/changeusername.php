<?php
session_start();
include '../php/change-username.php';
include '../php/globalCss.php';
include '../php/session.php';
$out = change_username();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo genCssArray(['style', 'navbar']) ?>
</head>
<body>

<?php include './global/navbar.php' ?>
<div class="container" style="padding: 22px">
    <div class="items">
        <div class="containerheadtext"><?php echo $out ?></div>
        <a href="./profilelogin.php"><button style="
                padding: 12px 25px;
                margin-top: 12px;"
                                             class="button">Go to profile</button></a>
    </div>
</div>
</body>
</html>

