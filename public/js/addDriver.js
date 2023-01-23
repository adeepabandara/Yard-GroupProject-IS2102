//Name
let nameInput = document.getElementById("name");
let nameError = document.getElementById("error-name");
let emptyNameError = document.getElementById("empty-name");

//NIC
let nicInput = document.getElementById("nic");
let nicError = document.getElementById("error-nic");
let emptyNicError = document.getElementById("empty-nic");

//Contact No
let contactNoInput = document.getElementById("contact-no");
let contactNoError = document.getElementById("error-contact-no");
let emptyContactNoError = document.getElementById("empty-contact-no");

//Address
let addressInput = document.getElementById("address");
let addressError = document.getElementById("error-address");
let emptyAddressError = document.getElementById("empty-address");

//Email
let emailInput = document.getElementById("email");
let emailError = document.getElementById("error-email");
let emptyEmailError = document.getElementById("empty-email");

//username
let usernameInput = document.getElementById("user-name");
let usernameError = document.getElementById("error-user-name");
let emptyUsernameError = document.getElementById("empty-user-name");

//Password
let passwordInput = document.getElementById("password");
let passwordError = document.getElementById("password-error");
let emptyPasswordError = document.getElementById("empty-password");


//Submit
let submitButton = document.getElementById("submit-button");

//Valid
let validClasses = document.getElementsByClassName("valid");
let invalidClasses = document.getElementsByClassName("error");

//Text verification (if input contains only text)
const textVerify = (text) => {
  const regex = /^.{3,}$/;
  return regex.test(text);
};

//Password Verification
const passwordVerify = (password) => {
    const regex =
      /^(?=.+[a-z])(?=.+[A-Z])(?=.+[0-9])(?=.+[\$\%\^\&\!@\#\*\(\)\+\=`~\?\>\<])/;
    return regex.test(password) && password.length >= 8;
  };

  //Email verification
const emailVerify = (input) => {
    const regex = /^[a-z0-9_]+@[a-z]{3,}\.[a-z\.]{3,}$/;
    return regex.test(input);
  };

//For empty input - accepts(input,empty error for that input and other errors)
const emptyUpdate = (
  inputReference,
  emptyErrorReference,
  otherErrorReference
) => {
  if (!inputReference.value) {
    //input is null/empty
    emptyErrorReference.classList.remove("hide");
    otherErrorReference.classList.add("hide");
    inputReference.classList.add("error");
  } else {
    //input has some content
    emptyErrorReference.classList.add("hide");
  }
};

//For error styling and displaying error message
const errorUpdate = (inputReference, errorReference) => {
  errorReference.classList.remove("hide");
  inputReference.classList.remove("valid");
  inputReference.classList.add("error");
};

//For no errors
const validInput = (inputReference) => {
  inputReference.classList.remove("error");
  inputReference.classList.add("valid");
};

//Name
nameInput.addEventListener("input", () => {
  if (textVerify(nameInput.value)) {
    //If verification returns true
    nameError.classList.add("hide");
    validInput(nameInput);
  } else {
    //for false
    errorUpdate(nameInput, nameError);
    //empty checker
    emptyUpdate(nameInput, emptyNameError, nameError);
  }
});

  //NIC
  nicInput.addEventListener("input", () => {
    if (textVerify(nicInput.value)) {
      //If verification returns true
      nicError.classList.add("hide");
      validInput(nicInput);
    } else {
      //for false
      errorUpdate(nicInput, nicError);
      //empty checker
      emptyUpdate(nicInput, emptyNicError, nicError);
    }
  });

   //Contact Number
   contactNoInput.addEventListener("input", () => {
    if (textVerify(contactNoInput.value)) {
      //If verification returns true
      contactNoError.classList.add("hide");
      validInput(contactNoInput);
    } else {
      //for false
      errorUpdate(contactNoInput, contactNoError);
      //empty checker
      emptyUpdate(contactNoInput, emptyContactNoError, contactNoError);
    }
  });

//Address
addressInput.addEventListener("input", () => {
    if (textVerify(addressInput.value)) {
      //If verification returns true
      addressError.classList.add("hide");
      validInput(addressInput);
    } else {
      //for false
      errorUpdate(addressInput, addressError);
      //empty checker
      emptyUpdate(addressInput, emptyAddressError, addressError);
    }
  });

  //Email
emailInput.addEventListener("input", () => {
    if (emailVerify(emailInput.value)) {
      emailError.classList.add("hide");
      validInput(emailInput);
    } else {
      errorUpdate(emailInput, emailError);
      emptyUpdate(emailInput, emptyEmailError, emailError);
    }
  });


   //Username
   usernameInput.addEventListener("input", () => {
    if (textVerify(usernameInput.value)) {
      //If verification returns true
      usernameError.classList.add("hide");
      validInput(usernameInput);
    } else {
      //for false
      errorUpdate(usernameInput, usernameError);
      //empty checker
      emptyUpdate(usernameInput, emptyUsernameError, usernameError);
    }
  });

  //Password
passwordInput.addEventListener("input", () => {
    if (passwordVerify(passwordInput.value)) {
      passwordError.classList.add("hide");
      validInput(passwordInput);
    } else {
      errorUpdate(passwordInput, passwordError);
      emptyUpdate(passwordInput, emptyPasswordError, passwordError);
    }
  });

//Submit button
submitButton.addEventListener("click", () => {
    if (validClasses.length == 6 && invalidClasses.length == 0) {
      alert("Success");
    } else {
      alert("Error");
    }
  });