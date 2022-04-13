// TODO Zoek gerecht

const getFormElement = (form) => {
	const formElement = document.querySelector(`#${form}`);

	return new Promise((resolve, reject) => {
		if (formElement) {
			resolve(formElement);
		} else {
			reject(console.log(`Form ${form} not found`));
		}
	});
};

loginValidate = async () => {
	try {
		const editFormElement = await getFormElement("loginForm");

		const username = document.querySelector("#username");
		const password = document.querySelector("#password");

		editFormElement.addEventListener("submit", (e) => {
			// Geen waardes ingevuld
			if (username.value === "" || password.value === "") {
				e.preventDefault();
				if (username.value == "") {
					username.style.border = "2px solid red";

					const usernameErrors = document.createElement("p");
					usernameErrors.append("* Gebruikersnaam is verplicht");
					username.parentNode.appendChild(usernameErrors);
				}
				if (password.value == "") {
					password.style.border = "2px solid red";

					const passwordErrors = document.createElement("p");
					passwordErrors.append("* Wachtwoord is verplicht");
					password.parentNode.appendChild(passwordErrors);
				}
			} else {
				// Alles in orde
				return true;
			}
		});
	} catch (error) {
		console.log("error");
	}
};

menuItemValidate = async (form) => {
	try {
		const formElement = await getFormElement(form);

		const itemName = document.querySelector("#itemName");
		const price = document.querySelector("#price");

		formElement.addEventListener("submit", (e) => {
			if (itemName.value === "" || price.value === "") {
				alert("Beide velden moeten ingevuld zijn");
				e.preventDefault();
			} else {
				return true;
			}
		});
	} catch (error) {
		console.log(error);
	}
};

contactValidate = async () => {
	try {
		const contactFormElement = await getFormElement("contactForm");

		const name = document.querySelector("#name");
		const messageText = document.querySelector("#messageText");

		contactFormElement.addEventListener("submit", (e) => {
			if (name.value === "" || messageText.value === "") {
				alert("Beide velden moeten ingevuld zijn");
				e.preventDefault();
			} else {
				return true;
			}
		});
	} catch (error) {
		console.log(error);
	}
};

loginValidate();
contactValidate();
menuItemValidate("createForm");
menuItemValidate("editForm");
