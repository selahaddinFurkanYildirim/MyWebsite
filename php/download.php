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
    <?php
$path = "../uploads/".$_POST["filename"];
if ($path!="../uploads/" && file_exists($path)) {
header('Accept-Ranges: bytes');  // For download resume
header('Cache-Control: must-revalidate, post-check=0, pre-check=0' );
header('Content-Description: File Transfer' );
header('Content-Disposition: attachment; filename="'.basename( $path ).'"' );
header('Content-Length: ' . filesize($path));  // File size
header('Content-Transfer-Encoding: binary');  // For Gecko browsers mainly
header('Content-Type: application/octet-stream' );
header('Expires: 0' );
header('Last-Modified: ' . gmdate('D, d M Y H:i:s', filemtime($path)) . ' GMT');
header('Pragma: no-cache' );
ob_clean();
flush();
readfile($path);
}
else {
?>    <link rel="stylesheet" href="../styles/styles.css">
<button style="position: relative;width: 95%;left:2%;" class="yesil-kutu" onclick="history.back()"><</button>
<div style="position: absolute;top: 10%;width: 99%;height: 80%">
    <div class="renkli-kutu">
        <textarea style="left: 1%; max-width: 99%; width: 99%; height: 80%;" disabled name="textoutput" id="textoutput" placeholder="There is any file.">bir hata olustu</textarea></div></div>
<?php
}
?>
</body>
</html>