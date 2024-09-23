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


if(isset($_POST['order'])){
    $postfname = $_POST['fname'];
    $postlname = $_POST['lname'];
    $postaddress = $_POST['address'];
    $sqlcheck="SELECT username,products FROM users WHERE username=:username";

    $prepcheck=$con->prepare($sqlcheck);
    $prepcheck->bindParam(':username',$_SESSION['username']);
    $prepcheck->execute();
    
    $data=$prepcheck->fetch();

    if(isset($data)){
        $_SESSION['products']=$data['products']; 
    };

    $username = $_SESSION['username'];
    $products = $_SESSION['products']; 
    $unserializedProducts = unserialize($products);

    if (in_array($productName, unserialize($_SESSION['products']), TRUE)){
        echo " Fail! You already own this product!";
    }
    else{
        if(count($unserializedProducts) > 0){
            $orderedProducts = $unserializedProducts;
            $unserializedProducts = array();
            $products = serialize($unserializedProducts);

            $productsString = "";

            foreach($orderedProducts as $productSelected){
                if ($productsString == ""){
                    $productsString = $productSelected;
                }
                else{
                    $productsString .= "\n-$productSelected";
                };
            };

            $msgToSend = wordwrap("Hello $postfname $postlname ($username)! Your order has been accepted. You will receive your products within a week. \nProducts Ordered: \n$productsString \nRecipient Address: $postaddress \n\nThank you for doing business with us! \nIT STORE",50);

            $sql="UPDATE users SET products=:products WHERE username=:username";

            $updatesql=$con->prepare($sql);
            $updatesql->bindParam(':username', $username);
            $updatesql->bindParam(':products',$products);

            $_SESSION['products']=$products;
            $updatesql->execute();

            mail($_SESSION['email'],"Product Order - IT STORE",$msgToSend);

            header("Location: main/checkout.php");
        }
        else{
            echo " Fail! You don't have any products to order!";
        };
    };
};
?>