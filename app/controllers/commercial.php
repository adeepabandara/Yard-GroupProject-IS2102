<?php

class commercial extends Controller
{
  public function index()
  {
    $this->view('commercial/dashboard');
  }

<<<<<<< Updated upstream
  public function expensecategory() 
    {
        $this->view('commercial/dashboard');
    }
=======
  public function expenseCat()
  {
    $this->view('commercial/addExpenseCat');
  }
>>>>>>> Stashed changes

  public function commercial()
  {
    $this->view('commercial/dashboard');
  }

  public function customer()
  {
    $this->view('commercial/customer');
  }

  public function expense_record()
  {
    $this->view('commercial/recordexpense');
  }


  public function createExpenseCat()
  {



    if (isset($_POST['category_code'])) {

      $category_code = $_POST['category_code'];
      $name = $_POST['name'];
      $description = $_POST['description'];


<<<<<<< Updated upstream
        header("Location: " . BASEURL . "/commercial/service");
=======
      $this->model('insertModel')->addExpenseCategory($category_code, $name, $description);
>>>>>>> Stashed changes

      header("Location: " . BASEURL . "/commercial/expenseCat");
    } else {
      header("Location: " . BASEURL . "/commercial/expensecategory");
    }
  }

  public function createCustomer()
  {



    if (isset($_POST['id'])) {

      $id = $_POST['id'];
      $contact_no = $_POST['contact_no'];
      $name = $_POST['name'];
      $identity_no = $_POST['identity_no'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $gps_location = $_POST['gps_location'];


      $this->model('insertModel')->addCustomer($id, $contact_no, $name, $identity_no, $email, $address, $gps_location);

      header("Location: " . BASEURL . "/commercial/customer");
    } else {
      header("Location: " . BASEURL . "/commercial/expensecategory");
    }
  }

  public function createExpenseRecord()
  {



    if (isset($_POST['expense_entry_no'])) {

      $expense_entry_no = $_POST['expense_entry_no'];
      $date = $_POST['date'];
      $name = $_POST['name'];
      $amount = $_POST['amount'];
      $description = $_POST['description'];
      $add_category = $_POST['add_category'];
      $add_subcategory = $_POST['add_subcategory'];
      $source = $_POST['source'];


      $this->model('insertModel')->addExpenseRecord($expense_entry_no, $date, $name, $amount, $description, $add_category, $add_subcategory, $source);

      header("Location: " . BASEURL . "/commercial/expense_record");
    } else {
      header("Location: " . BASEURL . "/commercial/expensecategory");
    }
  }
}
