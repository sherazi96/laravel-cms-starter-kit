![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)

# Laravel CMS Starter Kit 🚀

A production-ready **Laravel CMS Starter Kit** designed to help you quickly build scalable, secure, and maintainable content-driven applications.

This project reflects real-world Laravel practices and provides a solid foundation for CMS, SaaS, or API-based systems.

---

## ✨ Features
- **Laravel latest stable version**
- **Bootstrap-based UI** using **AdminLTE** (Tailwind completely removed)
- **Admin panel** with authentication & authorization
- **Role & user management** (admin / user roles)
- **CMS-ready architecture**

### 📝 Content Management
- **Blog module**
  - Posts management
  - Categories management
- **Static pages management**
  - About Us
  - Custom pages

### ⚙️ Admin Configuration
- **Admin settings panel**
  - Site title & description
  - Logo & favicon management

### 🌐 Frontend Website
- Public-facing pages
- Site title & logo integration

### 🛠 Developer Experience
- **Database seeding** for fast local setup
- **Modern frontend tooling** (Webpack / NPM)
- **Clean, extensible, and production-friendly codebase**

---

## 🧩 Architecture & UI Approach

This starter kit is intentionally designed to be **architecture-agnostic** and flexible.

- Some admin pages are implemented using **Laravel Livewire with data tables**
- Other admin pages use **traditional Blade views and controllers**

This mixed approach allows developers to:
- Choose the most suitable pattern per feature
- Keep simple pages lightweight
- Use Livewire where dynamic interactions are beneficial
- Adapt the codebase to their preferred architectural style

The goal is to provide a **practical reference implementation**, not to enforce a single pattern.

---

## 🧱 Requirements
- PHP 8.1+
- Composer
- Node.js & npm
- MySQL

---

## ⚙️ Installation & Setup

Follow the steps below to set up the project locally.

### 1️⃣ Clone the repository
```bash
git clone https://github.com/sherazi96/lara_cms.git
cd laravel-cms-boilerplate
```

### 2️⃣ Before running migrations, temporarily comment out the relevant code inside
```text
app/Providers/AppServiceProvider.php
```

### 3️⃣ Install backend dependencies
```bash
composer install
```

### 4️⃣ Configure environment
```bash
cp .env.example .env
```

### 5️⃣ Generate application key
```bash
php artisan key:generate
```

### 6️⃣ Run migrations & seeders
```bash
php artisan migrate:fresh --seed
```

### 7️⃣ Install frontend dependencies
```bash
npm install
```

### 8️⃣ Build frontend assets
```bash
npm run dev
```

### 9️⃣ Re-enable AppServiceProvider logic
```text
Once the setup is complete, re-enable the previously commented code inside the AppServiceProvider boot() method.
```

## 🔐 Authentication & Seeded Data

This boilerplate includes seeded users and roles for development only.

---

## ⚠️ Security Note:

Remove or update seeded users and credentials before deploying to production.

---

## 🔐 Development Credentials (Local Only)

The database seeder creates sample users for **local development and testing**.

> ⚠️ These credentials are for development purposes only.  
> **Do not use them in production.**

### Admin User
- **Email:** admin@admin.com
- **Password:** admin

### Test User
- **Email:** johnconnor2996@gmail.com
- **Password:** password

---

## 📄 License

This project is open-sourced under the **MIT License**.
