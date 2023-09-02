<?php include('oeuvres.php'); ?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>

<body>
<?php include_once('ArtBox_header.php'); ?> 
<main>


        
     
     <?php $idOeuvre = $_GET['id'];?>
     <?php $oeuvres_extract= $oeuvres [$idOeuvre-1]; ?>
       
       <article id="detail-oeuvre">
          <div id="img-oeuvre">
          <img src="<?php echo $oeuvres_extract['image']; ?>" alt="<?php echo $oeuvres_extract['titre']; ?>">     
          </div> 

        <div id="contenu-oeuvre">
             <h1><?php echo $oeuvres_extract['titre']; ?></h1>
             <p class="description"><?php echo $oeuvres_extract['description']; ?></p>
             <p class="description-complete"><?php echo $oeuvres_extract['description_complete']; ?> </p>
        </div>
       
       </article>      
    
     
    
      
  

</main>
<?php include_once('ArtBox_footer.php'); ?>
</body>
</html>

