# PHP-Native-MVC 🚀

[![PHP Version](https://img.shields.io/badge/php-%3E%3D%208.1-8892bf.svg?style=flat-square)](https://php.net)
[![Framework](https://img.shields.io/badge/Architecture-MVC-orange?style=flat-square)](#)
[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)

A custom-built **PHP Native Framework** designed to simulate the core architecture of **Laravel**. This project focuses on mastering the "Under the Hood" mechanics of modern web frameworks, including Routing, Dependency Injection, and the MVC design pattern.

---

## 🛠 Features

- **Advanced Routing:** Simulates Laravel's `Route::get()` syntax with support for dynamic parameters and HTTP methods.
- **Service Container:** A centralized place to manage class dependencies (Dependency Injection).
- **MVC Pattern:** Clean separation between Business Logic (Controllers), Data (Models), and UI (Views).
- **Autoloading:** Full integration with **Composer (PSR-4)** for modern class management.
- **Middlewares:** Ability to intercept requests (e.g., Auth, Logging) before reaching the controller.
- **Environment Management:** Uses `.env` files to protect sensitive credentials.

---

## 📂 Directory Structure

```text
├── app/
│   ├── Controllers/    # Application logic
│   ├── Models/         # Database interactions
│   └── Middlewares/    # Request filters
├── core/               # Framework Engine (The "Magic")
│   ├── Application.php # App Bootstrapper
│   ├── Router.php      # Request dispatcher
│   ├── Request.php     # HTTP Request handler
│   └── Response.php    # HTTP Response handler
├── public/             # Entry point (index.php) & Assets
├── routes/             # Route definitions (web.php)
├── views/              # UI / Blade-like templates
├── .env                # Configuration variables
└── composer.json       # PSR-4 Autoloading configuration