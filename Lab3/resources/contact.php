<?php

include("dbconnect.php");
$note=$_REQUEST['note'];
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Igor Popa TI-152</title>
  <meta charset="UTF-8">
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link rel="stylesheet" href="style/form_style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">

          <h1><a href="index.html">Igor Popa <span class="logo_colour">TI-152</span></a></h1>
          <h2>MIDPS Laborator 3</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">

          <li><a href="index.html">Pagina principală</a></li>
          <li><a href="info.html">Info</a></li>
          <li class="selected"><a href="contact.php">Contacte</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <!-- obiectele din sidebar -->
            <h3>Orar</h3>
            <h4>Laborator MIDPS</h4>
            <h5>27.03.2017</h5>
            <p><br /><a href="#">Citește mai departe</a></p>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Ora</h3>
<center><iframe id="clock" scrolling="no" frameborder="no" clocktype="html5" style="overflow:hidden;border:0;margin:0;padding:0;width:120px;height:40px;"src="http://www.clocklink.com/html5embed.php?clock=004&timezone=MoldovaRepublicof_Chisinau&color=purple&size=120&Title=&Message=&Target=&From=2017,1,1,0,0,0&Color=purple"></iframe></center>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
    
          
          
        </div>
      </div>
      <div id="content">
<div id="page-wrap">
    <?PHP if($note=='success')
    {
    echo "<div class=\"success\">Mesajul a fost expediat cu succes!</div>";
    }
?>

<h1>Completați cîmpurile de mai jos:</h1>

    <div id="contact-area">

        <form method="post" action="user_process.php">
            <label for="Name">Nume:</label>
            <input type="text" name="name" id="Name" />
<br><br>
            <label for="City">Oraș:</label>
            <input type="text" name="city" id="City" />
<br><br>
            <label for="Email">Email:</label>
            <input type="text" name="email" id="Email" />
<br><br>
            <label for="Message">Mesaj:</label><br />
            <textarea name="message" rows="20" cols="20" id="Message"></textarea>

            <input type="submit" name="submit" value="Submit" class="submit-button" />
        </form>

        <div style="clear: both;"></div>
    </div>

</div>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.html">Pagina principală</a> | <a href="info.html">Info</a> | <a href="contact.php">Contacte</a></p>
      <p>2017</p>
    </div>
  </div>
</body>
</html>