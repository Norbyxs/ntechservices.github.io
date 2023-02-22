<!DOCTYPE html>
<html lang="en">
<head>  
        <!--/Titulný nadpis webstránky -->
        <title>NTech-services ~Prihlásiť sa</title>
        <!--//Titulný nadpis webstránky -->

        <!--//Meta tagy -->
        <meta charset="UTF-8">
        <meta name="description" content="Webstránka Regisrácia">
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
        <meta name="author" content="Takáč Norbert">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--//Meta tagy -->
    
        <!--/Scripty pre iconov -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <!--//Scripty pre iconov -->
        
        <!--/pridávanie css -->
        <link rel="stylesheet" href="css/vytvorenie-konta.css"/>
        <!--//pridávanie css -->
      </head>
    <body>
        <!-- Vytvorenie na prihláseinie -->
      <div class="form">
        <h2>Prihlásiť sa</h2>
        <p>Tu sa môžete prihlásiť, a po prihlásení si môžete vytvoriť objednávku</p>
        <form action="" enctype="multipart/form-data" autocomplete="off">
          <div class="error-text">Chyba</div>
        <div class="input">
          <label>Email</label>
          <input type="email" name="email" placeholder="Váš email" required>
      </div>
          <div class="input">
              <label>Heslo</label>
              <input type="password" name="pass" placeholder="Vaše heslo" required>
          </div>
          <p><a href="#" style="margin-bottom: 15px; display: block; text-align: right;">Zabudli ste heslo?</a></p>
          <div class="submit">
        <input type="submit" value="Prihlásiť sa" class="button">
      </div>
      </form>
      <div class="link">Ešte nemáte vytvorené konto?<a href="registrácia.php">Registrujem</a> teraz.</div>
      </div>
       <!-- Vytvorenie na prihláseinie -->

    <!--Pridávanie scriptu -->
    <script src="js/login.js"></script>
    <!--Pridávanie scriptu -->

    </body>
</html>