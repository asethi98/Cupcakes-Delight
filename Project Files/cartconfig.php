<!doctype html>
<html>
<head>
</head>
<body>
<?php
	session_start();
	$servername = "localhost";
	$username = "asethi2";
	$password = "asethi2";
	$dbname="asethi2";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	//If the 'Add to Cart' button is clicked, execute the following code
    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
			
			//If the cart already contains items, then check to see 
			//if the current item is already in the cart. 
            
			$item_array_id = array_column($_SESSION["cart"],"productID");
            
			//If the item is not in the cart, add it to the end of the 
			//cart/the $_SESSION["cart"] array.
			if (!in_array($_GET["id"], $item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'productID' => $_GET["id"], //Gets the item's id from the URL
                    'productName' => $_POST["hidden_name"],
                    'productPrice' => $_POST["hidden_price"],
					'productInventory' => $_POST["hidden_inventory"],
                    'productQuantity' => $_POST["quantity"],
                );
				
                $_SESSION["cart"][$count] = $item_array;
				//Each time an item is added to cart, go to the cart page.
                echo '<script>window.location="cart.php"</script>';
            
			}else{
				//The item is already in the cart.
                echo '<script>alert("Product has already been added to cart.")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }else{
			
			//If the cart is empty, this should be the first item added to the 
			//$_SESSION["cart"] array.
            
			$item_array = array(
                'productID' => $_GET["id"],
                'productName' => $_POST["hidden_name"],
                'productPrice' => $_POST["hidden_price"],
				'productInventory' => $_POST["hidden_inventory"],
                'productQuantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }
	
	//URL for deleting an item from the cart: 
	//<a href="cart.php?action=delete&id=<?php echo $value["productID"]>
    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["productID"] == $_GET["id"]){
					$productIDReference = $value["productID"];
					$productInventoryReference = $value["productInventory"];
					$productQuantityReference = $value["productQuantity"];
					
					//Remove the item and its fields from the $_SESSION["cart"]
					unset($_SESSION["cart"][$keys]);

					//Increment the inventory in the database by quantity after removing the item
					$sql = "UPDATE Products SET Inventory = " . ($productInventoryReference + $productQuantityReference) . " WHERE ID = " . $productIDReference;
					$result = mysqli_query($conn, $sql);
					
					//Reload cart.php page
                    echo '<script>window.location="cart.php"</script>';
                }
            }
        }
    }
?>
</body>
</html>

