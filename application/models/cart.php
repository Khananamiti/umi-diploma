<?php
	include "connect.php";	
	include "header.php";

class Application_Models_Cart
{
function addToCard($id, $count=1)
{
$_SESSION[‘cart’][$id]=$_SESSION['cart'][$id]+$count;return true;
}
function delFromCart($id, $count=1){}

function clearCart(){}
}

?>

	<main>
		<a href="/catalog?in-cart-product-id=<?=$item['id']?>">В корзину</a>
	</main>

<?php include "footer.php" ?>