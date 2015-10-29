<?php


    $header.="From: WEBMASTER <szellrobert92@gmail.com>\n";
    $header.="X-Sender: <szellrobert92@gmail.com>>\n";
    $header.="X-Mailer: PHP\n";
    $header.="X-Priority: 1\n";
    $header.="Return-Path: <szellrobert92@gmail.com>>\n";
    $header.="Content-Type: text/html; charset=UTF-8\n";


    $message = "$username, Ön sikeresen regisztrált a Pizza Ranch weboldalára:\n Hogy aktiválja a regisztrációt kérem kattintson az alábbi linkre:\n http://localhost/pizzeria/admin/include/aktivalas.php?u=$username&id=$user_id&code=$code";
    $to = $email.", admin@admin.com";

    $subject = "Pizza Ranch - Sikeres regisztráció";
    mail($to,$subject,$message,$header);


?>