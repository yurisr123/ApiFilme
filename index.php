<?php
    include_once ('filme.php');
    $address = getAddress();

?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta  name = "viewport"  content = " width = largura do dispositivo, escala inicial = 1.0 " >
    <title>FilmesON</title>
    <link rel="stylesheet" href="style1.css">
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
        <div class="form-group text-center">
            <img src="<?php echo $address->Search[0]->Poster ?? "" ?>" width="140px">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="Filme" aria-describedby="SearchFilm" placeholder="Digite o nome Do Filme"name="nomefilme" value="<?php echo $address->Search[0]->Title ?? '' ?>">
        </div>
        <button type="submit" id="botao" class="btn btn-primary">Procurar</button><br><br>
        <div class="form-group">
            <input type="text" class="form-control" id="anodofilme" name="ano" value= "<?php echo $address->Search[0]->Year ?? '' ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="Tipodofilme" name="tipo" value= "<?php echo $address->Search[0]->Type ?? '' ?>">
        </div>
    </form>
</article>
</div>
</body>
</html>