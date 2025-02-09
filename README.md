# Contact Manager

A simple web-based Contact Management System built with PHP, MySQL, and Bootstrap.

## Features
- Add, edit, and delete contacts
- View a list of all contacts in a table
- User-friendly interface with Bootstrap
- Scrollable table for long content

## Installation

### Prerequisites
- PHP 7.4 or higher
- MySQL Database
- Apache or any web server
- Composer (optional for dependency management)

### Steps to Install
1. **Clone the Repository**:
   ```sh
   git clone https://github.com/your-repo/contact-manager.git
   cd contact-manager
   ```

2. **Setup Database**:
   - Import `database.sql` file into your MySQL server.
   - Update `db_connection.php` with your database credentials:
     ```php
     $host = 'localhost';
     $dbname   = 'your_database';
     $username = 'your_username';
     $password = 'your_password';
     $port = "MySQL port"; 
     $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";


     ```

3. **Run the Application**:
   - Place the project folder in your web server's root directory (e.g., `htdocs` for XAMPP).
   - Start Apache and MySQL.
   - Open `http://localhost/contact-manager/index.php` in your browser.

## Usage
- **Add Contact**: Click "إضافة جهة اتصال جديدة" to add a contact.
- **Edit Contact**: Click "تعديل" next to a contact to modify details.
- **Delete Contact**: Click "حذف" to remove a contact.

## File Structure
```
contact-manager/
│── index.php        # Main page to view contacts
│── add_contact.php  # Page to add a new contact
│── edit_contact.php # Page to edit an existing contact
│── delete_contact.php # Deletes a contact
│── db_connection.php # Database connection file
│── styles.css       # Custom styles
│── README.md        # Documentation
│── database.sql     # Sample database schema
```

## License
This project is open-source and available under the MIT License.

