<?php

class warehouse extends Controller
{
    public function index()
    {
        $this->view('warehouse/dashboard');
    }

    public function product()
    {
        $this->view('warehouse/addProduct');
    }

    public function signup()
    {
        $this->view('warehouse/signup');
    }

    public function createProduct()
    {
        if (isset($_POST['product_code'])) {

            $product_code = $_POST['product_code'];
            $bar_code = $_POST['bar_code'];
            $name = $_POST['name'];
            $category = $_POST['category'];
            $opening_stock = $_POST['opening_stock'];
            $reorder_level = $_POST['reorder_level'];
            $purchase_price = $_POST['purchase_price'];
            $selling_price = $_POST['selling_price'];



            $this->model('insertModel')->addProduct(
                $product_code,
                $bar_code,
                $name,
                $category,
                $opening_stock,
                $reorder_level,
                $purchase_price,
                $selling_price,
               
            );
            header("Location: " . BASEURL . "/warehouse/product");
        } else {
            header("Location: " . BASEURL . "/warehouse/service");
        }
    }

    public function createCategory()
    {
        if (isset($_POST['product_category_code'])) {

            $product_category_code = $_POST['product_category_code'];
            $name = $_POST['name'];
            $description = $_POST['description'];
 
            $this->model('insertModel')->addCategory(
                $product_category_code,
                $name,
                $description,

            );
            header("Location: " . BASEURL . "/warehouse/product");
        } else {
            header("Location: " . BASEURL . "/warehouse/service");
        }
    }


}
