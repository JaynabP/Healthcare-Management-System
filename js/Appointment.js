document.addEventListener("DOMContentLoaded", () => {
	const findDoctorsLink = document.querySelector('a[href="#doctors"]');
	const labTestsLink = document.querySelector('a[href="#labs"]');
	const prescriptionsLink = document.querySelector('a[href="#prescriptions"]');
	const organBloodLink = document.querySelector('a[href="#organ-blood"]');
	const homeLink = document.querySelector('a[href="#home"]'); // Select the Home link
	const contactButton = document.querySelector('a[href="#contact"]'); // Select the Contact Us button

	findDoctorsLink.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Appointment.html"; // Adjust the path if necessary
	});

	labTestsLink.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Lab_test.html"; // Adjust the path if necessary
	});

	prescriptionsLink.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Prescription.html"; // Adjust the path if necessary
	});

	organBloodLink.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Organandblood.html"; // Adjust the path if necessary
	});

	// Add the event listener for the Home link
	homeLink.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/homepage.html"; // Adjust this path to your actual home page URL
	});

	// Add the event listener for the Contact Us button
	contactButton.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Contact_Us.html"; // Redirect to Contact Us page
	});
});
