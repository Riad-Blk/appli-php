
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Ajouter un produit</title>
</head>
<body>
    <?php
        include 'menu.php';
        ?>
    
    <h2>Ajouter un produit</h2>
        <form action="traitement.php" method="post">
        <p>
            <label for="">
                Nom du produit :
                <input class="form-control" type="text" name="name">
            </label>
        </p>
        <p>
            <label for="">
                Prix du produit :
                <input class="form-control" type="number" step="any" name="price">
            </label>
        </p>
        <p>
            <label for="">
                Quantité désirée :
                <input class="form-control" type="number" name="qtt" value="1">
            </label>
        </p>
        <p>
            <button type="submit" class="btn btn-primary mb-3" name="submit" value="Ajouter le produit">Ajouter le produit</button>
        </p>
    </form>

</body>
</html>