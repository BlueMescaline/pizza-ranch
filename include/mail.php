<?php

    $header.="From: WEBMASTER <szellrobert92@gmail.com>\n";
    $message = "$username, Ön sikeresen regisztrált a Pizza Ranch weboldalára: \n Hogy aktiválja a regisztrációt kérem kattintson az alábbi linkre:\n http://localhost/pizzeria/include/aktivalas.php?u=$username&id=$user_id&code=$code";
    $to = $email.", admin@admin.com";

    $subject = "Pizza Ranch - Sikeres regisztráció";
    mail($to,$subject,$message,$header);
?>