<html>
<head>
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Writer Focus</title>
    <link href="../styles/styles.css" rel="stylesheet" type="text/css"/>
    <style>
      textarea{
        border-radius: 5px;
      }
      body {
        background-image: url('../img/back.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
    </style>
  </head>
<body>
    <div style="position: absolute;width: 99%;">
        <div>
        <form action="/focus/php/runCode.php" method="post" class="renkli-kutu">
            You can change language:
            <select class="renkli-kutu" style="height: 30px;width: 200px;padding: 1px;" name="dil" id="dil">
            <option value="cpp">C++</option>
            <option value="py">Python</option>
            <option value="sh">Bash</option>
          </select>
          <div><textarea style="resize:none; min-width: 100%;" spellcheck="false" rows="39" name="textcode" id="textcode" placeholder="Select language to start coding."></textarea></div>
          <div class="kirmizi-kutu" id="kelimeler"><script src="/focus/script/autocomplate.js"></script></div>
          <br>
          <textarea style="resize:none; min-width: 100%;" spellcheck="false" rows="9" name="textinput" id="textinput" placeholder="Enter input"></textarea>
          <br>
          <input id="runbutton" name="runbutton" type="submit" value="Run code" onclick="document.getElementById('runbutton').value='Debugging!';">
        </form>
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

    // Ses seviyesi değiştiğinde tetiklenen olay
    volumeSlider.addEventListener("input", function() {
      var volume = volumeSlider.value;
      audio.volume = volume / 100;
    });

    // Başlangıçta varsayılan ses seviyesini ayarlayın
    audio.volume = volumeSlider.value / 100;

    // Sayfa tıklamalarını yakalayarak müziği başlatın
    window.addEventListener("click", function() {
      audio.play();
      var cookieName = "musicDownloaded";
  
      // Çerez kontrolü
      var isMusicDownloaded = getCookie(cookieName);
      
      // Eğer müzik daha önce indirilmediyse çerez ayarla ve müziği başlat
      if (!isMusicDownloaded) {
        audio.play();
        setCookie(cookieName, "true"); // Çerez bir yıl boyunca geçerli olacak şekilde ayarlandı
      }
      
      // Çerez değerini okuma
      function getCookie(name) {
        var value = "; " + document.cookie;
        var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
      }
      
      // Çerez ayarlama
      function setCookie(name, value) {
        console.log(document.cookie);
        document.cookie = name + "=" + value + "; path=/";
        console.log(document.cookie);
      }
    });
  </script>
</body>
</html>
