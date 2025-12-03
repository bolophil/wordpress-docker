# 🧑‍💻 WordPress + Docker  
A lightweight, custom WordPress theme running inside a Docker environment.  

---

## 🚀 Features

### **Custom WordPress Theme**
- Minimal clean layout built from scratch
- Sections for About, Projects, Skills, and Contact
- Smooth single-page navigation
- Fully self-contained (`front-page.php`, `header.php`, `footer.php`, etc.)

### **Dockerized WordPress Setup**
- WordPress (PHP 8.2 + Apache)
- MySQL database container
- Volume-mounted `wp-content/` for easy theme editing
- Hot-reloads when theme files change
- Reproducible developer environment

### **Tech Stack**
- WordPress (custom theme)
- PHP (templates)
- CSS (custom styles)
- Docker + Docker Compose
- MySQL 8

---


---

## 🐳 Running the Site (Local Docker)

From the project root:

```bash
docker compose up -d
```

Then visit:
`http://localhost:8000`

Log in to the admin dashboard:
`http://localhost:8000/wp-admin`

Use your WordPress admin username/password.