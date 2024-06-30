# Laravel-e-commerce-website

E-commercee is a Laravel-based e-commerce fashion website designed to provide a seamless shopping experience. The website includes various features and pages to facilitate user interaction and product management.

## Features

- **Authentication**: User authentication is managed using Laravel's Auth UI.
- **MySQL Database**: All product data is stored and managed in a MySQL database.
- **CRUD Operations**: Full Create, Read, Update, and Delete operations are implemented for product management.
- **Navigation and Footer Bars**: Easy navigation across the website with consistent footer information.

## Pages

1. **Home**: The landing page of the website.
2. **Story**: A page that tells the story of the brand.
3. **Products**: A comprehensive list of all products available for purchase.
4. **Category**: Products categorized for easier browsing.
5. **FAQ**: Frequently Asked Questions to assist users.
6. **Sign-in**: User login page.
7. **Sign-up**: User registration page.
8. **Profile**: User profile management page.
9. **Cart**: Shopping cart for managing selected products.

## Installation and Setup

### Prerequisites

- PHP >= 7.3
- Composer
- MySQL
- Node.js & NPM (for Laravel Mix)

### Steps

1. **Clone the repository**:
    ```bash
    git clone https://github.com/AbdooMohamedd/Laravel-e-commerce-website.git
    cd E-commercee
    ```

2. **Install dependencies**:
    ```bash
    composer install
    npm install
    ```

3. **Create a copy of your .env file**:
    ```bash
    cp .env.example .env
    ```

4. **Generate an application key**:
    ```bash
    php artisan key:generate
    ```

5. **Set up your database**:
    - Open the `.env` file and set your database credentials:
        ```plaintext
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=E-commercee
        DB_USERNAME=root
        DB_PASSWORD=
        ```

6. **Run the database migrations**:
    ```bash
    php artisan migrate
    ```

7. **Seed the database with initial data (optional)**:
    ```bash
    php artisan db:seed
    ```

8. **Compile the assets**:
    ```bash
    npm run dev
    ```

9. **Run the development server**:
    ```bash
    php artisan serve
    ```

## Usage

### Authentication

- **Sign-up**: Create a new user account via the Sign-up page.
- **Sign-in**: Log into the website using your credentials via the Sign-in page.
- **Profile Management**: Update your profile information on the Profile page.

### Product Management

- **View Products**: Browse through the products on the Products and Category pages.
- **Add to Cart**: Add desired products to your cart from the Products page.
- **Cart Management**: View and manage your cart on the Cart page.

### Navigation

- Use the navigation bar to switch between pages.
- The footer provides additional links and information about the website.

## Contributing

Contributions are welcome! Please submit a pull request or open an issue to discuss your ideas.

---
