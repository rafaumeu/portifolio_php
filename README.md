<div align="center">

# 🚀 Custom PHP MVC Portfolio

A high-performance, handcrafted layout built on a **Custom MVC Framework**.
Blends the raw power of **PHP 8.3** with the modern styling of **TailwindCSS**.

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![SQLite](https://img.shields.io/badge/SQLite-07405E?style=for-the-badge&logo=sqlite&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=composer&logoColor=white)
![MVC](https://img.shields.io/badge/Architecture-MVC-FF6B6B?style=for-the-badge)

[![License](https://img.shields.io/badge/License-MIT-blue.svg?style=flat-square)](LICENSE)

</div>

<br />

<div align="center">
  <img src="public/img/portfolio.png" alt="Project Screenshot" width="100%" style="border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
</div>

---

## 📖 About The Project

This isn't just a portfolio; it's a **Software Engineering Statement**.
Instead of relying on heavy frameworks like Laravel, I built a **Custom MVC Framework** from scratch to demonstrate deep understanding of:
- **Dependency Injection**: Custom Container & Service Binding.
- **Database Abstraction**: Secure PDO Wrapper with dynamic DSN.
- **Routing**: Custom Regex-free Dispatcher.
- **Security**: strict_types, Sanitization, and Session Management.

### ✨ Key Features
- **Strict Architecture**: Separation of concerns (`Core`, `App`, `Views`).
- **Dependency Injection**: A handcrafted IoC Container managing services.
- **Database Seeding**: Automated scripts to populate SQLite database.
- **Modern UI**: Fully responsive Mobile-First design with TailwindCSS.

---

## 🏗️ Architecture (The "Lockbox" Standard)

The project follows a rigorous directory structure to ensure scalability:

```bash
├── 📁 app/
│   ├── Controllers/   # Logic Layer (IndexController)
│   └── Models/        # Data Layer (Project Model)
├── 📁 config/         # Configuration & Routes
├── 📁 core/           # Framework Source Code
│   ├── App.php        # Service Locator
│   ├── Container.php  # DI Container
│   ├── Database.php   # PDO Wrapper
│   └── Router.php     # URL Dispatcher
├── 📁 database/       # SQLite File
├── 📁 public/         # Entry Point (index.php)
└── 📁 views/          # HTML Templates
```

---

## ⚡ Getting Started

### Prerequisites
- **PHP 8.2+**
- **Composer**

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/rafaumeu/portifolio_php.git
   cd portifolio_php
   ```

2. **Install Dependencies**
   ```bash
   composer install
   ```

3. **Setup Database**
   Initialize and seed the SQLite database:
   ```bash
   php db-seed.php
   ```

4. **Run the Server**
   ```bash
   php -S localhost:8000 -t public
   ```

5. **Access**
   Open `http://localhost:8000` in your browser.

---

## 🎨 Customization

To add new projects, you don't touch the HTML. Just use the database!

```sql
INSERT INTO projects (title, description, stack, year, finished, image) 
VALUES ('New App', 'Built with AI', 'PHP,JS', 2026, 1, 'img/new.png');
```

---

<div align="center">
    
**Developed by Rafael Dias Zendron**

[![LinkedIn](https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/rafael-dias-zendron-528290132/)
[![GitHub](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)](https://github.com/rafaumeu)

</div>
