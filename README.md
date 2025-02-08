# pmb-stimata

The purpose of creating this website is to assist in managing the new student admission process at the campus, which previously used a manual system.

## Features

- Online Registration
- Applicant Data Management
- Exam Schedule Management
- Selection Result Announcement
- Login System for Admin and Applicants

## Technologies Used

- Frontend:
  - Blade (Laravel Templating Engine)
  - Tailwind CSS

- Backend:
  - PHP
  - Laravel Framework

- Database:
  - Mysql

## Installation

To run this project locally, follow these steps:

1. Clone this repository
   ```bash
   git clone https://github.com/rivalramadhan/pmb-stimata.git

2. Navigate to the project directory
   ```bash
   cd pmb-stimata

3. Install dependencies 
   ```bash
   composer install
   npm install

4. Copy "example.env" and configure the db
    ```bash
    cp .env.example .env
    php artisan key:generate

5. Run the db migrations
    ```bash
    php artisan migrate

6. Start development server
    ```bash
    php artisan serve
    npm run dev
