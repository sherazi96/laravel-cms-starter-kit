# Laravel CMS Boilerplate 🚀

A production-ready **Laravel CMS boilerplate** designed to help you quickly build scalable, secure, and maintainable content-driven applications.

This project reflects real-world Laravel practices and provides a solid foundation for CMS, SaaS, or API-based systems.

---

## ✨ Features
- Laravel latest stable version
- Admin panel & user authentication
- CMS-ready architecture
- Database seeding for fast setup
- Modern frontend tooling (Webpack / NPM)
- Clean and extensible codebase

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

