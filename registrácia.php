<!DOCTYPE html>
<html lang="en">
<head>
        <!--/Titulný nadpis webstránky -->
        <title>NTech-services ~Regisrácia</title>
        <!--/Titulný nadpis webstránky -->

        <!--/Meta tagy -->
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
        <link rel="stylesheet" href="css/načítačka.css" />
         <!--//pridávanie css -->
      </head>
    <body>
          <!-- /Čítačka -->

  <div id="loader">
    <div class="loader row-item">
      <span class="circle"></span>
      <span class="circle"></span>
      <span class="circle"></span>
      <span class="circle"></span>
      <span class="circle"></span>
  </div>
  </div>
  
    <!-- //Čítačka -->
  
    <!-- /Vytvorenie konta -->
      <div class="form">
        <h2>Registrácia</h2>
        <p>Tu si môžete vytvoriť uživatelské konto.</p>
        <form action="" enctype="multipart/form-data" autocomplete="off">
          <div class="error-text">Chyba</div>
        <div class="grid-details">
          <div class="input">
              <label>Krstné meno</label>
              <input type="text" name="krstnémeno" placeholder="Vaše krstné meno" required pattern="[a-zA-ZďťňľščžŕäôúéíáýöőüűĎŤŇĽŠŽČ'-'\s]*" >
          </div>
          <div class="input">
              <label>Priezvisko</label>
              <input type="text" name="priezvisko" placeholder="Vaše priezvisko" required pattern="[a-zA-ZďťňľščžŕäôúéíáýöőüűĎŤŇĽŠŽČ'-'\s]*">
          </div>
        </div>
        <div class="input">
          <label>Email</label>
          <input type="email" name="email" placeholder="Váš email" required>
      </div>
        <div class="input">
          <label>Telefónne číslo</label>
          <input type="phone" name="phone" placeholder="Vaše telefónne čislo" required pattern="[0-9]{10}" oninvalid="this.setCustomValidity('Zadajte 10 číselné telefonné číslo od 0 až po 10!')" oninput="this.setCustomValidity('')">
      </div>
      <div class="grid-details">
          <div class="input">
              <label>Heslo</label>
              <input type="password" name="pass" placeholder="Vaše heslo" required>
          </div>
          <div class="input">
              <label>Overovacie heslo</label>
              <input type="password" name="cpass" placeholder="Vaše heslo ešte raz" required>
          </div>
        </div>
        <div class="profile-img">
          <div class="file-upload">
              <input name="image" id="image-preview" type="file" class="file-input"  required oninvalid="this.setCustomValidity('Vyberte si profilnú fotku!')"oninput="this.setCustomValidity('')"/>
              <i class="fas fa-user-edit"></i>
          </div>
          </div>
          <div class="submit">
        <input type="submit" value="Registrovať" class="button">
      </div>
      </form>
      <div class="link">Už máte vytvorený účet? Ak áno, <a href="./login.php">Prihlásim sa</a>.</div>
      </div>
  
    <!--//Vytvorenie konta-->
  
  
  <script>
      $(document).ready(function() {
      //script pre čítačku
      preloaderFadeOutTime = 1200;
      function hidePreloader() {
      var preloader = $('#loader');
      preloader.fadeOut(preloaderFadeOutTime);
      }
      hidePreloader();
      });
      </script>
  
    <script src="js/register.js"></script>
    </body>
</html>