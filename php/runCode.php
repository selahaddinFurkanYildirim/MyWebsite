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
<?php
if(isset($_POST["dil"])){
    $dil=$_POST["dil"];
}
else echo("<script>window.location = '/'</script>");
if($dil=="cpp"){
    $strDosya_Adi="main.cpp";
    $dosyaadi='../project/uploads/' . $strDosya_Adi;
    for ($i=1; file_exists($dosyaadi); $i++)
    {
        $fileext = (strpos($strDosya_Adi,'.')===false?'':'.'.substr(strrchr($strDosya_Adi, "."), 1));
        $filename = substr($strDosya_Adi, 0, strlen($strDosya_Adi)-strlen($fileext)).'['.$i.']'.$fileext;
        $dosyaadi = "../project/uploads/".$filename;
    }
    $file=fopen($dosyaadi,"w");
    fwrite($file,($_POST['textcode']));
    fclose($file);

    $strDosyaAdii="input.txt";
    $dosyaadii='../project/uploads/' . $strDosyaAdii;
    for ($i=1; file_exists($dosyaadii); $i++)
    {
        $fileext = (strpos($strDosyaAdii,'.')===false?'':'.'.substr(strrchr($strDosyaAdii, "."), 1));
        $filename = substr($strDosyaAdii, 0, strlen($strDosyaAdii)-strlen($fileext)).'['.$i.']'.$fileext;
        $dosyaadii = "../project/uploads/".$filename;
    }
    $file=fopen($dosyaadii,"w");
    fwrite($file,($_POST['textinput']));
    fclose($file);

    $strDosyaAdio="output.txt";
    $dosyaadio='../project/uploads/' . $strDosyaAdio;
    for ($i=1; file_exists($dosyaadio); $i++)
    {
        $fileext = (strpos($strDosyaAdio,'.')===false?'':'.'.substr(strrchr($strDosyaAdio, "."), 1));
        $filename = substr($strDosyaAdio, 0, strlen($strDosyaAdio)-strlen($fileext)).'['.$i.']'.$fileext;
        $dosyaadio = "../project/uploads/".$filename;
    }
    exec("g++ ".$dosyaadi." --std=c++11 -o".$dosyaadi.".exe");
    exec($dosyaadi.".exe < ".$dosyaadii." > ".$dosyaadio);
    $file=fopen($dosyaadio,"r");
    $message="";
    if (filesize($dosyaadio)>0) {
        $message=fread($file,filesize($dosyaadio));
    }
    fclose($file);
}
else if($dil=="py"){
  chdir("../project/uploads");
  $strDosya_Adi="main.py";
  $dosyaadi=$strDosya_Adi;
  for ($i=1; file_exists($dosyaadi); $i++)
  {
      $fileext = (strpos($strDosya_Adi,'.')===false?'':'.'.substr(strrchr($strDosya_Adi, "."), 1));
      $filename = substr($strDosya_Adi, 0, strlen($strDosya_Adi)-strlen($fileext)).'['.$i.']'.$fileext;
      $dosyaadi = $filename;
  }
  $file=fopen($dosyaadi,"w");
  fwrite($file,($_POST['textcode']));
  fclose($file);

  $strDosyaAdii="input.txt";
  $dosyaadii=$strDosyaAdii;
  for ($i=1; file_exists($dosyaadii); $i++)
  {
      $fileext = (strpos($strDosyaAdii,'.')===false?'':'.'.substr(strrchr($strDosyaAdii, "."), 1));
      $filename = substr($strDosyaAdii, 0, strlen($strDosyaAdii)-strlen($fileext)).'['.$i.']'.$fileext;
      $dosyaadii =$filename;
  }
  $file=fopen($dosyaadii,"w");
  fwrite($file,($_POST['textinput']));
  fclose($file);
  
  shell_exec("chmod +x ".$dosyaadi);
  $message=shell_exec("python3 ".$dosyaadi." < ".$dosyaadii);
}
else if($dil=="sh"){
    $strDosya_Adi="main.sh";
    $filename="main.sh";
    $dosyaadi='../project/uploads/' . $strDosya_Adi;
    for ($i=1; file_exists($dosyaadi); $i++)
    {
        $fileext = (strpos($strDosya_Adi,'.')===false?'':'.'.substr(strrchr($strDosya_Adi, "."), 1));
        $filename = substr($strDosya_Adi, 0, strlen($strDosya_Adi)-strlen($fileext)).'['.$i.']'.$fileext;
        $dosyaadi = "../project/uploads/".$filename;
    }
    $strDosya_Adi=$filename;
    $file=fopen("".$dosyaadi,"w");
    fwrite($file,($_POST['textcode']));
    fclose($file);
    $strDosyaAdii="input.txt";
    $dosyaadii='../project/uploads/' . $strDosyaAdii;
    for ($i=1; file_exists($dosyaadii); $i++)
    {
        $fileext = (strpos($strDosyaAdii,'.')===false?'':'.'.substr(strrchr($strDosyaAdii, "."), 1));
        $filename = substr($strDosyaAdii, 0, strlen($strDosyaAdii)-strlen($fileext)).'['.$i.']'.$fileext;
        $dosyaadii = "../project/uploads/".$filename;
    }
    $file=fopen($dosyaadii,"w");
    fwrite($file,($_POST['textinput']));
    fclose($file);
    exec("chmod +x ".$dosyaadi);
    $message = shell_exec("./".$dosyaadi." < ".$dosyaadii);
}
else{
    ?>
    <div style="position: absolute;top: 10%;width: 99%;height: 80%">
    <div class="kirmizi-kutu">
        <textarea style="left: 1%; max-width: 99%; width: 99%; height: 80%;" disabled name="textoutput" id="textoutput" placeholder="This is output.
Why is this empty?">Bir hata oluştu.</textarea></div></div>
    <?php
    exit();
}
?>
<div style="position: absolute;top: 10%;width: 99%;height: 80%">
    <div class="renkli-kutu">
        <textarea style="left: 1%; max-width: 99%; width: 99%; height: 80%;" disabled name="textoutput" id="textoutput" placeholder="This is output.
Why is this empty?"><?php 
echo ($message);
?>
</textarea></div></div>
  </body>
</html>