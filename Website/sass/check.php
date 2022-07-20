<?php


$conn = mysqli_connect("mysql.hostinger.in","u837170400_robot","123adarsh_A","u837170400_robot");

$totalc = mysqli_query($conn,"
SELECT * FROM regist_test
");

$ecc = mysqli_query($conn,"
SELECT * FROM regist_test WHERE branch='ECE'
");
$eic = mysqli_query($conn,"
SELECT * FROM regist_test WHERE branch='EI'
");
$mec = mysqli_query($conn,"
SELECT * FROM regist_test WHERE branch='ME'
");
$itc = mysqli_query($conn,"
SELECT * FROM regist_test WHERE branch='IT'
");
$csc = mysqli_query($conn,"
SELECT * FROM regist_test WHERE branch='CS'
");
$cec = mysqli_query($conn,"
SELECT * FROM regist_test WHERE branch='CE'
");
$enc = mysqli_query($conn,"
SELECT * FROM regist_test WHERE branch='EN'
");

$malec = mysqli_query($conn,"
SELECT * FROM regist_test WHERE gender='male'
");
$femalec = mysqli_query($conn,"
SELECT * FROM regist_test WHERE gender='female'
");


$total = mysqli_num_rows($totalc);
$ec = mysqli_num_rows($ecc);
$ei = mysqli_num_rows($eic);
$me = mysqli_num_rows($mec);
$it = mysqli_num_rows($itc);
$cs = mysqli_num_rows($csc);
$en = mysqli_num_rows($enc);
$ce = mysqli_num_rows($cec);
$male = mysqli_num_rows($malec);
$female = mysqli_num_rows($femalec);

echo "Total <b>".$total."</b><br><br>";
echo "ECE Students <b>".$ec."</b><br>";
echo 'EI Students <b>'.$ei."</b><br>";
echo 'ME Students  <b>'.$me."</b><br>";
echo 'IT Students <b>'.$it."</b><br>";
echo 'CS Students <b>'.$cs."</b><br>";
echo 'EN Students <b>'.$en."</b><br>";
echo 'CE Students <b>'.$ce."</b><br>";
echo '<br><br>';
echo 'Male Students <b>'.$male."</b><br>";
echo 'Female Students <b>'.$female."</b><br>";


?>
