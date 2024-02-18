<?php
$serverIp = $_SERVER['SERVER_ADDR'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYmIa6Ud8hAVS09a3W80d76lM5" crossorigin="anonymous">

<script>
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
function mischandler(){
return false;
}
function mousehandler(e){
var myevent = (isNS) ? e : event;
var eventbutton = (isNS) ? myevent.which : myevent.button;
if((eventbutton==2)||(eventbutton==3)) return false;
}
document.oncontextmenu = mischandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
</script>

  <title><?php echo $serverIp; ?></title>
  <style>
    body {
      background-color: black;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      font-family: 'Poppins', sans-serif; 

      -webkit-user-select: none;
      -webkit-touch-callout: none;
      -moz-user-select: none;
      -ms-user-select: none;
        user-select: none;

    }

    .typewriter {
      font-family: 'Poppins', sans-serif; 
      overflow: hidden; 
      border-right: .15em solid green; 
      white-space: nowrap; 
      margin: 0 auto; 
      letter-spacing: .15em; 
      animation:
        typing 1.5s steps(40, end),
        blink-caret .15s step-end infinite;
    }

    @keyframes typing {
      from {
        width: 0;
      }
      to {
        width: 100%;
      }
    }

    @keyframes blink-caret {
      from,
      to {
        border-color: transparent;
      }
      50% {
        border-color: green;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="typewriter"><?php echo $serverIp; ?></h1>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZyamdErPQQCHGv2+zxhx3FUE7DdhjlGi5nyzEOjeXm8YZqE70FAV2bR6Tfw6tA9C" crossorigin="anonymous"></script>
</body>
</html>
