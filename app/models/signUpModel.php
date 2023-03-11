<?php

class signUpModel extends Model{

        private $email_address;
        private $otp;
        private $otp_count;
      
        public function __construct($email_address) {
          $this->email_address = $email_address;
          $this->otp = null;
          $this->otp_count = 0;
        }
      
        public function getEmailAddress() {
          return $this->email_address;
        }
      
        public function getPassword() {

        }
      
        public function setOTP($otp) {
          $this->otp = $otp;
        }
      
        public function getOTP() {
          return $this->otp;
        }
      
        public function incrementOTPCount() {
          $this->otp_count++;
        }
      
        public function getOTPCount() {
          return $this->otp_count;
        }
      }
      
  ?>