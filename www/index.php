<!DOCTYPE html>
<html lang="tr">
<link rel="stylesheet" href="../styles/styles.css">
<head>
    <link rel="icon" href="https://selahaddinfurkanyildirim.serveo.net/img/favicon.png">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Writer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Author: Selahaddin Furkan YILDIRIM">
    <meta name="description" content="Selahattin Furkan YILDIRIM değil Selahaddin Furkan YILDIRIM">
    <meta
      name="description"
      content="Selahaddin furkan YILDIRIM tarafından yapilmis olan bu site kod yazmaniza yardimci olur.">
    <script src="script/script.js" defer=""></script>
    <link rel="stylesheet" href="styles/styles.css">
    <style>
      @media screen and (max-width: 600px) {

        body {

          background-image: url('img/back.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }
        textarea{
          border-radius: 1%;
        }

      }
      .yuv{
        border-radius: 5px;
      }
      textarea{
        border-radius: 5px;
      }
      body {
        background-image: url('img/back.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
    </style>
  </head>
  <body id="mybodyel" onkeydown="console.log(event.keyCode);return (event.keyCode != 116 && !event.ctrlKey) || (event.ctrlKey && (event.keyCode==90 || event.keyCode==65 || event.keyCode==88 ||event.keyCode==67 || event.keyCode==86))">

<form action="/" method="post" enctype="multipart/form-data">
    <input type="text" name="isPosted" id="isPosted" value="true" hidden>
    <input type="text" name="should" id="should" value="true" hidden>
    <input hidden style="width: 80%;" autocomplete="off" type="text" id="user" name="user" value="<?php echo $name ?>">
    <input hidden style="width: 80%;" autocomplete="off" type="password" id="passwd" name="passwd" value="<?php echo $id?>">
</form>
<script>
if ( window.history.replaceState ) {
<?php
if($_POST["user"]!=NULL){
  $logfile = fopen("users.log", "a");
  fclose($logfile);
}?>
window.history.replaceState( null, null, window.location.href );

}

</script>

<?php
error_reporting(E_ERROR | E_PARSE);

$usernames=array();
$userids=array();
$numberofusers=0;
$usernamef = fopen("data/username\.php", "r");
fgets($usernamef);
fgets($usernamef);
fgets($usernamef);
fgets($usernamef);
fgets($usernamef);
fgets($usernamef);
fgets($usernamef);
while(!feof($usernamef)){
  $a=fgets($usernamef);
  array_push($usernames,$a);
  $numberofusers=$numberofusers+1;
}
fclose($usernamef);
$useridf = fopen("data/userid\.php", "r");
fgets($useridf);
fgets($useridf);
fgets($useridf);
fgets($useridf);
fgets($useridf);
fgets($useridf);
fgets($useridf);

while(!feof($useridf)){
  $a=fgets($useridf);
  array_push($userids,$a);
}
fclose($useridf);
$name=$_POST["user"]."\n";
$id=$_POST["passwd"]."\n";
$isPosted=$_POST["isPosted"];
$bool=0;
for ($i=0; $i < $numberofusers; $i++){
  if($name==$usernames[$i] && $id==$userids[$i]){
    $bool=1;
  }
}
if($isPosted==NULL && $bool==1 && $id!=NULL && $name!=NULL){
  $logfile = fopen("users.log", "a");
  fwrite($logfile,date('Y-m-d H:i:s')." --> ".substr($name,0,strlen($name)-1)." logged out.\n");
  fclose($logfile);
  ?>
<meta http-equiv="refresh" content="0; URL=/">
  <?php
}
else if($bool==1 && $id!=NULL && $name!=NULL){
  $logfile = fopen("users.log", "a");
  fwrite($logfile,date('Y-m-d H:i:s')." --> ".substr($name,0,strlen($name)-1)." logged in.\n");
  fclose($logfile);
?>
<div id="webpage"><iframe id="iframe" src="index.html" frameBorder="0" class="" scrolling="auto" style="position: fixed;top:0%;left:0%;border-radius: 0%;" height="100%" width="100%">
</iframe></div>
<button style="position: fixed;top: 2%;width: 10%;right: 17%;height: 4%;padding:1px;" onclick="reFresh();" >Refresh</button>
<script>
function reFresh() {
  document.getElementById('iframe').contentWindow.location.reload();
}
</script>
<form method="post">
<button name="button1" id="button1" style="position: fixed;top: 2%;width: 10%;right: 6%;height: 4%;padding:1px;">Logout</button>
<input style="width: 80%;" autocomplete="off" type="text" id="user" name="user" value="<?php echo $name?>"  hidden>
<input style="width: 80%;" autocomplete="off" type="text" id="passwd" name="passwd" value="<?php echo $id?>" hidden>
</form>
<?php
}
else{
?>
<button onclick="location.href='/register/';">Register</button>
<div style="position: fixed;top: 35%;width: 40%;left: 30%;height: 25%;" class="renkli-kutu">
    <form action="/" method="post" enctype="multipart/form-data">
    <div style="font-size: 20px;">Login in to Writer</div>
    <hr>
    <input type="text" name="isPosted" id="isPosted" value="true" hidden>
    <br>
    <input style="width: 80%;" autocomplete="off" type="text" id="user" name="user" placeholder="User name">
    <input style="width: 80%;" autocomplete="off" type ="password" id="passwd" name="passwd" placeholder="Password">
    <br>
    <input style="position: absolute;width: 20%;left: 40%;" id="command" name="command" type="submit" value="Login">
    </form>
    <?php
    if($isPosted=="true"){
      echo "\n\n<div id=\"wrongvalueerr\" style='position:absolute;top:90%;color:red;'>Wrong login values...</div>";
      ?>
        <script>
          function wait(milliseconds) {
              return new Promise((resolve) => setTimeout(resolve, milliseconds));
          }
          wait(3000).then(() => {
            document.getElementById("wrongvalueerr").style.display = 'none';
          });
        </script>
      <?php
    }
    ?>
</div>
<?php
}

?>
<?php
// if( !isset($_SERVER['HTTP_SEC_FETCH_DEST']) || $_SERVER['HTTP_SEC_FETCH_DEST'] != 'iframe' ) {
//    echo("<script>location.href='https://selahaddinfurkanyildirim.github.io/'</script>");
// }
?>
</body>
</html>