//Geting the form by id
// sdklk!
//Civilite
const form = document.getElementById("form");

const nom = document.getElementById("nom");
const prenom = document.getElementById("prenom");
const date = document.getElementById("date");
const codePostal = document.getElementById("codePostal"); //code postal ----------------------
const email = document.getElementById("email");
const telephone = document.getElementById("telephone");
const check = document.getElementById("check");
const message = document.getElementById("message");

//the error message in french
// const nomError = document.getElementById("nomError");
// const prenomError = document.getElementById("prenomError");
// const dateError = document.getElementById("dateError");
// const codePostalError = document.getElementById("codePostalError"); //code postal ----------------------
// const emailError = document.getElementById("emailError");
// const telephoneError = document.getElementById("telephoneError");

form.addEventListener("submit", (e) => {
  if (!validation()) {
    e.preventDefault();
  } else {
    form.submit();
  }
});

const validation = () => {
  nom.style.border = "3px solid green";
  prenom.style.border = "3px solid green";
  email.style.border = "3px solid green";
  telephone.style.border = "3px solid green";
  date.style.border = "3px solid green";
  codePostal.style.border = "3px solid green";
  if (
    nameValidation(nom.value) !== true ||
    prenomValidation(prenom.value) !== true ||
    emailValidation(email.value) !== true ||
    phoneValidation(telephone.value) !== true ||
    dateValidation(date.value) !== true ||
    codePostalValidation(codePostal.value) !== true ||
    check.checked === false
	
  ) {
    if (nameValidation(nom.value) !== true) {
      //   let error = nameValidation(nom.value);
      nom.style.border = "2px solid red";
      //   nomError.innerHTML = error;
    } else {
      nom.style.border = "3px solid green";
    }
    if (prenomValidation(prenom.value) !== true) {
      //   let error = prenomValidation(prenom.value);
      prenom.style.border = "2px solid red";
      //   prenomError.innerHTML = error;
    } else {
      prenom.style.border = "3px solid green";
    }
    if (emailValidation(email.value) !== true) {
      //   let error = emailValidation(email.value);
      email.style.border = "2px solid red";
      //   emailError.innerHTML = error;
    } else {
      email.style.border = "3px solid green";
    }
    if (phoneValidation(telephone.value) !== true) {
      //   let error = phoneValidation(telephone.value);
      telephone.style.border = "2px solid red";
      //   telephoneError.innerHTML = error;
    } else {
      telephone.style.border = "3px solid green";
    }

    if (codePostalValidation(codePostal.value) !== true) {
      //   let error = "La ville est obligatoire.";
      codePostal.style.border = "2px solid red";
      //   codePostalError.innerHTML = error;
    } else {
      codePostal.style.border = "3px solid green";
    }

    if (dateValidation(date.value) !== true) {
      //   let error = dateValidation(date.value);
      date.style.border = "2px solid red";
      //   dateError.innerHTML = error;
    } else {
      date.style.border = "3px solid green";
    }
    if (check.checked == false) {
      message.style.color = "red";
    } else {
      message.style.color = "white";
    }
  } else {
    return true;
  }
  return false;
};

//the error message in french
const phoneValidation = (phone) => {
  const regex = /^(\+33|0)([ \-_/]*)(\d[ \-_/]*){9}$/;
  if (!phone) return "Le numéro de téléphone est obligatoire.";
  else if (!regex.test(phone)) return "Format de numéro de téléphone invalide.";
  else if (phoneChecker(phone) === true) {
    console.log("here");
    console.log(phoneChecker(phone));
    return "Numéro de téléphone invalide.";
  } else return true;
};

const nameValidation = (name) => {
  const regex = /^[a-zA-Z -]+$/;
  if (!name) return "Le nom est obligatoire. ";
  else if (!regex.test(name)) return "Format de nom invalide. ";
  else return true;
};

const prenomValidation = (name) => {
  const regex = /^[a-zA-Z -]+$/;
  if (!name) return "Le prenom est obligatoire. ";
  else if (!regex.test(name)) return "Format de prenom invalide. ";
  else return true;
};

const emailValidation = (email) => {
  const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  if (!email) return "L'adresse e-mail est obligatoire.";
  else if (!regex.test(email)) return "Format d'adresse e-mail invalide.";
  else return true;
};

const dateValidation = (date) => {
  const regex = /^(19|20)\d{2}$/;
  if (!date) return "La date de naissance est obligatoire.";
  else if (date > new Date().getFullYear())
    return "La date de naissance ne peut pas être dans le futur.";
  else if (!regex.test(date)) return "Format de date de naissance invalide.";
  else return true;
};

const codePostalValidation = (codePostal) => {
  const regex = /^[0-9]{5}$/;
  if (!codePostal) return "Le code postal est obligatoire.";
  else if (!regex.test(codePostal)) return "Format de code postal invalide.";
  else return true;
};

const phoneChecker = (phone) => {
  var numbers = [
    "123456789",
    "000000000",
    "099999998",
    "200000001",
    "299999999",
    "300000000",
    "399999998",
    "500000001",
    "599999999",
    "700000000",
    "799999998",
    "900000001",
    "999999999",
    "000000000",
    "099999998",
    "200000001",
    "299999999",
    "300000000",
    "399999998",
    "500000001",
    "599999999",
    "600000000",
    "699999998",
    "700000001",
    "799999999",
    "800000000",
    "899999998",
    "900000001",
    "999999999",
    "000000000",
    "099999998",
    "100000001",
    "199999999",
    "200000000",
    "299999998",
    "300000001",
    "399999999",
    "400000000",
    "499999998",
    "500000001",
    "599999999",
    "600000000",
    "699999998",
    "700000001",
    "799999999",
    "800000000",
    "899999998",
    "900000001",
    "999999999",
    "000000000",
    "099999998",
    "100000001",
    "199999999",
    "200000000",
    "299999998",
    "300000001",
    "399999999",
    "400000000",
    "499999998",
    "500000001",
    "599999999",
    "600000000",
    "699999998",
    "700000001",
    "799999999",
    "800000000",
    "899999998",
    "900000001",
    "999999999",
  ];
  return numbers.includes(phone.substring(1, 10)) ? true : false;
};
