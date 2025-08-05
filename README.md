# Laravel Contact CRUD Application with XML Import

This is a simple Laravel-based Contact Management System that allows users to:

- Create, Read, Update, and Delete (CRUD) contacts
- Import multiple contacts in bulk using an XML file
- Download a sample XML file to understand the import format

---

## 🚀 Features

- Laravel 10+
- MySQL 
- Blade templates
- XML bulk contact import using `SimpleXML`
- Validation and file upload support
- Sample XML file download for user reference

---

## Installation

```bash
git clone https://github.com/yourusername/contact-crud.git
cd contact-crud
composer install
cp .env.example .env
php artisan key:generate
```

Edit your `.env` file to match your database settings:

```
DB_DATABASE=your_db
DB_USERNAME=your_user
DB_PASSWORD=your_password
```

Then run:

```bash
php artisan migrate
php artisan serve
```

---

## 🌐 Routes

| Method | URI                      | Action                     |
|--------|--------------------------|----------------------------|
| GET    | /                        | List all contacts          |
| GET    | /contacts/create         | Show add contact form      |
| POST   | /contacts                | Store new contact          |
| GET    | /contacts/{id}/edit      | Edit existing contact      |
| PUT    | /contacts/{id}           | Update contact             |
| DELETE | /contacts/{id}           | Delete contact             |
| GET    | /contacts/import         | Show XML import form       |
| POST   | /contacts/import         | Handle XML file upload     |
| GET    | /contacts/sample-xml     | Download sample XML file   |

---

## Sample XML Structure

```xml
<?xml version="1.0" encoding="UTF-8"?>
<contacts>
    <contact>
        <name>John Doe</name>
        <email>john@example.com</email>
        <phone>1234567890</phone>
    </contact>
</contacts>
```


