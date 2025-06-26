document.addEventListener("DOMContentLoaded", () => {
	// Navigation links
	const findDoctorsLink = document.querySelector('a[href="#doctors"]');
	const labTestsLink = document.querySelector('a[href="#labs"]');
	const prescriptionsLink = document.querySelector('a[href="#prescriptions"]');
	const organBloodLink = document.querySelector('a[href="#organ-blood"]');
	const contactButton = document.querySelector('a[href="#contact"]'); // Contact Us button

	// Buttons
	const appointmentButton = document.querySelector('a[href="#appointment"]');
	const labTestButton = document.querySelector('a[href="#lab-test-booking"]');
	const prescriptionsButton = document.querySelector(
		'a[href="#prescription-management"]'
	);
	const organBloodButton = document.querySelector(
		'a[href="#organ-blood-availability"]'
	);
	const doctorRegisterButton = document.querySelector(
		'a[href="#doctor-register"]'
	);

	// Event listeners for navigation links
	findDoctorsLink.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Appointment.html";
	});

	labTestsLink.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Lab_test.html";
	});

	prescriptionsLink.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Prescription.html";
	});

	organBloodLink.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Organandblood.html";
	});

	// Event listeners for buttons
	appointmentButton.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Appointment.html";
	});

	labTestButton.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Lab_test.html";
	});

	prescriptionsButton.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Prescription.html";
	});

	organBloodButton.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Organandblood.html";
	});

	doctorRegisterButton.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Registerdoc.html"; // Future doctor registration page
	});

	// Event listener for the Contact Us button
	contactButton.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Contact_Us.html"; // Redirect to Contact Us page
	});
});
