<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>show</title>
</head>
<body>
    <div class="container p-5 my-5 bg-dark text-white">
        <h3>Show - PRODUCTO</h3>
        <p>Codigo del producto: <?php echo $productoId ?></p>
        <p>Stock del producto: <?php echo $stock ?></p>
    
        <button class="btn btn-outline-primary"><a href="/productos">INDEX</a></button>
    </div>
</body>
</html>