<?php

class commercial extends Controller{
  public function index() 
  {
      $this->view('commercial/dashboard');
  }

  public function expensecategory() 
    {
        $this->view('commercial/dashboard');
    }

    public function commercial() 
    {
        $this->view('commercial/dashboard');
    }  


  public function createExpenseCat(){



    if (isset($_POST['category_code'])) {

        $category_code = $_POST['category_code'];
        $name = $_POST['name'];
        $description = $_POST['description'];
       

        $this->model('insertModel')->addExpenseCategory($category_code, $name, $description);

        header("Location: " . BASEURL . "/commercial/service");

    }
        else{
          header("Location: " . BASEURL . "/commercial/expensecategory");
        }
  }

}