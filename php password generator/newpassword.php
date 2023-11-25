<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="testimony.css">
<body>
<div class="container">
    <form action="newpassword.php" method="POST">
        <h3>PASSWORD GENERATOR 😎👮‍♂️</h3>
        <input type="name" name="password" placeholder="HOW MANY DIGIT OF PASSWORD DID YOU WANT(5-11)" required>
        <button type="submit">generate</button>
    </form>
</div>
</body>
</html>
<?php
$password = $_POST["password"];
if ($password == 5 ) {
    echo "5TE34";
}
switch ($password) {
    case 6;
        echo "GE8YY#";
        break;
        case 7;
        echo "7YB4BBR";
        break;
        case 8;
        echo "H2BH3GNM";
        break;
        case 9;
        echo "G78YJBBF4";
        break;
        case 10;
        echo "RT56GGT82T";
        break;
        case 11;
        echo "TGG67YGBNJ7";
        break;
    default:
        echo "please read the instruction carefully!🙄";
        break;
}
?>



