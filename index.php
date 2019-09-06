<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include_once "QuadraticEquation.php";
$quadraticEquation = new QuadraticEquation(1 ,5,4);
$quadraticEquation ->getDiscriminant();
if ($quadraticEquation ->getDiscriminant() < 0){
    echo $quadraticEquation -> getRoot4();
}
if ($quadraticEquation -> getDiscriminant() === 0 ){
    echo "Phương trình có 1 nghiệm kép" . "<br>";
    echo $quadraticEquation -> getRoot3();
}
if ($quadraticEquation -> getDiscriminant() > 0){
    echo "Phương trình có 2 nghiệm" . "<br>";
    echo "r1: ".$quadraticEquation -> getRoot1() . "<br>";
    echo "r2: ".$quadraticEquation -> getRoot2() . "<br>";

}
?>
</body>
</html>
