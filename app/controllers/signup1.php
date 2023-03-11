<?php
// Start the session
session_start();

class signup1 extends Controller {

    public function index() {
        $this->view('login/signup');
    }

  
  private function generateOTP() {
    return rand(100000, 999999);
  }
  
  private function sendOTPToEmail($email_address, $otp,$name=null) {
    // Send the OTP to the user's email address
    $this->model('mailModel')->sendOTP($name,$email_address,$otp);
  }
  
  private function incrementOTPCounterForEmail($email_address) {
    // Increment the OTP counter for the user with the given email address in the session
    if (!isset($_SESSION['otp_counters'])) {
      $_SESSION['otp_counters'] = array();
    }
    if (!isset($_SESSION['otp_counters'][$email_address])) {
      $_SESSION['otp_counters'][$email_address] = 0;
    }
    $_SESSION['otp_counters'][$email_address]++;
  }
  
  private function renderSignupFormView() {
    // Load the signup form view template
    // Inject any necessary data into the view
    // Render the view
  }
  
  private function renderEnterOTPView($email_address) {
    // Load the enter OTP view template
    // Inject the email address into the view
    // Render the view
    $this->view('login/verification',$email_address);
  }
  
  private function renderInvalidOTPView($email_address) {
    // Load the invalid OTP view template
    // Inject the email address into the view
    // Render the view

   

    $this->view('login/verification',$email_address);

  }



  
  public function showSignupForm() {
    // Render the signup form view
    $this->renderSignupFormView();
  }

  
  public function processSignupForm() {
    // Store the signup data in the session
    $_SESSION['signup_data'] = array(
      'email_address' => $_POST['email_address'],
      'name' => $_POST['name'],
      'address' => $_POST['address'],
      'contact_no' => $_POST['contact_no'],
      'password' => $_POST['password'],
      // Include any other relevant form data here
    );
    
    // Generate and send the OTP
    $otp = $this->generateOTP();
    $_SESSION['otp'][$_POST['email_address']] = $otp;
    $this->sendOTPToEmail($_POST['name'],$_POST['email_address'], $otp);
    
    // Increment the OTP counter for the user's email address
    $this->incrementOTPCounterForEmail($_POST['email_address']);
    
    // Render the enter OTP view
    $this->renderEnterOTPView($_POST['email_address']);
  }
  
  public function processVerifyOTP() {
    // Retrieve the signup data from the session
    $signup_data = $_SESSION['signup_data'];
    
    // Verify the OTP
    $otp = $_POST['otp'];

    if (isset($_SESSION['otp'][$signup_data['email_address']]) && $otp == $_SESSION['otp'][$signup_data['email_address']]) {
     
      // Insert the signup data into the database

      $this->model('insertModel')->addCustomer($signup_data['email_address'],$signup_data['name'],$signup_data['address'],$signup_data['contact_no'],$signup_data['password']);


      // NOTE: You will need to implement the database insertion logic here
      
      // Render the success view

      $this->renderSuccessView();
      

    } else {

        
      // Increment the OTP counter for the user's email address
      $this->incrementOTPCounterForEmail($signup_data['email_address']);
      
      // Render the invalid OTP view
      $this->renderInvalidOTPView($signup_data['email_address']);
    }
  }
  
  private function renderSuccessView() {
    // Load the success view template
    // Inject any necessary data into the view
    // Render the view

        header("Location: " . BASEURL . "/login");
    
  }
}
?>