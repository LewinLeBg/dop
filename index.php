<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>inscription</title>
    <link rel="stylesheet" href="styles/formu.css" />

  </head>
  <body>

    <p></p><h1>INSCRIPTION*</h1></p> 
    <div class="box">
      <div class="un">
        <form action="" method="post" class="form-example">
          
        <div class="form-example">
         
          <div><label for="name">Nom: </label></div>
          <div><input type="text" name="name" id="name" required /></div>
        </div>
        <div class="form-example">
            <div><label for="name">Prénom: </label></div>
            <div><input type="text" name="name" id="name" required /></div>
          </div>
        <div class="form-example">
          <div><label for="email">Email: </label></div>
          <div><input type="email" name="email" id="email" required /></div>
        </div>
        <div class="form-example">
          <input type="submit" value="Envoyez votre réponse" />
       
      </div>
      </form> 
      
    </div>
    
</div>
<hr>
<footer>*= paiement sur place en espèce uniquement </footer>


  </body>
  <?php
  if (isset($_POST['message'])) {
      $retour = mail('kilani.asseila@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: webmaster@monsite.fr' . "\r\n" . 'Reply-to: ' . $_POST['email']);
      if($retour)
          echo '<p>Votre message a bien été envoyé.</p>';
  }
  ?>
      
<style>h1{
    text-align: left;
    
    background-color: chocolate;
    font-family: Arial, Helvetica, sans-serif;
}


.form-example{
    margin-top: 5px;
    
}
body{
    
}

.box {
    display: grid;
  grid-template-columns: repeat(10, 1fr);
  grid-gap: 10px;
  grid-auto-rows: minmax(100px, auto);
  
  background-color: rgb(166, 170, 166);
  border: 0px solid rgb(0, 0, 0);
  border-radius: 5px;
  
 margin-left: 540px;
   width: fit-content;
   height: fit-content;
 
  }
  .un {
    grid-column: 4/7;
    grid-row: 2/7;
    background-color: rgb(255, 255, 255);
    margin-bottom: 50%;
    border: 1px solid black;
    border-radius: 5px;
    padding: 10px;
    
    
  }
footer{
    text-align: end;
    text-align: left;
    margin-bottom: 50px;
}</style>
</html>