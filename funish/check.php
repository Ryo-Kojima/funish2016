<?php
error_reporting(0);
session_start();
$name = $_POST["name"];
$school = $_POST["school"];
$major = $_POST["major"];
$age = $_POST["age"];
$email = $_POST["email"];
$message = $_POST["message"];
$nameE = "";
$schoolE = "";
$emailE = "";
$messageE = "";

if ($major === "") {
  $major ="未入力";
}

if ($age === "1") {
  $age = "1年生";
}
else if ($age === "2") {
  $age = "2年生";
}
else if ($age === "3") {
  $age = "3年生";
}
else if ($age === "4") {
  $age = "4年生";
}
else {
  $age = "その他";
}

$_SESSION["name"] = $name;
$_SESSION["school"] = $school;
$_SESSION["major"] = $major;
$_SESSION["age"] = $age;
$_SESSION["email"] = $email;
$_SESSION["message"] = $message;

if ($name == null && $school == null && $email == null && $message == null) {
  $nameE = "*名前が未入力です。";
  $schoolE = "*学校名が未入力です。";
  $emailE = "*メールアドレスが未入力です。";
  $messageE = "*お問い合わせ内容が未入力です。";
  include_once "./index.php";
}
else if ($name == null && $school == null && $email == null) {
  $nameE = "*名前が未入力です。";
  $schoolE = "*学校名が未入力です。";
  $emailE = "*メールアドレスが未入力です。";
  include_once "./index.php";
}
else if ($name == null && $school == null && $message == null) {
  $nameE = "*名前が未入力です。";
  $schoolE = "*学校名が未入力です。";
  $messageE = "*お問い合わせ内容が未入力です。";
  include_once "./index.php";
}
else if ($name == null && $email == null && $message == null) {
  $nameE = "*名前が未入力です。";
  $emailE = "*メールアドレスが未入力です。";
  $messageE = "*お問い合わせ内容が未入力です。";
  include_once "./index.php";
}
else if ($school == null && $email == null && $message == null) {
  $schoolE = "*学校名が未入力です。";
  $emailE = "*メールアドレスが未入力です。";
  $messageE = "*お問い合わせ内容が未入力です。";
  include_once "./index.php";
}
else if ($name == null && $school == null) {
  $nameE = "*名前が未入力です。";
  $schoolE = "*学校名が未入力です。";
  include_once "./index.php";
}
else if ($name == null && $email == null) {
  $nameE = "*名前が未入力です。";
  $emailE = "*メールアドレスが未入力です。";
  include_once "./index.php";
}
else if ($name == null && $message == null) {
  $nameE = "*名前が未入力です。";
  $messageE = "*お問い合わせ内容が未入力です。";
  include_once "./index.php";
}
else if ($school == null && $email == null) {
  $schoolE = "*学校名が未入力です。";
  $emailE = "*メールアドレスが未入力です。";
  include_once "./index.php";
}
else if ($school == null && $message == null) {
  $schoolE = "*学校名が未入力です。";
  $messageE = "*お問い合わせ内容が未入力です。";
  include_once "./index.php";
}
else if ($email == null && $message == null) {
  $emailE = "*メールアドレスが未入力です。";
  $messageE = "*お問い合わせ内容が未入力です。";
  include_once "./index.php";
}
else if ($name == null) {
  $nameE = "*名前が未入力です。";
  include_once "./index.php";
}
else if ($school == null) {
  $schoolE = "*学校名が未入力です。";
  include_once "./index.php";
}
else if ($email == null) {
  $emailE = "*メールアドレスが未入力です。";
  include_once "./index.php";
}
else if ($message == null) {
  $messageE = "*お問い合わせ内容が未入力です。";
  include_once "./index.php";
}
else {
  include_once "php/check.php";
}

?>
