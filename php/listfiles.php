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
<div class="renkli-kutu" style="position: absolute;top: 10%;width: 97%;height: 85%;">
<?php 
$message=shell_exec("cd ../uploads && ls");
$yukseklik=0;
if($message!=""){
    for ($i=0; $i < strlen($message); $i++) { 
        $j=$i;
        $yukseklik+=75;
        if ($i<strlen($message)) {
            for(;$i<strlen($message) && $message[$i]!=$message[strlen($message)-1] && $message[$i]!=" ";$i++);
            echo("<a style=\"height: 60px\"><a style=\"position: absolute;top: ".$yukseklik."px;left: 17%;\" class=\"renkli-kutu\" target=\"_blank\" href=\"../uploads/".substr($message,$j,$i-$j)."\">".substr($message,$j,$i-$j)."</a></a><br>");
        }
        $j=$i;
        $i++;
        if ($i<strlen($message)) {
            for(;$i<strlen($message) && $message[$i]!=$message[strlen($message)-1] && $message[$i]!=" ";$i++);
            echo("<a style=\"height: 60px\"><a style=\"position: absolute;top: ".$yukseklik."px;\" class=\"renkli-kutu\" target=\"_blank\" href=\"../uploads/".substr($message,$j,$i-$j)."\">".substr($message,$j,$i-$j)."</a></a><br>");
        }
        $j=$i;
        $i++;
        if ($i<strlen($message)) {
            for(;$i<strlen($message) && $message[$i]!=$message[strlen($message)-1] && $message[$i]!=" ";$i++);
            echo("<a style=\"height: 60px\"><a style=\"position: absolute;top: ".$yukseklik."px;right: 17%;\" class=\"renkli-kutu\" target=\"_blank\" href=\"../uploads/".substr($message,$j,$i-$j)."\">".substr($message,$j,$i-$j)."</a></a>");
        }
    }
}
else{
    echo"Burası Boş";
}
?>
</div>
</body>
</html>