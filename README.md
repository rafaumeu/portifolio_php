<div align="center">

# 🚀 Portfolio with PHP and TailwindCSS

A modern, responsive, and dynamic portfolio built with pure PHP and styled with TailwindCSS.

[![PHP](https://img.shields.io/badge/PHP-8.3-777BB4.svg)](https://php.net/)
[![TailwindCSS](https://img.shields.io/badge/Tailwind-CSS-38B2AC.svg)](https://tailwindcss.com/)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

</div>

<div align="center">
  <img src="public/img/portfolio.png" alt="Project Screenshot" width="100%">
</div>

---

## 📖 Overview

This project is a complete refactoring of a legacy portfolio. The goal was to modernize the tech stack, moving from old procedural PHP to a component-based structure, maintaining the simplicity of **Vanilla PHP** but with the visual power of **TailwindCSS**.

### ✨ What Changed?

- **Frontend**: Full migration to **TailwindCSS** (via CDN for rapid development).
- **Backend**: Modern PHP serving as a template engine.
- **Structure**: Separation of concerns in `components/` (Header, Hero, Projects).
- **Assets**: Organized management of images and dynamic SVG icons.
- **Workflow**: Automated scripts for semantic commits in WSL.

---

## 🛠️ Technologies

- **PHP 8.2+**: Rendering logic and data.
- **TailwindCSS 3.4**: Utility-first styling.
- **Semantic HTML5**: Accessible and SEO-friendly structure.
- **Git Flow & Conventional Commits**: Versioning standard.

---

## 🚀 Project Structure

```bash
├── 📁 .agent/          # Automation workflows (AI)
├── 📁 components/      # Reusable UI components
│   ├── header.php
│   ├── hero.php
│   └── projects.php
├── 📁 img/             # Assets (Images, Icons, SVG)
├── index.php           # Entry Point (Main Layout)
└── README.md           # Documentation
```

---

## ⚡ How to Run

### Prerequisites
- PHP 8.0 or higher installed.

### Step-by-Step

1. **Clone the repository:**
   ```bash
   git clone https://github.com/rafaumeu/portifolio_php.git
   cd portifolio_php
   ```

2. **Start the Built-in Server:**
   ```bash
   php -S localhost:8000
   ```

3. **Access:**
   Open `http://localhost:8000` in your browser.

---

## 🎨 Customization

### Adding New Projects
Go to `components/projects.php` and add to the `$projects` array:

```php
[
    "titulo" => "New Project",
    "finalizado" => true,
    "ano" => 2025,
    "descricao" => "Amazing description...",
    "stack" => ["PHP", "Laravel"],
    "img" => "img/new-project.png"
]
```

---
<div align="center">
Developed with 🐧 during Rocketseat's course
</div>
<div align="center">
<img src="https://github.com/rafaumeu.png" width="100" height="100" style="border-radius: 50%;">

[![LinkedIn](https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/rafael-dias-zendron-528290132/)
[![GitHub](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)](https://github.com/rafaumeu)
</div>
