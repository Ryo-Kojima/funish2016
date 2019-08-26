<?php
error_reporting(0);
session_start();
mb_language("japanese");
mb_internal_encoding("UTF-8");

$name = $_SESSION["name"];
$school = $_SESSION["school"];
$major = $_SESSION["major"];
$age = $_SESSION["age"];
$email = $_SESSION["email"];
$message = $_SESSION ["message"];

$send = "";
$error = "";

if (!empty($email)) {
    try {
      $to = "info@funish.tokyo";
      $subject = "参加申請連絡";
      $content = $name."さんから参加申請ありました。"."\r\n"."\r\n".
      "入力内容"."\n".
      "名前：".$name."\n".
      "学校名：".$school."\n".
      "学部名：".$major."\n".
      "学年：".$age."\n".
      "メールアドレス：".$email."\n".
      "お問い合わせ内容：".$message."\n";
      $headers = "From:".$email;
      $headers .= "\n";

      if (mb_send_mail($to, $subject, $content, $headers)) {
        $send = "メールを送信しました。";
      }
      else {
        $send = "メールを送信失敗しました。";
      }
    }
    catch (Exception $e) {
      print "error:" . $e->getMessage();
    }
    try {
      $to = $email;
      $subject = "参加申請連絡";
      $content = $name."様"."\r\n"."\r\n".
      "お問い合わせありがとうございました。"."\n".
      "後ほど担当者から連絡させて頂きます。"."\r\n"."\r\n".
      "入力内容"."\n".
      "名前：".$name."\n".
      "学校名：".$school."\n".
      "学部名：".$major."\n".
      "学年：".$age."\n".
      "メールアドレス：".$email."\n".
      "お問い合わせ内容：".$message."\n";
      $headers = "From:"."info@funish.tokyo";
      $headers .= "\n";

      if (mb_send_mail($to, $subject, $content, $headers)) {
        //$send = "メールを送信しました。";
      }
      else {
        $send = "メールを送信失敗しました。";
      }
    }
    catch (Exception $e) {
      print "error:" . $e->getMessage();
    }
}
else {
  $error = "error";
}
include_once "php/comp.php";
?>
