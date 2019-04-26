var mainNav = document.getElementById('mainNav');
var navBarToggle = document.getElementById('navBarToggle');

navBarToggle.addEventListener('click', function () {
    
    mainNav.classList.toggle('navActive');
});

var slideshowImages = document.querySelectorAll('.slide');
var arrowLeft = document.getElementById('arrow-left');
var arrowRight = document.getElementById('arrow-right');
var current = 0;

arrowLeft.addEventListener('click', goBack); 
arrowRight.addEventListener('click', goForward); 

function hideSlides() {
	for(var i = 0; i < slideshowImages.length; i++) {
		slideshowImages[i].style.display = 'none'; 
	}
}

function showSlide(currentSlide) {
	hideSlides();
	slideshowImages[currentSlide].style.display = 'block';
	
}

function goBack() {
	current = current - 1; 
	if(current < 0) {
		current = slideshowImages.length - 1;
	}
	showSlide(current);
}

function goForward() {
	current = current + 1; 
	if(current == slideshowImages.length) {
		current = 0; 
	}
	showSlide(current);
}

function runAutomatic() {
	goForward();
	setTimeout(function(){ 
		runAutomatic();
	}, 7000);
	
}

runAutomatic();

function selectCakeBase() {

	var cakeBases = ["images/vanillaCake.png", "images/lemonCake.png", "images/chocolateCake.png", "images/velvetCake.png"];
	var selectedCake = document.getElementById("selectedCake").value;
	var cakeDisplay = "<img width = 375px height = 250px src =\"" + cakeBases[selectedCake] + "\">";

	showCake.innerHTML = cakeDisplay;
}

function selectFrosting() {

	var frosting = ["images/lemonFrosting.png", "images/strawberryFrosting.png", 
	"images/chocolateFrosting.png", "images/vanillaFrosting.png"];
	var selectedFrosting = document.getElementById("selectedFrosting").value;
	var frostingDisplay = "<img width = 280 px height = 250px src=\"" + frosting[selectedFrosting] + "\">";

	showFrosting.innerHTML = frostingDisplay;
}

function selectTopping() {

	var toppings = ["images/sprinkles.png", "images/chocolateChips.png", 
	"images/peanuts.png"];
	var selectedTopping = document.getElementById("selectedTopping").value;
	var toppingDisplay = "<img width = 200px height = 250px src=\"" + toppings[selectedTopping] + "\">";

	showTopping.innerHTML = toppingDisplay;
}

function checkFullName() {
	var patt = /(\w.+\s).+/;
	var name = document.getElementById("name").value;
	document.getElementById("fcheck1").value = "";
	
	if(patt.test(name) == false) {
		document.getElementById("fcheck").innerHTML = "Invalid Input";
		document.getElementById("fcheck1").value = "Invalid Input";
	}else {
		document.getElementById("fcheck").innerHTML = "";
	}
}

function checkEmail() {
	var patt = /^([A-Za-z]|[0-9])+@[a-z]+.[a-z]{2,3}$/;
	var email = document.getElementById("email").value;
	document.getElementById("echeck1").value = "";
	
	if(patt.test(email) == false) {
		document.getElementById("echeck").innerHTML = "Invalid Input";
		document.getElementById("echeck1").value = "Invalid Input";
	}else {
		document.getElementById("echeck").innerHTML = "";
	}
}

function checkPassword() {
	var pass = document.getElementById("password").value;
	var patt = /^.{7,}$/; //Password must be > 7 characters	
	document.getElementById("pcheck1").value = "";
	
	if(patt.test(pass) == false) {
		document.getElementById("pcheck").innerHTML = "Password must be greater than 7 characters";
		document.getElementById("pcheck1").value = "Password must be greater than 7 characters";
	}else {
		document.getElementById("pcheck").innerHTML = "";
	}
}



function checkPasswordMatch() {
	var pass = document.getElementById("password").value;
	var confirmPass = document.getElementById("confirmPassword").value;
	document.getElementById("confirmcheck1").value = "";
	
	if(pass != confirmPass) {
		document.getElementById("confirmcheck").innerHTML = "Passwords do not match";
		document.getElementById("confirmcheck1").value = "Passwords do not match";
	}else {
		document.getElementById("confirmcheck").innerHTML = "";
	}
}

function checkFields() {
	console.log("Executing");
	var uname = document.getElementById("username").value;
	var pwd = document.getElementById("password").value;

	if((uname == "") | (pwd == "")) {
		window.location.href = "account.html";
	}else {
		window.location.href = "register.php";
	}
}



function checkCard() {
	var cardNo = document.getElementById("cardNo").value;
	var masterPatt = /^(?:5[1-5])[0-9]{14}$/;
	var visaPatt = /^4[0-9]{15}$/;
	var amexPatt = /^3[47][0-9]{13}$/;
	var discoverPatt = /^6(?:011|5[0-9]{2})[0-9]{12}$/;
	
	var mastercard = cardNo.match(masterPatt);
	var visa = cardNo.match(visaPatt);
	var amex = cardNo.match(amexPatt);
	var discover = cardNo.match(discoverPatt);

	document.getElementById("ccheck").innerHTML = "";
	document.getElementById("ccheck1").value = "";
	
	
	if(cardNo != "") {	
		if (mastercard != null){
			document.getElementById("cardName").innerHTML = 'MasterCard';
		}else if (visa != null){
			document.getElementById("cardName").innerHTML = 'Visa';
		}else if (amex != null){
			document.getElementById("cardName").innerHTML = 'American Express';
		}else if (discover != null){
			document.getElementById("cardName").innerHTML = 'Discover';
		}else{
			document.getElementById("ccheck").innerHTML = 'Not a valid card number, or we don\'t accept this card at this time';
			document.getElementById("ccheck1").value = 'Not a valid card number, or we don\'t accept this card at this time';
			document.getElementById("cardName").innerHTML = '';
		}
	}
}	


function checkName() {
	var patt = /^[A-Za-z]+\s[A-Za-z]+$/;
	var name = document.getElementById("name").value;
	
	document.getElementById("ncheck1").value = "";
	
	if(patt.test(name) == false) {
		document.getElementById("ncheck").innerHTML = "Invalid Input";
		document.getElementById("ncheck1").value = "Invalid Input";
	}else {
		document.getElementById("ncheck").innerHTML = "";
	}
}


function checkSecurity() {
	var patt = /^[0-9]{3,4}$/;
	var security = document.getElementById("security").value;

	document.getElementById("scheck1").value = "";
		
	if(patt.test(security) == false) {
		document.getElementById("scheck").innerHTML = "Invalid Input";
		document.getElementById("scheck1").value = "Invalid Input";
	}else {
		document.getElementById("scheck").innerHTML = "";
	}
}


function checkNumber() {
	var patt = /^[0-9]{10}$/;
	var security = document.getElementById("phoneNo").value;
	
	document.getElementById("pcheck1").value = "";

	if(patt.test(security) == false) {
		document.getElementById("pcheck").innerHTML = "Invalid Input";
		document.getElementById("pcheck1").value = "Invalid Input";
	}else {
		document.getElementById("pcheck").innerHTML = "";
	}
}

