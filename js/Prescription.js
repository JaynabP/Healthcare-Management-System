document.addEventListener("DOMContentLoaded", () => {
	const prescriptionForm = document.querySelector(".prescription-form form");
	const prescriptionIDInput =
		prescriptionForm.querySelector('input[type="text"]');
	const doctorSelect = prescriptionForm.querySelector('select[name="doctor"]');
	const prescriptionInfoSection = document.getElementById("prescription-info");

	// Navigation links
	const homeLink = document.querySelector('a[href="#home"]');
	const findDoctorsLink = document.querySelector('a[href="#doctors"]');
	const labTestsLink = document.querySelector('a[href="#labs"]');
	const prescriptionsLink = document.querySelector('a[href="#prescriptions"]');
	const organBloodLink = document.querySelector('a[href="#organ-blood"]');
	const contactLink = document.querySelector('a[href="#contact"]'); // Select the Contact Us link

	// Event listeners for navigation links
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
		window.location.href = "/html/Organandblood.html"; // Redirect to organ & blood units
	});

	// Event listener for the Contact Us link
	contactLink.addEventListener("click", (event) => {
		event.preventDefault();
		window.location.href = "/html/Contact_Us.html"; // Redirect to Contact Us page
	});

	prescriptionForm.addEventListener("submit", (event) => {
		event.preventDefault(); // Prevent default form submission

		const selectedDoctor = doctorSelect.value;
		const enteredPrescriptionID = prescriptionIDInput.value.trim();

		// Validate input
		if (!selectedDoctor) {
			alert("Please select a doctor.");
			return;
		}
		if (!enteredPrescriptionID) {
			alert("Please enter a prescription ID.");
			return;
		}

		// Clear previous prescription info
		prescriptionInfoSection.innerHTML = "";

		// Fetch prescription details (mock data for demo)
		const prescriptions = [
			{
				id: "12345",
				doctor: "Dr. Sarah Smith",
				medicine: "Amlodipine 10mg",
				dosage: "Once Daily",
				image: "/images/med1.png",
			},
			{
				id: "67890",
				doctor: "Dr. Michael Jones",
				medicine: "Metformin 500mg",
				dosage: "Twice Daily",
				image: "/images/med2.jpg",
			},
		];

		const prescription = prescriptions.find(
			(p) => p.id === enteredPrescriptionID && p.doctor === selectedDoctor
		);

		if (prescription) {
			displayPrescription(prescription);
		} else {
			alert("No prescription found for the given ID and doctor.");
		}
	});

	function displayPrescription(prescription) {
		const prescriptionCard = document.createElement("div");
		prescriptionCard.classList.add("prescription-card");

		prescriptionCard.innerHTML = `
            <img src="${prescription.image}" alt="Medicine" class="medicine-img">
            <div class="prescription-details">
                <h3>Prescription ID: ${prescription.id}</h3>
                <p>Doctor: ${prescription.doctor}</p>
                <p>Medicine: ${prescription.medicine}</p>
                <p>Dosage: ${prescription.dosage}</p>
                <button class="purchase-btn">Purchase Medicine</button>
            </div>
        `;

		prescriptionInfoSection.appendChild(prescriptionCard);
	}
});
