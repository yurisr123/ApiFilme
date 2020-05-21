<?php
    require_once('filme.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Filme</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="." method="POST">
        <p>Digite o nome do Filme.</p>
        <input type="text" placeholder="Filme..." name="nomefilme" value="<?php echo $address->Title ?>">
        <input value= "Procurar" type="submit">
        <input type="text" value= "<?php echo $address->Year ?>">
        <input type="text" value= "<?php echo $address->Genre ?>">
        <input type="text" value= "<?php echo $address->Runtime ?>">
        <input type="text" value= "<?php echo $address->Director ?>">
        <input type="image" name="capa" value="<?php echo $address->Poster ?>">
    </form>

   
</body>
</html>