<?php 
  session_start();
  include 'php/db.php';
  $unique_id = $_SESSION['unique_id'];
  $email = $_SESSION['email'];
  if(empty($unique_id))
  {
      header ("Location: login.php");
  } 
  $qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}'");
  if(mysqli_num_rows($qry) > 0){
    $row = mysqli_fetch_assoc($qry);
    if($row){
      $_SESSION['Role'] = $row['Role'];
      if($row['verification_status'] != 'Verified')
      {
        header ("Location: verify.php");
      } 
  }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--/Titulný nadpis webstránky -->
    <title>NTech-services ~Po prihláške</title>
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
    <link rel="stylesheet" href="css/popri.css"/>
    <!--//pridávanie css -->
  </head>
</head>
<body>
    <header id="header">
        <a href="#" class="logo"><img src="kepek/logox.png" alt=""></a>
        <nav>
            <ul class="navigation">
                <li><a href="php/logout.php?logout_id=<?php echo $unique_id?>"><button class="logout_btn">Log Out</button></a></li>
            </ul>
        </nav>
    </header>

<section>
    <h2>Welcome : <span><?php echo $email;?></span></h2>
</section>
</body>
</html>