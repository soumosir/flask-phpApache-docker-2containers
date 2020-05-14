<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website-docker</title>
</head>
<body>
    <ul>
    <?php
        $json = file_get_contents('http://product-service');
        $obj = json_decode($json);

        $products = $obj->products;
        foreach($products as $product){
            echo "<li>$product</li>";
        }
    ?>
    </ul>
</body>
</html>