<?php
  include 'db.php' ;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-google-faq</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body{
      font-family: 'Roboto', sans-serif;
      position: relative;
    }
    header{
      width: 100%;
      background: white;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 3;
    }
    .logo_user{
      display: flex;
      justify-content: space-between;
      padding: 10px 15px;
      margin-top: 20px;
      font-size: 22px;
      align-items: center;
    }
    .logo_user > .logo img{
      vertical-align: middle;
    }
    .logo_user > .logo > a{
      color: #5f6368;
      text-decoration: none;
      opacity: 1;
      padding-left: 4px;
    }
    .logo_user > .user i{
      margin-left: 15px;
      color: #5f6368;
      opacity: 1;
    }
    nav{
      border-bottom: 1px solid grey;
      padding: 10px 15px;
    }
    nav a{
      font-size: 15px;
      color: #5f6368;
      text-decoration: none;
      opacity: 1;
      padding-left: 4px;
      margin: 0 42px 0 0;
    }
    nav a:last-child{
      color: #3367d6;
      border-bottom: 3px solid #3367d6;
      padding-bottom: 7px;
    }
    main{
      width: 70%;
      margin:0 auto;
      margin-top: 70px;
      margin-bottom: 60px;
    }
    h2 {
      color: #3c4043;
      font-weight: 500;
      font-size: 24px;
      line-height: 32px;
      margin: 0;
      padding: 64px 0 0 0;
    }
    p{
      color: rgba(0,0,0,0.87);
      font-size: 14px;
      font-weight: 400;
      letter-spacing: .2px;
      line-height: 24px;
      padding-top: 20px;
      margin: 10px 0;
    }
    p > a{
      color: #3367d6;
      text-decoration: none;
    }
    </style>
  </head>
  <body>
    <header>
      <div class="logo_user">
        <div class="logo">
          <a href="#"><img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt=""></a>
          <a href="#"><span>Privacy e termini</span></a>
        </div>
        <div class="user">
          <i class="fas fa-th"></i>
          <i class="fas fa-user"></i>
        </div>
      </div>
      <nav>
        <?php
        # Modo 3: i link creati direttamente all'interno del file db.php
          foreach ($nav_link as $link) {
            echo $link;
          }
        ?>
      </nav>
    </header>

    <main>
    <?php
      foreach ($db as $key => $values) {
        # Modo 3: i titoli creati direttamente all'interno del file db.php
        echo $values['domanda'];
        # Modo 3 : paragrafi creati direttamente all'interno del file db.php
        echo $values['risposta'];
      }
    ?>
    </main>
  </body>
</html>
