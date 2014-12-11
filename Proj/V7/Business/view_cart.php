<?php 
// Include the configuration file:
require ('includes/config.inc.php'); 

// Set the page title and include the HTML header:
$page_title = 'Welcome to this Site!';
include ('includes/header.html');

// Welcome the user (by name if they are logged in):
echo '<h1>Welcome';
if (isset($_SESSION['first_name'])) {
	echo ", {$_SESSION['first_name']}";
}
echo '!</h1>';
?>


<?php
	// ECHO out a heading
             echo "<center><h1>Shopping</h1></center>";
?> 

<br />

<center>
<p>Buy Sandy for 100 million US Dollars</p> <p> Sandy comes in different kind of versions.</p>
<br />
<img src="DSC02956.jpg" width="349" height="300"  alt="Karate picture :)"/>
<br />
<?php

// Make the array:
$sandy = array (1 => 'Awesome', 'Cool', 'Angry', 'Happy', 'Nerdy', 'Wild', 'Clumsy', 'Hyperactive', 'Arrogance', 'Innocence');

// Make the different versions of Sandy pull-down menu:
echo '<p>Pick your Sandy</p>';
echo '<select name="Versions of Sandy(s)">';
foreach ($sandy as $key => $value) {
	echo "<option value=\"$key\">$value</option>\n";
}
echo '</select>';

// Make the days pull-down menu:
echo '<p> How many Sandy(s) do you want? Note: limit 99!</p>';
echo '<select name="Quanity">';
for ($quanity = 1; $quanity <= 99; $quanity++) {
	echo "<option value=\"$quanity\">$quanity</option>\n";
}
echo '</select>';
?>
<form method="link" action="add_cart.php"><input type="submit" name="submit" value="Buy"></form>
 
 
<?php
// add to cart

/*
//empty cart by current session
if(isset($_GET["emptycart"]) && $_GET["emptycart"]==1)
{
    $return_url = base64_decode($_GET["return_url"]); //return url
    session_destroy();
    header('Location:'.$return_url);
}

//add item in shopping cart
if(isset($_POST["type"]) && $_POST["type"]=='add')
{
    $product_code   = filter_var($_POST["product_code"], FILTER_SANITIZE_STRING); //product code
    $product_qty    = filter_var($_POST["product_qty"], FILTER_SANITIZE_NUMBER_INT); //product code
    $return_url     = base64_decode($_POST["return_url"]); //return url
   
    //limit quantity for single product
    if($product_qty > 10){
        die('<div align="center">This demo does not allowed more than 10 quantity!<br /><a href="http://sanwebe.com/assets/paypal-shopping-cart-integration/">Back To Products</a>.</div>');
    }

    //MySqli query - get details of item from db using product code
    $results = $mysqli->query("SELECT product_name,price FROM products WHERE product_code='$product_code' LIMIT 1");
    $obj = $results->fetch_object();
   
    if ($results) { //we have the product info
       
        //prepare array for the session variable
        $new_product = array(array('name'=>$obj->product_name, 'code'=>$product_code, 'qty'=>$product_qty, 'price'=>$obj->price));
       
        if(isset($_SESSION["products"])) //if we have the session
        {
            $found = false; //set found item to false
           
            foreach ($_SESSION["products"] as $cart_itm) //loop through session array
            {
                if($cart_itm["code"] == $product_code){ //the item exist in array

                    $product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$product_qty, 'price'=>$cart_itm["price"]);
                    $found = true;
                }else{
                    //item doesn't exist in the list, just retrive old info and prepare array for session var
                    $product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
                }
            }
           
            if($found == false) //we didn't find item in array
            {
                //add new user item in array
                $_SESSION["products"] = array_merge($product, $new_product);
            }else{
                //found user item in array list, and increased the quantity
                $_SESSION["products"] = $product;
            }
           
        }else{
            //create a new session var if does not exist
            $_SESSION["products"] = $new_product;
        }
       
    }
   
    //redirect back to original page
    header('Location:'.$return_url);
}

//remove item from shopping cart
if(isset($_GET["removep"]) && isset($_GET["return_url"]) && isset($_SESSION["products"]))
{
    $product_code   = $_GET["removep"]; //get the product code to remove
    $return_url     = base64_decode($_GET["return_url"]); //get return url

   
    foreach ($_SESSION["products"] as $cart_itm) //loop through session array var
    {
        if($cart_itm["code"]!=$product_code){ //item does,t exist in the list
            $product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
        }
       
        //create a new product list for cart
        $_SESSION["products"] = $product;
    }
   
    //redirect back to original page
    header('Location:'.$return_url);
}

*/
?>
</form>
</center>
<?php include ('includes/footer.html'); ?>

</body>
</html>