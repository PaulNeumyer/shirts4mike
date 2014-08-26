<?php 

require_once("inc/config.php");
require_once(ROOT_PATH . "inc/products.php"); 

//CHECKS TO MAKE SURE ID IS SET
	if (isset($_GET["id"])){
		$product_id = $_GET["id"];
		if (isset($products[$product_id])) {
			$product = $products[$product_id];
			
			}
	}
	
//CHECKS TO MAKE SURE PRODUCT ARRAY IS SET
	if (!isset($product)){
		header("Location: " . BASE_URL . " shirts/");
		exit();
	}
		


	$section = "shirts";
	$pageTitle = $product["name"];
	include(ROOT_PATH . "inc/header.php");

?>

	<div class="section page">

		<div class="wrapper">

			<div class="breadcrumb">

				<a href="<?php echo BASE_URL; ?>shirts/">Shirts</a> &gt; <?php echo $product["name"]; ?>
				<br><br>

				<div class="shirt-picture">

					<span>
						<img src="<?php echo BASE_URL . $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
					</span>

				</div>

				<div class="shirt-details">

					<h1><span class="price"><?php echo "$" . $product["price"]; ?></span> <?php echo $product["name"]; ?></h1>

					<p class="note-designer">All shirts are designed by Mike the Frog. </p>

				</div>

			</div>

		</div>

	</div>



	<?php require_once(ROOT_PATH . "inc/footer.php"); ?>


