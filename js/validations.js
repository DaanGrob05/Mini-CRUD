// TODO Create
const createForm = document.querySelector("#createMenuItem");

createForm.addEventListener("submit", (e) => {
	e.preventDefault();
	// Inputs ophalen .value
	const itemNameField = document.querySelector("itemName").value;
	const priceField = document.querySelector("price").value;
	// Als 1 leeg is preventDefault
	// Anders return false;
	if (itemNameField == "" || priceField == "") {
		console.log("x");
	} else {
		return false;
	}
});

// TODO Aanpassen

// TODO Contact Message

// TODO Zoek gerecht
