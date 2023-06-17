<?php
	include "connect.php";	
	include "header.php";

class Application_Controllers_Catalog extends Lib_BaseController
{
function index()
{
if($_REQUEST['in-cart-product-id'])
{
$scart=new Application_Models_Cart;
$cart->addToCart($_REQUEST[‘in-cart-product-id’]);
Lib_SmalCart::getInstance()->setCartData();
header('Location: /catalog');
exit;
}

$model=new Application_Models_Catalog
$items =| $model->>getList();
$this->Items=$Items;
}
}

?>

<?php include "footer.php" ?>