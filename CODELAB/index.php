<?php
include "Controller/ProductController.php";

use Controller\ProductController;

//deklarasikan objek class
$productController = new ProductController;

//tampilkan hasil kembalikan dari method getAllProduct menggunakan echo
echo $productController->getAllproduct();