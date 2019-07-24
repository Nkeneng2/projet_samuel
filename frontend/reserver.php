<?php 

     //appeler la page session
   include("../backend/session.php");
?>
<!DOCTYPE html>
<html>
 
  <head>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Schuh</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet"> 
    <link rel='stylesheet' type='text/css' media='screen' href='../Assets/css/main.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel='stylesheet' type='text/css' media='screen' href='fonts/DM_Serif_Text'>
    <script src='main.js'></script>
  </head>

  <body background="fr.jpg">
    <?php 
    //appeler la page layout
   include("layout.php");
   ?>

    <script async src="https://cse.google.com/cse.js?cx=008329031384572640380:0fh3qayfgfo"></script>
    <div class="gcse-search"></div>

    <br/> <br/> <br/> <br/> <br/> <br/> 
    <h2 align="center">Réserver Article</h2>
    <div class="check">  
        <?php 
          // Appelle de la bd de reserver == article réserver
          include "../backend/reserver_bd.php";
        ?>
        <!--- Redirection ver la page de liste des reserver----------->
         <a href="liste_reserver.php">
            <button class="su"> liste Réserver</button><br/></a>
          <form action="" method="post" enctype='multipart/form-data'>
         <br/>
         
          <?php
           echo $error;
          $id = $_GET['id'];
          if ($id>0) {
              $query="SELECT nom FROM junior2_product WHERE junior2_id = '$id'";
              $result=mysqli_query($db, $query);
              while ($row = mysqli_fetch_assoc($result)) {
                  $array[] = $row; ?>
            <label for="nm"><b>Article :</b></label>
                <input type="text" placeholder=" " name="article" id="pass" value=" <?php echo $row['junior2_nom']; ?>" required>
               <br/> <br/>
              
            <?php
              }
          }?>
            <label for="nm"><b>Nom :</b></label>
                <input type="text" placeholder="Votre nom" name="nom" id="nom" required>
                 <br/>  <br/>

            <label for="nm"><b>Message :</b></label>
            <textarea name="message" cols="30 " rows="5 " placeholder="Votre message "></textarea>
                <br/>   <br/>
          

         <br/><br/><br/>
         <!-- Renvoyer le formulaire ---->
         <input class="button1" type="submit" id="sbmit" name="submit" value="Sauvegarder">
            
        </form>
    </div>
     <h4 id="result"></h4>
       
        <br/> <br/> <br/> <br/> <br/> 
     <div class="footer">
        <p>Schuh</p>
     </div>
    </div> 
    
  </body>

</html>
