# 📱 AppPlus – Feedback, Reviews & FAQ Portal (PHP & MySQL)

This project is a **PHP, HTML, CSS, JavaScript & MySQL** web application that powers a small platform called **AppPlus**, where users can view apps, submit feedback, write reviews, send inquiries via a contact form, and view FAQs. It was developed as part of coursework at **SLIIT** using a classic XAMPP stack.

---

## 🔍 Project Overview

AppPlus focuses on:

- Displaying app-related information and details.
- Collecting **user feedback** and **app reviews** into a MySQL database.
- Handling **contact/inquiry submissions** through a `contactus.php` form.
- Showing **FAQ content** to help users.
- Using a central `connection.php` file to manage the database connection.
- Using a database named `appplus` (see `appplus.sql`) with tables such as:
  - `feedback` – stores feedback text, author and published date.
  - `reviews` – stores user rating, name and review content.

The application uses simple procedural PHP with embedded HTML and basic styling.

---

## 🧱 Main Files & Responsibilities

### `index.php`
- Entry point / home page of the site.
- Can link to feedback, review, FAQ, and contact pages.

### `connection.php`
- Centralizes the **MySQL connection** (hostname, username, password, database).
- Included by other pages (`feedback.php`, `review.php`, etc.) so they can run queries on the `appplus` database.

### `feedback.php`
- Handles **feedback submission** from a form.
- Inserts data into the `feedback` table, which stores:
  - `Name` (author)
  - `Content`
  - `Published_date`
  - `userId` (logical link to user)

### `review.php`
- Manages **user reviews** of apps.
- Writes into the `reviews` table, which contains:
  - `userid`
  - `name`
  - `rating`
  - `content`

### `contactus.php` & `inquirytable.php`
- `contactus.php`:
  - Provides a **contact form** for users to send inquiries.
  - Likely inserts inquiry details into a separate table and/or displays a success message.
- `inquirytable.php`:
  - Displays **submitted inquiries**, probably for admin/internal viewing.

### `faq.php`
- Displays Frequently Asked Questions for the AppPlus platform.
- Can later be extended to read FAQ items from the database instead of hard-coding.

### `appdisplay.php`
- Responsible for **showing app details** (name, description, maybe screenshots or links).
- Works together with individual app pages such as `TikTok.php`.

### `TikTok.php`
- Example of a **single app page** (e.g. about TikTok) that demonstrates how AppPlus could display app-specific content.

### `appplus.sql`
- SQL dump for the **`appplus` database** that defines the schema and seed data for tables such as:
  - `feedback`
  - `reviews`
- Should be imported into phpMyAdmin before running the site.

---

## 🗄️ Database Schema (from `appplus.sql`)

### `feedback` Table (example)
- `Name` – VARCHAR(25), name of the user.
- `Content` – VARCHAR(250), feedback text.
- `Published_date` – DATE, when the feedback was posted.
- `userId` – INT, references the logical user.

### `reviews` Table (example)
- `userid` – INT, identifies the user.
- `name` – VARCHAR(25), reviewer name.
- `rating` – INT, numeric rating.
- `content` – VARCHAR(250), review body.

These tables are created and populated by the `appplus.sql` script, which you can import from phpMyAdmin.

---

## 🛠️ Tech Stack

- **Language:** PHP (procedural)
- **Database:** MySQL / MariaDB
- **Environment:** XAMPP (Apache + PHP + MySQL)
- **Tools:** phpMyAdmin for DB import/export

---

## 🚀 How to Run Locally (XAMPP)

1. **Copy the project into `htdocs`**
   - Place all `.php` files and the `appplus.sql` dump into:
     ```text
     C:\xampp\htdocs\AppPlus
     ```

2. **Start XAMPP services**
   - Open XAMPP Control Panel.
   - Start **Apache** and **MySQL**.

3. **Create and import the database**
   - Visit: `http://localhost/phpmyadmin`
   - Create a new database called `appplus`.
   - Go to **Import** and upload `appplus.sql`.
   - Click **Go** to run the script.

4. **Configure `connection.php`**
   - Make sure the credentials match your XAMPP setup:
     ```php
     $servername = "localhost";
     $username   = "root";
     $password   = "";
     $dbname     = "appplus";
     ```

5. **Open the site**
   - Visit:
     ```text
     http://localhost/AppPlus/index.php
     ```
   - Use the links on the page to navigate to feedback, review, FAQ, and contact sections.

---

## 📂 Suggested Repository Structure

```text
AppPlus-PHP-MySQL/
├─ index.php
├─ connection.php
├─ feedback.php
├─ review.php
├─ contactus.php
├─ inquirytable.php
├─ faq.php
├─ appdisplay.php
├─ TikTok.php
├─ appplus.sql
└─ README.md
