document.addEventListener("DOMContentLoaded", () => {
	// Navigation links
	const homeLink = document.querySelector('a[href="#home"]');
	const findDoctorsLink = document.querySelector('a[href="#doctors"]');
	const labTestsLink = document.querySelector('a[href="#labs"]');
	const prescriptionsLink = document.querySelector('a[href="#prescriptions"]');
	const organBloodLink = document.querySelector('a[href="#organ-blood"]');
	const contactButton = document.querySelector('a[href="#contact"]'); // Select the Contact Us link

	// Event listeners for navigation links
	homeLink.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/homepage.html"; // Redirect to homepage
	});

	findDoctorsLink.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Appointment.html"; // Redirect to find doctors
	});

	labTestsLink.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Lab_test.html"; // Redirect to lab tests
	});

	prescriptionsLink.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Prescription.html"; // Redirect to prescriptions
	});

	organBloodLink.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Organandblood.html"; // Redirect to organ & blood units
	});

	contactButton.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Contact.html"; // Redirect to Contact Us page
	});

	// Registration form handling
	const registrationForm = document.querySelector(".registration-form form");
	registrationForm.addEventListener("submit", (event) => {
		event.preventDefault(); // Prevent default form submission

		const formData = new FormData(registrationForm);
		const formObject = {};

		formData.forEach((value, key) => {
			formObject[key] = value; // Populate formObject with form data
		});

		console.log("Form submitted:", formObject);
		// Here you can add logic to send the data to your server
		// e.g., using fetch API
	});
});
