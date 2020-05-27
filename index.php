<?php
    require_once('filme.php');
    $address = getAddress();
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
        <input type="text" placeholder="Filme..." name="nomefilme" value="<?php echo $address->Search[0]->Title . " " . $address->Search[1]->Title ?? "" ?>">
        <input value= "Procurar" type="submit">
        <p>Ano:</p>
        <input type="text" name="ano" value= "<?php echo $address->Search[0]->Year ?? "" ?>  ">
        <p>Tipo</p>
        <input type="text" name="tipo" value= "<?php echo $address->Search[0]->Type ?? "" ?>">
        <img src="<?php echo $address->Search[0]->Poster ?? "" ?>" width="140px">
    </form>

   
</body>
</html>

