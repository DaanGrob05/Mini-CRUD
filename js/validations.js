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
			if (username.value === "" || password.value === "") {
				alert("Beide velden moeten ingevuld zijn");
				e.preventDefault();
			} else if (username.value.length > 255) {
				alert(
					"Gebruikersnaam mag niet meer dan 255 karakters bevatten"
				);
				e.preventDefault();
			} else {
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
