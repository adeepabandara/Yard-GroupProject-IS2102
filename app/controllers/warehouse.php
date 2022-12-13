<?php


    class warehouse extends Controller

    {

        public function createWarehouse()
        {
             if (isset($_POST['username'])) {

                    $warehouse_code = $_POST['warehouse_code']; 
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $email_address = $_POST['email_address'];
                    $fleet_center = $_POST['fleet_center'];
                    $capacity = $_POST['capacity'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $this->model('insertModel')->addWarehouse($warehouse_code, $name, $address, $email_address, $fleet_center, $capacity, $username, $password);
                    header("Location: " . BASEURL."/adminFunctions/warehouse");

                } else {
                    header("Location: " . BASEURL."/adminFunctions/warehouse");
                }
            }

        }
