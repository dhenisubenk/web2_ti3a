<?php
$to = "dsubenk@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: garasicv@gmail.com";

mail($to, $subject, $txt, $headers);
