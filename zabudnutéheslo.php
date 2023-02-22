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
        <h2>Zabudli ste heslo?</h2>
        <p>Prosím, zadajte váš e-mail a my vám pošleme inštrukcie na obnovenie hesla.</p>
        <form action="reset_password.php" enctype="multipart/form-data" autocomplete="off" method="post">
          <div class="error-text"><?php if(isset($error_message)) echo $error_message; ?></div>
        <div class="input">
          <label>Email</label>
          <input type="email" name="email" placeholder="Váš email" required>
      </div>
          <div class="submit">
        <input type="submit" value="Obnoviť heslo" class="button">
      </div>
      </form>
      </div>
       <!-- Vytvorenie na prihláseinie -->

    <!--Pridávanie scriptu -->
    <!--Pridávanie scriptu -->

    </body>
</html>