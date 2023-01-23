//vehicle id
let vehicleIdInput = document.getElementById("vehicle-id");
let vehicleIdError = document.getElementById("error-vehicle-id");
let emptyVehicleIdError = document.getElementById("empty-vehicle-id");

//Registartion No
let regNoInput = document.getElementById("reg-no-id");
let regNoError = document.getElementById("error-reg-no-id");
let emptyRegNoError = document.getElementById("empty-reg-no-id");

//Name
let nameInput = document.getElementById("name-id");
let nameError = document.getElementById("error-name-id");
let emptyNameError = document.getElementById("empty-name-id");

//Chassi No
let chassiNoInput = document.getElementById("chassi-no");
let chassiNoError = document.getElementById("error-chassi-no");
let emptyChassiNoError = document.getElementById("empty-chassi-no");

//Engine No
let engineNoInput = document.getElementById("engine-no");
let engineNoError = document.getElementById("error-engine-no");
let emptyEngineNoError = document.getElementById("empty-engine-no");

//Vehicle color
let colorInput = document.getElementById("color");
let colorError = document.getElementById("error-color");
let emptyColorError = document.getElementById("empty-color");

//Vehicle category
let categoryInput = document.getElementById("category");
let categoryError = document.getElementById("error-category");
let emptyCategoryError = document.getElementById("empty-category");

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

//vehicle id
vehicleIdInput.addEventListener("input", () => {
  if (textVerify(vehicleIdInput.value)) {
    //If verification returns true
    vehicleIdError.classList.add("hide");
    validInput(vehicleIdInput);
  } else {
    //for false
    errorUpdate(vehicleIdInput, vehicleIdError);
    //empty checker
    emptyUpdate(vehicleIdInput, emptyVehicleIdError, vehicleIdError);
  }
});

//Registartion No
regNoInput.addEventListener("input", () => {
    if (textVerify(regNoInput.value)) {
      //If verification returns true
      vehicleIdError.classList.add("hide");
      validInput(regNoInput);
    } else {
      //for false
      errorUpdate(regNoInput, regNoError);
      //empty checker
      emptyUpdate(regNoInput, emptyRegNoError, regNoError);
    }
  });

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

    //Chassi No
    chassiNoInput.addEventListener("input", () => {
    if (textVerify(chassiNoInput.value)) {
      //If verification returns true
      chassiNoError.classList.add("hide");
      validInput(chassiNoInput);
    } else {
      //for false
      errorUpdate(chassiNoInput, chassiNoError);
      //empty checker
      emptyUpdate(chassiNoInput, emptyChassiNoError, chassiNoError);
    }
  });

  
    //Engine No
    engineNoInput.addEventListener("input", () => {
        if (textVerify(engineNoInput.value)) {
          //If verification returns true
          engineNoError.classList.add("hide");
          validInput(engineNoInput);
        } else {
          //for false
          errorUpdate(engineNoInput, engineNoError);
          //empty checker
          emptyUpdate(engineNoInput, emptyEngineNoError, engineNoError);
        }
      });

       //Vehicle color
    colorInput.addEventListener("input", () => {
        if (textVerify(colorInput.value)) {
          //If verification returns true
          colorError.classList.add("hide");
          validInput(colorInput);
        } else {
          //for false
          errorUpdate(colorInput, colorError);
          //empty checker
          emptyUpdate(colorInput, emptyColorError, colorError);
        }
      });

       //Vehicle catergory
       categoryInput.addEventListener("input", () => {
        if (textVerify(categoryInput.value)) {
          //If verification returns true
          categoryError.classList.add("hide");
          validInput(categoryInput);
        } else {
          //for false
          errorUpdate(categoryInput, categoryError);
          //empty checker
          emptyUpdate(categoryInput, emptyCategoryError, categoryError);
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