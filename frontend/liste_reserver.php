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

    <br/> 
       
    <div class="check">
       <h2 align="center">Liste des Article Réserver</h2>
      
        <!------------redirection vet la page ajouter_objet ----------->
       
        <table>
        
            <thead>
                 <tr>
                    <th>Article</th>
                    <th>Nom</th>
                    <th>Message</th>
         
                    <th>Supprimer</th>
     
                </tr>
            </thead>
            <tbody >
            <?php
        
            //afiicher la liste des categorie apparti de la base de donner
            $query="SELECT * FROM junior2_book ORDER BY junior2_id desc";
            $result=mysqli_query($db,$query);
            while ($row = mysqli_fetch_assoc($result)) {
                $array[] = $row; 
               
            ?>
        
                <tr a >
                    <td><?php echo $row['junior2_article']?> </td>
                    <td><?php echo $row['junior2_nom']?></td>
                    <td><?php echo $row['junior2_message']?></td>

                    <!---Redirection ver la page  de supprimer categorie----------->
                    <td>    <?php echo "<a href='supprime_reserver.php?id=".$row['junior2_id']."' onclick='return checkDelete()'><button class='sub' type='submit' > Supprimer</button></a> ";?></td>
            
                    <br/><br/>

                  <?php  
            } 
                   ?>

                  <br/><br/>

                </tr>

            </tbody>

        </table>

       
        <br/> <br/> <br/> <br/> <br/> 
     <div class="footer">
        <p>Schuh</p>
     </div>
     
    </div> 
    
 </body>

</html>
