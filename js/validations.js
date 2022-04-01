// Login validatie
const loginForm = document.querySelector("#loginForm");

loginForm.addEventListener("submit", (e) => {
	const username = document.querySelector("#username");
	const password = document.querySelector("#password");

	if (username.value === "" || password.value === "") {
		alert("Beide velden moeten ingevuld zijn");
		e.preventDefault();
	} else if (username.value.length > 255) {
		alert("Gebruikersnaam mag niet meer dan 255 karakters bevatten");
		e.preventDefault();
	} else {
		return true;
	}
});

// TODO Create
const createForm = document.querySelector("#createForm");

createForm.addEventListener("submit", (e) => {
	const name = document.querySelector("#name");
	const price = document.querySelector("#price");

	if (name.value === "" || price.value === "") {
		alert("Beide velden moeten ingevuld zijn");
		e.preventDefault();
	} else {
		return true;
	}
});

// TODO Aanpassen
const editMenuItemForm = document.querySelector("#editMenuItem");

editMenuItemForm.addEventListener("submit", (e) => {
	const dishName = document.querySelector("#dishName");
	const price = document.querySelector("#price");

	if (dishName.value === "" || price.value == "") {
		alert("Beide velden moeten ingevuld zijn");
		e.preventDefault();
	} else {
		return true;
	}
});
// TODO Contact Message

// TODO Zoek gerecht
