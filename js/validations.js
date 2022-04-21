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
		const usernameError = document.querySelector("#usernameError");

		const password = document.querySelector("#password");
		const passwordError = document.querySelector("#passwordError");

		editFormElement.addEventListener("submit", (e) => {
			// Input stijl en errors resetten
			username.style.border = "none";
			password.style.border = "none";
			usernameError.innerHTML = "";
			passwordError.innerHTML = "";

			// Geen waardes ingevuld
			if (username.value === "" || password.value === "") {
				e.preventDefault();
				if (username.value == "") {
					username.style.border = "2px solid red";
					usernameError.innerHTML = "* Naam is verplicht";
				}
				if (password.value == "") {
					password.style.border = "2px solid red";
					passwordError.innerHTML = "* Wachtwoord is verplicht";
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
		const itemNameError = document.querySelector("#itemNameError");

		const itemDescription = document.querySelector("#itemDescription");
		const itemDescriptionError = document.querySelector(
			"#itemDescriptionError"
		);

		const price = document.querySelector("#price");
		const priceError = document.querySelector("#priceError");

		formElement.addEventListener("submit", (e) => {
			// Input stijl en errors resetten
			itemName.style.border = "none";
			itemDescription.style.border = "none";
			price.style.border = "none";
			itemNameError.innerHTML = "";
			itemDescriptionError.innerHTML = "";
			priceError.innerHTML = "";

			// Geen waardes ingevuld
			if (
				itemName.value === "" ||
				price.value === "" ||
				itemDescription.value === ""
			) {
				e.preventDefault();
				if (itemName.value === "") {
					itemName.style.border = "2px solid red";
					itemNameError.innerHTML = "* Naam is verplicht";
				}

				if (itemDescription.value === "") {
					itemDescription.style.border = "2px solid red";
					itemDescriptionError.innerHTML =
						"* Beschrijving is verplicht";
				}

				if (price.value === "") {
					price.style.border = "2px solid red";
					priceError.innerHTML = "* Prijs is verplicht";
				}
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
		const nameError = document.querySelector("#nameError");

		const messageText = document.querySelector("#messageText");
		const messageTextError = document.querySelector("#messageTextError");

		contactFormElement.addEventListener("submit", (e) => {
			// Input stijl en errors resetten
			name.style.border = "none";
			messageText.style.border = "none";
			nameError.innerHTML = "";
			messageTextError.innerHTML = "";

			// Geen waardes ingevuld
			if (name.value === "" || messageText.value === "") {
				e.preventDefault();
				if (name.value === "") {
					name.style.border = "2px solid red";
					nameError.innerHTML = "* Naam is verplicht";
				}
				if (messageText.value === "") {
					messageText.style.border = "2px solid red";
					messageTextError.innerHTML = "* Bericht is verplicht";
				}
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
