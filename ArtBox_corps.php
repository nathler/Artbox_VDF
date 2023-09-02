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
<?php include_once('ArtBox_corps.php'); ?>      
<?php include_once('ArtBox_header.php'); ?>  
<?php include_once('oeuvres.php'); ?> 
<main>
    <div id="liste-oeuvres">
                                       
            <?php foreach ($oeuvres as $oeuvre) : ?>  
            <article class="oeuvre">  
            <a href="<?php echo 'detail.php?id='.$oeuvre['id'];?>">                    
            <img src=" <?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
            <h2><?php echo $oeuvre['titre']; ?></h2>
            <p class="description"><?php echo $oeuvre['description']; ?></p> 
            </a> 
            </article>
            <?php endforeach ?>  
                   
</main>
    <?php include_once('ArtBox_footer.php'); ?>
</body>
</html>