document.getElementById("permRes").onclick = hideAddress;
document.getElementById("submit-btn").onclick = validateZip;
document.getElementById("form-main").onsubmit = validate;

//This function will hide the form-fields and zipcode check if no permanent residence is checked
function hideAddress() {
	let permResidence = document.getElementById("permRes");
	let hide = document.getElementById("address-section");
	if (permResidence.checked === true) {
		hide.classList.add("d-none");
		document.getElementById("form-fields").classList.remove("d-none");
		document.getElementById("zipDiv").classList.add("d-none");
	}
	else {
		hide.classList.remove("d-none");
		document.getElementById("form-fields").classList.add("d-none");
		document.getElementById("zipDiv").classList.remove("d-none");
	}
}

//This function will validate the zipcode.  If valid, it will show the form
function validateZip() {
	clearErrors();
	let isValid;
	let zip = document.getElementById("zipCheck").value;

	if (zip !== "") {
		if (zip === "98030" || zip === "98031" || zip === "98032" || zip === "98042") {
			let successZipCheck = document.getElementById("success-zipCheck");
			successZipCheck.classList.remove("d-none");
			//show form if valid zip
			document.getElementById("form-fields").classList.remove("d-none");
			isValid = true;
		} else {
			let errZipCheck = document.getElementById("err-zipCheck");
			errZipCheck.classList.remove("d-none");
			document.getElementById("form-fields").classList.add("d-none");
			isValid = false;
		}
	}

	//if zip is empty
	zip = document.getElementById("zipCheck").value;
	if(zip === "") {
		let emptyZip = document.getElementById("empty-zipCheck");
		emptyZip.classList.remove("d-none");
		document.getElementById("form-fields").classList.add("d-none");
		isValid = false;
	}

	return isValid;
}

// make all error messages invisible again
function clearErrors() {
	// create node list of all elements with text-danger class
	let errors = document.getElementsByClassName("error");
	for (let i = 0; i < errors.length; i++) {
		errors[i].classList.add("d-none");
	}
}

// validate form fields
function validate() {

	clearErrors();

	let isValid = true;

	// error check first name
	let fname = document.getElementById("fname").value;
	if(fname === "") {
		let errFname = document.getElementById("err-fname");
		errFname.classList.remove("d-none");
		isValid = false;
	}

	// error check last name
	let lname = document.getElementById("lname").value;
	if(lname === "") {
		let errLname = document.getElementById("err-lname");
		errLname.classList.remove("d-none");
		isValid = false;
	}

	//Validate zip code
	let permResidence = document.getElementById("permRes");
	if(permResidence.checked === false) {
		let zip = document.getElementById("zip").value;
		if (zip === "98030" || zip === "98031" || zip === "98032" || zip === "98042")
			isValid = true;
		else {
			let errZip = document.getElementById("err-zip");
			errZip.classList.remove("d-none");
			isValid = false;
		}
	}

	//Validate email:
	let email = document.getElementById("email").value;
	//if email is not empty:
	if (email !== "") {
		let invalidEmail = document.getElementById("invalid-email");
		if (!email.includes("@")) {
			invalidEmail.classList.remove("d-none");
			isValid = false;
		}
		if (!email.includes(".")) {
			invalidEmail.classList.remove("d-none");
			isValid = false;
		}
	}

	//If both email and phone left blank:
	let phone = document.getElementById("phone").value;
	if(email === "" && phone === "") {
		let errEmailPhone = document.getElementById("err-email-phone");
		errEmailPhone.classList.remove("d-none");
		isValid = false;
	}

	// clicked other checkbox but didn't fill out text area
	let other = document.getElementById("other");
	let otherService = document.getElementById("otherService").value;
	if(other.checked && otherService === "") {
		let errOther = document.getElementById("err-other");
		errOther.classList.remove("d-none");
		isValid = false;
	}

	// validate at least 1 service is checked
	let utilities = document.getElementById("utilities");
	let rent = document.getElementById("rent");
	let gas = document.getElementById("gas");
	let household = document.getElementById("household");
	let wadl = document.getElementById("wadl");
	let food = document.getElementById("food");
	if (!utilities.checked && !rent.checked && !gas.checked && !household.checked && !wadl.checked && !food.checked && !other.checked) {
		let errServices = document.getElementById("err-services");
		errServices.classList.remove("d-none")
		isValid = false;
	}

	//Validate checkbox:
	let agreement = document.getElementById("agreement");
	//if checkbox not checked:
	if (agreement.checked === false) {
		let errAgreement= document.getElementById("err-agreement");
		errAgreement.classList.remove("d-none");
		isValid = false;
	}

	return isValid;
}

// Form - Services - Handling
document.getElementById("utilities").onclick = utilDocs;
document.getElementById("rent").onclick = rentDocs;
document.getElementById("gas").onclick = gasDocs;
document.getElementById("other").onclick = showOther;

function utilDocs() {
	let checkbox = document.getElementById("utilities");
	let hide = document.getElementById("utilDocs")
	if (checkbox.checked) {
		hide.classList.remove("d-none");
	}
	else {
		hide.classList.add("d-none");
	}
}

function rentDocs() {
	let checkbox = document.getElementById("rent");
	let hide = document.getElementById("rentDocs")
	if (checkbox.checked) {
		hide.classList.remove("d-none");
	}
	else {
		hide.classList.add("d-none");
	}
}

function gasDocs() {
	let checkbox = document.getElementById("gas");
	let hide = document.getElementById("gasDocs")
	if (checkbox.checked) {
		hide.classList.remove("d-none");
	}
	else {
		hide.classList.add("d-none");
	}
}

function showOther() {
	let checkbox = document.getElementById("other");
	let hide = document.getElementById("showOther");
	if(checkbox.checked) {
		hide.classList.remove("d-none");
	} else {
		hide.classList.add("d-none");
	}
}