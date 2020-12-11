<?php
    require_once "Db.php";
    class Product extends Db
    {
        public function SelectAll()
        {
            $query = "SELECT * FROM products";
            $result = $this->connect()->query($query)->fetchAll();
            return $result;
        }

        public function SelectCategory($category)
        {
            $query = "SELECT * FROM products WHERE category='$category'";
            $result = $this->connect()->query($query)->fetchAll();
            return $result;
        }

        public function SelectProductByID($id)
        {
            $query = "SELECT * FROM products WHERE product_id='$id'";
            $result = $this->connect()->query($query)->fetchAll();
            return $result[0];
        }

        public function Dump($data)
        {
            echo "<pre>", print_r($data), "</pre>";
        }
    }

?>