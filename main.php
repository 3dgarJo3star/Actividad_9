<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Refrescos</title>
    <style>
        body {
            font-family: 'Helvetica Neue', sans-serif;
            background-color: #eef2f3;
            margin: 0;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 2.5em;
        }
        .product-list {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
        }
        .product-item {
            border: none;
            border-radius: 15px;
            width: 250px;
            background-color: #ffffff;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            position: relative;
            padding: 20px;
            text-align: center;
        }
        .product-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }
        .product-item h2 {
            font-size: 1.8em;
            margin-bottom: 15px;
            color: #2c3e50;
        }
        .product-item p {
            margin: 10px 0;
            color: #7f8c8d;
            font-size: 1em;
        }
        .product-item .price {
            font-size: 1.5em;
            color: #e74c3c;
            margin-top: 10px;
            font-weight: bold;
        }
        .product-item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h1><?php echo htmlspecialchars(STORE_NAME); ?></h1>  
    <h2>Catálogo de Refrescos</h2>
    <div class="product-list">
        <?php foreach (PRODUCTS as $product): ?>
            <div class="product-item">
                <h2><?php echo htmlspecialchars($product['name']); ?></h2>
                <p>Precio: $<?php echo number_format($product['price'], 2); ?></p>
                <p><?php echo htmlspecialchars($product['description']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>


