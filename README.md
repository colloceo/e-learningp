
# 🏫 High School E-Learning Platform

A comprehensive web-based e-learning system designed for high schools to manage courses, assessments, communication, and student progress with modern tools and responsive design.

---

## 📌 Features

- Role-based access for **Admins**, **Teachers**, **Students**, and **Parents**
- Secure authentication and session handling (PHP & JWT)
- Course management, lesson plans, and multimedia support
- Quizzes, assignments, grading, and feedback tools
- Student dashboards with GPA tracking, goals, and announcements
- Messaging, forums, and calendar scheduling
- Analytics dashboards for teachers and admins
- Mobile-responsive UI with modular JavaScript components

---

## 🚀 Technologies Used

| Layer         | Stack                         |
|--------------|-------------------------------|
| Frontend     | HTML5, CSS3 (Tailwind-ready), Vanilla JS |
| Backend      | PHP (OOP, MVC-style)          |
| Database     | MySQL (via SQL scripts)       |
| Auth         | PHP Sessions, Role Middleware |
| Styling      | Custom CSS, modular layout    |
| Storage      | Cloud-compatible (e.g., AWS S3-ready) |

---

## 🗂️ Project Structure

```

├── config/           # DB configs and route mappings
├── controllers/      # PHP controllers (Auth, Dashboard, Courses, etc.)
├── database/         # SQL scripts for setup and seeding
├── includes/         # Reusable headers, footers, nav, auth middleware
├── js/               # Vanilla JS + reusable UI components
├── css/              # Modular CSS (dashboard, forms, components)
├── models/           # PHP database models (User, Course, Grade)
├── public/           # Landing page, auth pages, blog section
├── views/            # UI templates for each role and section
├── .env              # Environment config (optional)
├── .htaccess         # Apache routing configuration
└── README.md         # You're reading it now!

````

---

## ⚙️ Setup Instructions

1. **Clone the Repository**
   ```bash
   git clone https://github.com/colloceo/e-learning-platform.git
   cd e-learning-platform
````

2. **Configure Database**

   * Create a MySQL database named `elearning_db`
   * Import the schema:

     ```bash
     mysql -u root -p elearning_db < database/init.sql
     ```

3. **Configure Environment**

   * Create a `.env` file or edit `config/config.php` directly:

     ```php
     define('DB_HOST', 'localhost');
     define('DB_NAME', 'elearning_db');
     define('DB_USER', 'root');
     define('DB_PASS', 'your_password');
     ```

4. **Start Local Server**

   * Use Apache (XAMPP, MAMP, WAMP), or:

     ```bash
     php -S localhost:8000 -t public
     ```

5. **Visit the App**

   * Open [http://localhost:8000](http://localhost:8000) in your browser.

---

## ✍️ Contributing

We welcome pull requests and contributions!

1. Fork the repo
2. Create a new branch
3. Commit your changes
4. Open a PR with clear details

---

## 🛡️ License

MIT License — free to use, modify, and distribute.

---

## 📣 Credits

Built with ❤️ by COLLOCEO.

For support or suggestions, contact us at `collooceo@gmail.com`.

