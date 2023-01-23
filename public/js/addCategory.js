//Category Name
let nameInput = document.getElementById("name");
let nameError = document.getElementById("error-name");
let emptyNameError = document.getElementById("empty-name");

//Description
let descriptionInput = document.getElementById("description");
let descriptionError = document.getElementById("error-description");
let emptyDescriptionError = document.getElementById("empty-description");

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

//category Name
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

//Description
descriptionInput.addEventListener("input", () => {
    if (textVerify(descriptionInput.value)) {
      //If verification returns true
      descriptionError.classList.add("hide");
      validInput(descriptionInput);
    } else {
      //for false
      errorUpdate(descriptionInput, descriptionError);
      //empty checker
      emptyUpdate(descriptionInput, emptyDescriptionError, descriptionError);
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