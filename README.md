# **🏠 Task Management System **  

## ** Introduction**  
This is a **Laravel-based** for managing tasks, and assigned the task to the members.  

---

## **⚙️ System Requirements**  

Before setting up the project, ensure your system meets the following requirements:  

- **PHP**: 8.2 or higher  
- **Composer**: Latest version  
- **Laravel**: 10+  
- **Database**: MySQL  
- **XAMPP/WAMP**: For running Apache and MySQL locally  
- **Postman**: For API testing  

---

## **🛠️ Getting Started**  

These instructions will guide you through setting up and running the project on your local machine for development and testing purposes.  

### **📌 Prerequisites**  

Ensure you have the following installed:  

- **Git**  
- **PHP (>= 8.2)**  
- **Composer**  
- **MySQL** (or any relational database system)  

---

## **💚 Cloning the Repository**  

Clone this repository to your local machine and navigate into the project directory:  

```sh
git clone https://github.com/iamarunyadhav/task_manager.git
cd task_manager
```

---

## **⚙️ Project Setup**  

### **1⃣ Configure the Database**  

- Use any **SQL server** like **XAMPP** or **WAMP** (e.g., phpMyAdmin, MySQL Workbench).  
- Create a new database (e.g., **property_management**).  

### **2⃣ Set Up Environment Variables**  

Copy the `.env.example` file and rename it to `.env`:  
```sh
cp .env.example .env
```

Open `.env` and update the **database credentials**:  
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_management  # Replace with your database name
DB_USERNAME=root   # Your MySQL username
DB_PASSWORD=       # Your MySQL password (leave blank if no password)
```

---

### **3⃣ Install Dependencies**  
```sh
composer install
```

### **4⃣ Generate Application Key**  
```sh
php artisan key:generate
```

### **5⃣ Migrate the Database**  
```sh
php artisan migrate
```


---

## **🚀 Running the Application**  

### **Start the Laravel Server**  
```sh
php artisan serve
```

By default, the application will be available at:  
**http://127.0.0.1:8000**  


## **🛠️ Running the API**  


### **2⃣ Testing Endpoints**  
- Ensure the Laravel server is running.  
- Use Postman to send requests and check responses.  
- Example request to **fetch task details**:  
  ```http
  GET /api/tasks
  ```

---



## **📄 Useful Artisan Commands**  

| Command | Description |
|---------|-------------|
| `php artisan migrate:refresh` | Refresh migrations (drop & re-run) |
| `php artisan optimize:clear` | Clear cache, config, routes, and views |
| `php artisan cache:clear` | Clear application cache |

---


## **👨‍💻 Author**  
**Arun Pragash Alwar**  

## **👨‍💻 Note **  
**Issues in Some Auth handling , task crud there are some issues in because of auth but thats not needed,  therefore only focused on patterns , principles** 