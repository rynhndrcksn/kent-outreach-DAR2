window.onLoad = closeForm();
//hide address section if no permanent residence
document.getElementById("permRes").onclick = hideAddress;

function hideAddress() {
	let permResidence = document.getElementById("permRes");
	let hide = document.getElementById("address-section");
	if (permResidence.checked === true) {
		hide.classList.add("d-none");
	}
	else {
		hide.classList.remove("d-none");
	}
}

//validate form fields
document.getElementById("form-main").onsubmit = validate;

let formZip = document.getElementById("zip").value;
if (formZip !== "zipNotListed" || formZip !== "none") {
    showForms();
}

//form switch for test purposes
document.getElementById("formOn").onclick = formOnOff;
function formOnOff(){
	let formSwitch1 = document.getElementById("formOn");
	let form = document.getElementById("form-main");
	console.log(formSwitch1);
	if(formSwitch1.checked === true){
		form.classList.remove("d-none");
	}else if(formSwitch1.checked === false) {
		form.classList.add("d-none");
	}
}

function closeForm(){
	let hours = new Date().getHours();
	let day = new Date().getDay();
	let form = document.getElementById("form-main");

	if (day === 1 || day === 3){
		if(hours < 13 || hours > 15){
			form.classList.add("d-none");
		}
	} else if (day === 2){
		if(hours < 9 || hours > 11){
			form.classList.add("d-none");
		}
	}else {
		form.classList.add("d-none");
	}

}

function showForms() {
    let contactInfo = document.getElementById("contactInfoDiv");
    let services = document.getElementById("servicesDiv");
    contactInfo.classList.remove("d-none");
    services.classList.remove("d-none");
}


// make all error messages invisible again
function clearErrors() {
	// create node list of all elements with text-danger class
	let errors = document.getElementsByClassName("error");
	for (let i = 0; i < errors.length; i++) {
		errors[i].classList.add("d-none");
	}
}


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