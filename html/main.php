<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    <style>
    * {
        margin: 0;
        padding: 0;
      }
  </style>
  </head>

  <body>

  <header>
    <div class="textdiv" id="header"><h1 id="headertext">CHECK ip</h1></div>

  </header>

  <main>
    <div class="textdiv" id="ipdiv">
      <h2 id="ip"><?php
      $ip_server = $_SERVER['SERVER_ADDR'];
      echo $ip_server;
      ?></h2>
    </div>
    <div class="textdiv" id="maintextdiv"><h1 id="maintext">Internet Protocol version 4 (IPv4) is the fourth version of the Internet Protocol (IP).
    IPv4 uses a 32-bit address space which provides 4,294,967,296 (232) unique addresses, but large blocks are reserved for special networking methods.</h1></div>
  </main>

  <footer>
    <div id="footer">
    </div>
  </footer>

  </body>

</html>
