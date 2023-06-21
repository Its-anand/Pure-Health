# Pure-Health E-commerce Website

This is a simple e-commerce website that allows users to browse, search and buy products online and even refund. It is built with HTML, CSS, JavaScript, PHP and Razorpay payment gateway.

## Features

- Responsive design that adapts to different screen sizes and devices
- Product details page with images, description, ratings and reviews
- Shopping cart functionality with add, remove and update items, refund functionality
- Email varification after registration feature. 
- Checkout process with user registration, login and order confirmation
- Payment integration with Razorpay API
- Admin dashboard with product management, order management, refund management 

## Installation

To run this project locally, you need to have a web server with PHP support and a MySQL database. Follow these steps:

1. Clone this repository or download the zip file
2. Extract the files to your web server root directory (e.g. `htdocs` or `www`)
3. Create a database named `id18749980_account` and import the `localhost.sql` file from the `database` folder which is inside the data folder 
4. Incase import fail then create a database named `id18749980_account` and import the tables from the `database` folder which is inside the data folder
5. Edit the `connection.php` file in the `data` folder and update the database credentials and the Razorpay API key and secret key there are many video available on youtube regarding razorpay
6. Open your browser and navigate to `http://localhost/Pure-Health`
7. Enjoy!

## Demo

You can see a live demo of this project here: https://pure-health-natural-products.000webhostapp.com/index.php

## License

This project is licensed under the BSD 3-Clause "New" or "Revised" License - see the [LICENSE](LICENSE) file for details.
