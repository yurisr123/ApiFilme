<?php
    include_once ('filme.php');
    $address = getFilme();
    
  
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta  name = "viewport"  content = " width = largura do dispositivo, escala inicial = 1.0 " >
    <title>FilmesON</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="Bootstrap/bootstrap.min.css">

</head>

<body onload = "carregar()">
<div class="container">
    <header>

    </header>
<article>
        <div class="text-center">
            <h1 class="Titulo">FilmesON</h1>
        </div><br>
        <form action="." method="POST">
        
        <div class="form-group">
            <input type="text" class="form-control" id="Filme" aria-describedby="SearchFilm" placeholder="Digite o nome Do Filme ou Série"name="nomefilme">
        </div>
        <button type="submit" id="botao" class="btn btn-primary">Procurar</button><br><br>
        
        <div class="form-group">
           <p class="p_article">Título </p>
           <p class="p_article_2"><?php echo $address->Title ?? '';?></p>
        
       
            <img src="<?php echo $address->Poster ?? '' ?>" width="140px">
      
        
        </div>
        
        <div class="form-group">
           <p class="p_article">Tempo </p>
           <p class="p_article_2"><?php echo $address->Runtime ?? ''?></p>
        </div>

        <div class="form-group">
           <p class="p_article">Ano </p>
           <p class="p_article_2"><?php echo $address->Year ?? ''?></p>
        </div>

        <div class="form-group">
        <p class="p_article">Tipo</p>
        <p class="p_article_2"><?php echo $address->Type ?? '' ?></p>
        </div>
    </form>
</article>
</div>
</body>
</html>

