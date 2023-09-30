<!DOCTYPE html>
<html lang="tr">
<link href="../styles/styles.css" rel="stylesheet" type="text/css"/>
<head>
  <meta name="google-site-verification" content="QCl5ToPTu2xAGXWUITjGY1Sri2AXMdRVND2grhl4dAI" />
  <title>Writer</title>
  <meta name="keywords" content="Kod,compiler,C++,Python,Writer,Online,debugger,free,Code">
  <link href="img/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="img/logo.png" rel="apple-touch-icon">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="title" content="Writer">
  <meta name="description" content="bu site c++ bash ve python dillerinde yazılan kodu çalıştırmaya ve evrensel mesajlaşmayı sağlamaya yarar ">
  <meta name="keywords" content="c++,python,bash,online,debugger,free">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="revisit-after" content="1 days">
  <meta name="author" content="Selahaddin Furkan YILDIRIM">
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
      body {
        zoom: 125%;
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
      ::-webkit-scrollbar {
          display: none;
      }
    </style>
  </head>
  <body id="mybodyel" onload="setScreenRes();" onkeydown="console.log(event.keyCode);if(((event.keyCode == 116 && !event.ctrlKey) || (event.ctrlKey && (event.keyCode==82 || event.keyCode==65 || event.keyCode==88 || event.keyCode==67 || event.keyCode==86)))){reFresh();}return (event.keyCode != 116 && !event.ctrlKey) || (event.ctrlKey && (event.keyCode==90 || event.keyCode==65 || event.keyCode==88 ||event.keyCode==67 || event.keyCode==86))">
      <script>
        window.addEventListener('resize', setScreenRes);
        function setScreenRes(){
          var w = window.innerWidth;
          var h = window.innerHeight;
          if(w<h){
              var a=w;
              w=h;
              h=a;
          }
          document.body.style.zoom=(w+h)/25+"%";
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
<script>history.pushState({}, "", "/HomePage");</script>
<!-- ///////////////////////////////////////////////////////Main Page////////////////////////////////////////////////////////////////// -->
<div id="webpage">
<html lang="tr">
  <head>
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Writer</title>
    <script src="script/script.js" defer=""></script>
    <link rel="stylesheet" href="styles/styles.css">
    <style>
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
  <body>
    <div style="position: absolute;top: 3%;height: 8%;width: 67%;left: 10px;" class="renkli-kutu">
      <form action="php/upload.php" method="post" enctype="multipart/form-data">
        Select file to upload:
        (files will be at the same folder with the code but the filename can change)
        <br>
        <input style="display: none;" type="file" name="fileToUpload" id="fileToUpload">
        <input id="browsebutton" type="button" value="Browse..." onclick="document.getElementById('fileToUpload').click();">
        <script>document.getElementById('fileToUpload').onchange = function () {
          document.getElementById("browsebutton").value= this.value.replace('C:\\fakepath\\', ' ');
        };</script>
        <input type="submit" value="Upload File" name="submit">
      </form>
    </div>
    <div style="position: absolute;top: 16%;height: 9%;width: 67%;left: 10px;" class="renkli-kutu">
      <form action="php/download.php" method="post" enctype="multipart/form-data">
        Select file to download:
        <br>
        <input type="text" autocomplete="off" name="filename" id="filename" placeholder="File Name">
        <input type="submit" value="Download File" name="submit">
      </form>
    </div>
    <div style="position: absolute;top: 16%;height: 10%;width: 9%;left: 58%;background-color: linear-gradient(90deg);text-align: center;padding: 10px;font-family: cursive,sans-serif;">
      <form action="php/listfiles.php" method="post" enctype="multipart/form-data" style="color:rgb(133, 157, 255);">
        List Files:
        <br>
        <input type="submit" value="List Files" name="submit">
      </form>
    </div>
    <div style="position: absolute;top: 30%;width: 67%;left: 10px;height: 8%;" class="renkli-kutu">
      <form action="php/runCommand.php" method="post">
        Write command to run:
        <br>
        <br>
        <input style="position: absolute;left: 5%;top: 40%;width: 80%;" autocomplete="off" type="text" id="komut" name="komut" placeholder="command">
        <input style="position: absolute;right: 1%;top: 40%;" id="command" name="command" type="submit" value="Run command">
      </form>
    </div>
    <div style="position: absolute;top: 40%;width: 68%;left: 10px;">
      <div>
      <button class="renkli-kutu" onclick="location.href='/focus'" style="position:relative;left:95%;top:30px;height:25px;padding:3px;text">Focus</button>
      <form action="php/runCode.php" method="post" class="renkli-kutu">
        <select class="renkli-kutu" style="height: 30px;width: 200px;padding: 1px;" name="dil" id="dil">
          <option value="">|||Select Code Language|||</option>
          <option value="cpp">C++</option>
          <option value="py">Python</option>
          <option value="sh">Bash</option>
        </select>
        <div><textarea style="resize:none; min-width: 97%;" spellcheck="false" rows="25" name="textcode" id="textcode" placeholder="Select language to start coding."></textarea></div>
        <div class="kirmizi-kutu" id="kelimeler"><script src="script/autocomplate.js" defer=""></script></div>
        <br>
        <textarea style="resize:none; min-width: 97%;" spellcheck="false" rows="5" name="textinput" id="textinput" placeholder="Enter input"></textarea>
        <br>
        <input id="runbutton" name="runbutton" type="submit" value="Run code" onclick="document.getElementById('runbutton').value='Debugging!';">
      </form>
      </div>
      <div style="position: absolute;top: 102%;width: 98%;" class="renkli-kutu">
        <h1 class="renkli-kutu">Communication</h1>
        Selahaddin Furkan YILDIRIM
        <br>
        <a href="mailto:selahaddinfurkanyildirim@gmail.com">selahaddinfurkanyildirim@gmail.com</a>
        <br>
        <a href="tel:+905317120023">+90 531 712 00 23</a>
        <div style="position: absolute;top: 110%;left: 0%;" class="renkli-kutu"><a target="_blank" href="https://github.com/selahaddinFurkanYildirim?tab=repositories">Github</a></div>
        <div style="position: absolute;top: 110%;left: 9%;" class="renkli-kutu"><a target="_blank" href="https://www.instagram.com/selahaddinfurkanyildirim/">İnstagram</a></div>
        <div style="position: absolute;top: 110%;left: 20%;" class="renkli-kutu"><a target="_blank" href="https://www.youtube.com/@helloworldcpp">Youtube</a></div>
        <div style="position: absolute;top: 110%;left: 29%;" class="renkli-kutu"><a target="_blank" href="https://twitter.com/Seleahaddin">Twitter</a></div>
        <div style="position: absolute;top: 110%;left: 38%;" class="renkli-kutu"><a target="_blank" href="https://codeforces.com/profile/Selahaddin123">Codeforces</a></div>
      </div>
      <div style="position: absolute;top: 150%;width: 67%;left: 10px;" class="bosluk"><br></div>
    </div>
    <div style="position: fixed;top: 1%;width: 28%;left: 70%;height: 95%;" class="renkli-kutu">
      <br>
      <br>
      <a style="font-size: 40px;">Universal messaging</a>
      <textarea disabled="" name="mesajlar" id="mesajlar" style="position: fixed;top: 15%;width: 25%;left: 71%;height: 70%;"></textarea>
      <script>
        function sleep(ms) {
          return new Promise(resolve => setTimeout(resolve, ms));
        }
        const logFileText = async file => {
            while(1){
              const response = await fetch(file);
              const text = await response.text();
              document.getElementById("mesajlar").value=(text);
              await sleep(1000);
            }
        }
        logFileText('data/mesajlar.txt');
      </script>
      <form action="php/sendMessage.php" method="post" style="position: fixed;top: 90%;width: 25%;left: 72%;">
        <input type="text" autocomplete="off" placeholder="Enter message..." id="mesaj" name="mesaj" style="width: 70%;">
        <input id="runbutton" name="runbutton" type="submit" value="Send">
      </form>
    </div>
  
</body></html>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
</div>
  <div class="renkli-kutu" style="position: fixed;top: 1%;width: 20%;left: 1%;padding:1px;" id="volume-control">
      Ses:
    <input type="range" id="volume-slider" min="0" max="100" step="1" value="0">
    <button class="renkli-kutu" onclick="changemusic();" style="position:relative;height:25px;padding:3px;text">Change</button>
  </div>
  <audio id="audio">
    <source id="audiosrc" src="/musics/<?php echo rand(1,4); ?>.mp3" type="audio/mpeg">
  </audio>
  <script>
    let musicNumber=Math.floor(Math.random() * 4+1);
    function changemusic() {
      var audiosrc = document.getElementById("audiosrc");
      let a=audiosrc.src;
      audiosrc.src="/musics/"+(((musicNumber+1)%4)+1)+".mp3";
      musicNumber++;
      console.log("new music source is "+audiosrc.src);
      audio.load();
    }
    function reFresh() {
      window.location.reload();
    }
    var audio = document.getElementById("audio");
    audio.loop=1;
    
    var volumeSlider = document.getElementById("volume-slider");

    volumeSlider.addEventListener("input", function() {
      var volume = volumeSlider.value;
      audio.volume = volume / 100;
    });

    audio.volume = volumeSlider.value / 100;

    window.addEventListener("click", function() {
      audio.play();
      var cookieName = "musicDownloaded";
      var isMusicDownloaded = getCookie(cookieName);
      
      if (!isMusicDownloaded) {
        audio.play();
        setCookie(cookieName, "true");
      }
      
      // Çerez değerini okuma
      function getCookie(name) {
        var value = "; " + document.cookie;
        var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
      }
      function setCookie(name, value) {
        console.log(document.cookie);
        document.cookie = name + "=" + value + "; path=/";
        console.log(document.cookie);
      }
    });
  </script>
<button name="button1" id="button1" onclick="location.href='/'" style="position: fixed;top: 2%;width: 20%;right: 6%;height: 4%;padding:1px;">Logout</button>
<input style="width: 80%;" autocomplete="off" type="text" id="user" name="user" value="<?php echo $name?>"  hidden>
<input style="width: 80%;" autocomplete="off" type="text" id="passwd" name="passwd" value="<?php echo $id?>" hidden>
<?php
}
else{
?>
<button onclick="location.href='/register/';">Register</button>
<script>
  history.pushState({}, "", "/Login");
</script>
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
    <script>
    window.addEventListener("beforeunload", function(e) {
      window.location.reload();
    });
    </script>
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
