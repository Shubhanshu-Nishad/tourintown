
# TourInTown (Travel Management Website)

## Overview

This is a web application for a Travel Management website. It allows users to explore and book travel destinations, browse through available packages, and manage their travel itineraries. The website is built using HTML, CSS, JavaScript, and Bootstrap for the frontend, and PHP with MySQL for the backend.

## Features

- Destination Search: Users can search for travel destinations based on their preferences such as location, type, or activities.
- Package Listings: The website displays available travel packages with details including destinations, itineraries, and prices.
- Booking System: Users can select and book travel packages, providing necessary information such as dates, number of travelers, and contact details.
- User Profiles: Registered users have personal profiles where they can view their booking history, manage their preferences, and update their contact information.
- Admin Dashboard: Admins have access to an admin dashboard for managing destinations, packages, and user bookings.

## Technologies Used

- HTML
- CSS
- JavaScript
- Bootstrap
- PHP
- MySQL

## Prerequisites

To run the website locally, you need to have the following software installed:

- XAMPP server: Download and install XAMPP from the official website (https://www.apachefriends.org/index.html). XAMPP provides the necessary environment to run PHP and MySQL on your local machine.

## Installation

1. Clone the repository:
   ```
   git clone https://github.com/your-repo-url.git
   ```

2. Start the XAMPP server and make sure Apache and MySQL services are running.

3. Copy the project folder to the XAMPP web directory. By default, it is located at `C:\xampp\htdocs\` (Windows) or `/opt/lampp/htdocs/` (Linux/Mac).

4. Create a new MySQL database for the website.

5. Import the provided database dump file (`database.sql`) into your MySQL database. You can use the phpMyAdmin interface provided by XAMPP to import the database.

6. Configure the database connection by updating the database credentials in the PHP files located in the project's backend folder.

7. Open your web browser and visit `http://localhost/your-project-folder` to access the website.

## Configuration

If you want to customize the website or make changes to the configuration, follow these steps:

1. Update the website settings by modifying the PHP files located in the project's backend folder. You can change variables such as website title, logo, and other configuration options.

2. Modify the HTML, CSS, and JavaScript files located in the project's frontend folder to customize the website's appearance and functionality.

## Usage

Once the website is up and running, users can navigate through different pages to search for destinations, view package listings, and make bookings. Admins can access the admin dashboard to manage destinations, packages, and user bookings.

## Contributions

Contributions to the project are welcome. If you encounter any issues or would like to add new features, feel free to submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE). You are free to use, modify, and distribute the code as per the terms of the license.

## Acknowledgements

- This project utilizes the Bootstrap framework (https://getbootstrap.com/) for responsive design and pre-built components.
- Special thanks to the open-source community for their contributions and support.
