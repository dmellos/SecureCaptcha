<?php
session_start();
$_SESSION = array();

include("captcha.php");
$_SESSION['captcha'] = simple_php_captcha();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Captcha</title>
</head>
<body>
    <p>
        <?php
        echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code">';

        ?>
    </p>


</body>
</html>



