<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php'; ?>

    <div class="container my-4">
        <h1 class="text-danger center"><?php echo $this->mensaje; ?></h1>
    </div>

    <?php require 'views/footer.php';  ?>
</body>
</html>