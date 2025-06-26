# Healthcare Management System (HMS)

A comprehensive, secure, and user-friendly web-based Healthcare Management System (HMS) built with HTML, CSS, JavaScript, PHP, and XAMPP/SQL. This project streamlines healthcare operations, optimizes patient care, and ensures robust data management for doctors, patients, and administrative staff.

## 🚀 Project Overview

The Healthcare Management System is designed to digitize and enhance the day-to-day operations of healthcare institutions. It integrates essential functionalities—doctor consultations, appointment scheduling, lab test management, and medication inventory—into a unified platform. The system prioritizes data security, operational efficiency, and improved patient experience.

## ✨ Key Features

- **Secure User Authentication**  
  Robust registration and login for doctors and patients, with encrypted passwords and unique usernames to ensure data privacy and controlled access.

- **Efficient Appointment Scheduling**  
  Patients can book appointments with doctors based on specialization and real-time availability. Doctors can manage their schedules and update their availability to prevent double-booking.

- **Lab Test Management**  
  Integrated module for booking lab tests and viewing results. Both patients and doctors can access diagnostic information, promoting continuity of care.

- **Medication Inventory Oversight**  
  Administrative staff can track medication inventory, including quantity, pricing, and manufacturer details, ensuring effective medication management and patient safety.

- **Real-Time Resource Availability**  
  Provides up-to-date information on blood types and organ availability at nearby medical facilities, enhancing emergency response capabilities.

- **Data Consistency & Integrity**  
  Carefully designed database schema (normalized up to 3NF) minimizes redundancy and enforces data integrity, ensuring reliable and accurate records.

- **Enhanced Patient Experience**  
  Intuitive interface for booking appointments, accessing lab results, and viewing prescription history, empowering patients to actively participate in their healthcare journey.

## 🏥 User Roles

| Role            | Capabilities                                                           |
| --------------- | ---------------------------------------------------------------------- |
| **Doctors**     | Manage availability, view appointments, review lab results             |
| **Patients**    | Book appointments, view lab results, access prescription history       |
| **Admin Staff** | Manage medication inventory, oversee lab tests, handle patient records |

## 🛠️ Tech Stack

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** MySQL (via XAMPP)
- **Server:** XAMPP local server

## 📦 Project Structure

```
/hms-project
│
├── /public
│   ├── index.html
│   ├── styles/
│   └── scripts/
├── /src
│   ├── controllers/
│   ├── models/
│   └── views/
├── /database
│   └── hms_schema.sql
├── /docs
│   └── README.md
└── config.php
```

## ⚙️ Setup & Installation

1. **Clone the repository**

   ```bash
   git clone https://github.com/jaynabp/Healthcare-Management-System.git
   ```

2. **Start XAMPP and import the database**

   - Launch XAMPP Control Panel.
   - Start Apache and MySQL.
   - Import `hms_schema.sql` into phpMyAdmin.

3. **Configure Database Connection**

   - Edit `config.php` with your local database credentials.

4. **Run the Application**
   - Access `http://localhost/hms-project/public` in your browser.

## 🎯 Objectives

- Streamline appointment scheduling and doctor availability management
- Integrate lab test bookings and result viewing
- Oversee medication inventory and pricing
- Ensure data security, privacy, and integrity
- Provide real-time information on critical resources (blood, organs)
- Enhance patient and provider experience through a seamless interface[1][2][3]

## 📖 Scope

- Designed for hospitals, clinics, and healthcare centers
- Supports doctors, patients, and administrative staff
- Compliant with data security standards for real-world healthcare applications[3]

## 💡 Future Enhancements

- Role-based access control for advanced security
- SMS/email notifications for appointments and lab results
- Analytics dashboard for hospital management
- Integration with external health APIs

## 🤝 Contributing

Contributions are welcome! Please fork the repository and submit a pull request for review.

## 📄 License

This project is licensed under the MIT License.
