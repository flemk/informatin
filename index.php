<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=ascii">
  <title>informatin</title> 
  </head>
  
  <style>
    @media (min-width: 1400px) {
      .wrapper {
        position: absolute; 
        width: 100%; 
        height: 100%; 
        top: 0; 
        left: 0; 
        padding: 0; 
        display: flex;
      }
        
      .main {
        width: 70%; 
        height: 100%;
      }
    
      .side {
        width: 30%; 
        height: 100%;
      }
    }
    @media (max-width: 1399px) {
      .wrapper {
        position: absolute; 
        width: 100%; 
        height: 100%; 
        top: 0; 
        left: 0; 
        padding: 0; 
        //display: flex;
      }
        
      .main {
        width: 100%; 
        height: 40%;
      }
    
      .side {
        width: 100%; 
        height: 60%;
      }
    }
    
    .iframe {
      width: 100%; 
      height: 100%; 
      border: none;
    }
  </style>
  
  <body>
  
  <div class="wrapper" style="">
    <div class="main" style="">
      <iframe class="iframe" src="
        <?php
          $filename = 'main.txt';
          $file = fopen($filename, 'r') or die('[!] unable to open file');
          echo fread($file, filesize($filename));
          fclose($file);
        ?>        
        " style="">
        please enable javascript.
      </iframe>
    </div>
    <div class="side" style="">
      <iframe class="iframe" src="
        <?php
          $filename = 'side.txt';
          $file = fopen($filename, 'r') or die('[!] unable to open file');
          echo fread($file, filesize($filename));
          fclose($file);
        ?>        
        " style="">
        please enable javascript.
      </iframe>
    </div>

    <script>
      window.intergramId = "798987592";
      window.intergramCustomizations = {
          titleClosed: 'Ask me',
          titleOpen: 'Ask your lecturer a question',
          introMessage: 'Whats on your mind?',
          autoResponse: 'Your lecturer will take care of your question as soon as possible.',
          mainColor: "#E91E63", 
          alwaysUseFloatingButton: false
      };
    </script>
    <script id="intergram" type="text/javascript" src="https://www.intergram.xyz/js/widget.js"></script>
  </div>
  
  </body>
</html>
