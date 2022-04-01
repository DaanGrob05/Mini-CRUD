// Login validatie
console.log("validations.js loaded");
const loginForm = document.querySelector("#loginForm");

loginForm.addEventListener("submit", (e) => {
	const username = document.querySelector("#username");
	const password = document.querySelector("#password");

	if (username.value === "" || password.value === "") {
		alert("Beide velden moeten ingevuld zijn");
		e.preventDefault();
	} else {
		return true;
	}
});

// TODO Create

// TODO Aanpassen

// TODO Contact Message

// TODO Zoek gerecht
