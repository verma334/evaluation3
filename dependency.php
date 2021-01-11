Example representation only of dependency injection:


<?php
 class  ProductRepository{
     private $db;
     private $config;
     private $productModel;

     public function _construct(Database $db,Config $config,Product $product)
     {
         $this->db = $db;
         $this->config = $config;
         $this->ProductModel = $product;
     }
     public function listProduct()
     {
         foreach($this->productModel->all as $product){
             echo $product->title ."\n";
         }
     }
 }