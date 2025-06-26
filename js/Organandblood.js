document.addEventListener("DOMContentLoaded", () => {
	const homeLink = document.querySelector('a[href="#home"]');
	const findDoctorsLink = document.querySelector('a[href="#doctors"]');
	const labTestsLink = document.querySelector('a[href="#labs"]');
	const prescriptionsLink = document.querySelector('a[href="#prescriptions"]');
	const organBloodLink = document.querySelector('a[href="#organ-blood"]');
	const contactLink = document.querySelector('a[href="#contact"]'); // Select the Contact Us link

	homeLink.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Homepage.html"; // Redirect to homepage
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
		window.location.href = "/html/Organandblood.html"; // Redirect to organ and blood units
	});

	contactLink.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Contact_Us.html"; // Redirect to Contact Us page
	});
});
