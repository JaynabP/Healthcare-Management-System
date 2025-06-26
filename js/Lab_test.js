document.addEventListener("DOMContentLoaded", () => {
	const homeLink = document.querySelector('a[href="#home"]');
	const findDoctorsLink = document.querySelector('a[href="#doctors"]');
	const labTestsLink = document.querySelector('a[href="#labs"]');
	const prescriptionsLink = document.querySelector('a[href="#prescriptions"]');
	const organBloodLink = document.querySelector('a[href="#organ-blood"]');
	const contactButton = document.querySelector('a[href="#contact"]'); // Select the Contact Us button

	homeLink.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Homepage.html"; // Adjust the path as necessary
	});

	findDoctorsLink.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Appointment.html"; // Adjust the path as necessary
	});

	labTestsLink.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Lab_test.html"; // Adjust the path as necessary
	});

	prescriptionsLink.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Prescription.html"; // Adjust the path as necessary
	});

	organBloodLink.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Organandblood.html"; // Adjust the path as necessary
	});

	// Add the event listener for the Contact Us button
	contactButton.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Contact_Us.html"; // Redirect to Contact Us page
	});
});
