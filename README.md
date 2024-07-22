# Student Enrollment Form

This project is a web-based Student Enrollment Form that stores data in the `STUDENT-TABLE` relation of the `SCHOOL-DB` MySQL database. The form allows users to save new student records, update existing ones, and reset the form fields.

## Features

- Save new student records
- Update existing student records
- Reset form fields

## Technologies Used

- HTML
- CSS
- JavaScript
- PHP
- MySQL

## Setup Instructions

### Prerequisites

- Apache or any other web server with PHP support
- MySQL

### Database Setup

1. **Create Database**:
    ```sql
    CREATE DATABASE `SCHOOL-DB`;
    ```

2. **Use Database**:
    ```sql
    USE `SCHOOL-DB`;
    ```

3. **Create Table**:
    ```sql
    CREATE TABLE `STUDENT-TABLE` (
        `Roll-No` VARCHAR(50) NOT NULL PRIMARY KEY,
        `Full-Name` VARCHAR(100) NOT NULL,
        `Class` VARCHAR(50) NOT NULL,
        `Birth-Date` DATE NOT NULL,
        `Address` VARCHAR(255) NOT NULL,
        `Enrollment-Date` DATE NOT NULL
    );
    ```

### Project Setup

1. **Clone the repository**:
    ```sh
    git clone https://github.com/yourusername/student-enrollment-form.git
    ```

2. **Navigate to the project directory**:
    ```sh
    cd student-enrollment-form
    ```

3. **Deploy the files** to your web server's root directory (e.g., `htdocs` for XAMPP).

4. **Ensure your MySQL server is running** and the `SCHOOL-DB` database and `STUDENT-TABLE` table are correctly set up as per the SQL commands provided above.

5. **Access the form**:
    Open your web browser and navigate to the URL where you have deployed the `index.html` file. For example, if you're using XAMPP and placed the files in the `htdocs` folder, you might go to `http://localhost/index.html`.


