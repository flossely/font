<?php
$name = $_REQUEST['name'];
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<title>Font Viewer</title>
<link rel="shortcut icon" href="sys.fon.png?rev=<?=time();?>" type="image/x-icon">
<style>
@font-face {
    font-family: "userdefine";
    src: url("<?=$name;?>");
}
.userDefine {
    font-family: "userdefine";
    font-size: 20pt;
}
</style>
</head>
<body>
<p class='userDefine'>
0 1 2 3 4 5 6 7 8 9 A B C D E F G H I J K L M N O P Q R S T U V W X Y Z a b c d e f g h i j k l m n o p q r s t u v w x y z
</p>
</body>
</html>
