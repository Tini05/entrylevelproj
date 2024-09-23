<?php
require('config.php');

if(empty($_SESSION['email'])){
    header('Location: ../login/index.html');
}

$productNames = array(
    'AOC1080p75Hz',
    'LenovoIdeaPad3',
    'CorsairGamingPC',
    'RazerOranataChrome',
    'SteelSeriesRival3',
    'CorsairVoidElite',
);

$productsArray = [
    'AOC1080p75Hz' => 120,
    'LenovoIdeaPad3' => 250,
    'CorsairGamingPC' => 800,
    'RazerOranataChrome' => 100,
    'SteelSeriesRival3' => 50,
    'CorsairVoidElite' => 90,
];

foreach ($productNames as $productName) {
    if(isset($_POST[$productName])){
        $sqlcheck="SELECT username,points,products FROM users WHERE username=:username";

        $prepcheck=$con->prepare($sqlcheck);
        $prepcheck->bindParam(':username',$_SESSION['username']);
        $prepcheck->execute();
        
        $data=$prepcheck->fetch();

        if(isset($data)){
            $_SESSION['points']=$data['points']; 
            $_SESSION['products']=$data['products']; 
        };

        if (in_array($productName, unserialize($_SESSION['products']), TRUE)){
            echo " Fail! You already own this product!";
        }
        else{
            if($_SESSION['points'] >= $productsArray[$productName]){
                $points = $_SESSION['points'];
                $username = $_SESSION['username'];
                $products = $_SESSION['products']; 
                $unserializedProducts = unserialize($products);
                array_push($unserializedProducts,$productName);
                $products = serialize($unserializedProducts);

                $sql="UPDATE users SET points=:points, products=:products WHERE username=:username";

                $newPointsValue = $points-$productsArray[$productName];

                $updatesql=$con->prepare($sql);
                $updatesql->bindParam(':username', $username);
                $updatesql->bindParam(':points',$newPointsValue);
                $updatesql->bindParam(':products',$products);

                $_SESSION['points']=$newPointsValue;
                $_SESSION['products']=$products;
                $updatesql->execute();

                header("Location: main/shop.php");
            }
            else{
                echo " Fail! You don't have enough points to purchase this product!";
            };
        };
    };
};
?>