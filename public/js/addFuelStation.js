//Name
let nameInput = document.getElementById("name");
let nameError = document.getElementById("error-name");
let emptyNameError = document.getElementById("empty-name");

//Address
let addressInput = document.getElementById("address");
let addressError = document.getElementById("error-address");
let emptyAddressError = document.getElementById("empty-address");

//Location
let locationInput = document.getElementById("location");
let locationError = document.getElementById("error-location");
let emptyLocationError = document.getElementById("empty-location");

//Credit Limit
let creditInput = document.getElementById("credit");
let creditError = document.getElementById("error-credit");
let emptyCreditError = document.getElementById("empty-credit");


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

  //Location
locationInput.addEventListener("input", () => {
    if (textVerify(locationInput.value)) {
      //If verification returns true
      locationError.classList.add("hide");
      validInput(locationInput);
    } else {
      //for false
      errorUpdate(locationInput, locationError);
      //empty checker
      emptyUpdate(locationInput, emptyLocationError, locationError);
    }
  });

   //Credit Limit
creditInput.addEventListener("input", () => {
    if (textVerify(creditInput.value)) {
      //If verification returns true
      creditError.classList.add("hide");
      validInput(creditInput);
    } else {
      //for false
      errorUpdate(creditInput, creditError);
      //empty checker
      emptyUpdate(creditInput, emptyCreditError, creditError);
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