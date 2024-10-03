<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">
    <title>Simple PHP MVC</title>
</head>

<body>

    <section>
        <h1>My Product:</h1>
        <ul>
            <li><?php echo $product->getTitle(); ?></li>
            <li><?php echo $product->getDescription(); ?></li>
            <li><?php echo $product->getPrice(); ?></li>
            <li><?php echo $product->getSku(); ?></li>
            <li><?php echo $product->getImage(); ?></li>
        </ul>
        <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
    <section>
</body>

</html>