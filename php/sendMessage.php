<?php
$file=fopen("../data/mesajlar.txt","a");
fwrite($file,($_POST['mesaj']."\n"));
fclose($file);
echo "$name<script>history.back()</script>";
?>