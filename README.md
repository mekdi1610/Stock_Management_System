# Stock Management System

This is a stock management system developed using **Laravel** (backend) and **VueJS** (frontend). The system is designed for store owners to manage items across different warehouses, enabling storekeepers to track inventory, order products, and allocate items to specific warehouses. Additionally, **Laravel Horizon** is integrated to handle background job processing and monitoring.

## Features

- **Warehouse Management**: Manage multiple warehouses and keep track of stock levels.
- **Order Processing**: Storekeepers can order products and monitor order status.
- **Product Allocation**: Allocate products between warehouses with real-time updates.
- **Background Job Processing**: Key tasks like order processing, inventory tracking, and product allocation are offloaded to background jobs.
- **Real-Time Monitoring**: Laravel Horizon provides a dashboard to monitor jobs, throughput, and failures.
- **VueJS Integration**: Real-time updates for storekeepers via a dynamic VueJS frontend.

## Prerequisites

- PHP 8.x
- Laravel 10.x
- Redis
- Node.js
- Composer
- VueJS 3.x

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/yourusername/stock-management-system.git
   cd stock-management-system
   ```

2. Install dependencies:

   ```bash
   composer install
   npm install
   ```

3. Set up your `.env` file:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Configure your database and Redis settings in the `.env` file.

5. Run database migrations:

   ```bash
   php artisan migrate
   ```

6. Install and configure **Laravel Horizon**:

   ```bash
   composer require laravel/horizon
   php artisan horizon:install
   ```

7. Build frontend assets:

   ```bash
   npm run dev
   ```

## Usage

1. Start the Laravel development server:

   ```bash
   php artisan serve
   ```

2. Start the Redis server.

3. Start Laravel Horizon to monitor background jobs:

   ```bash
   php artisan horizon
   ```

4. Access the application at `http://localhost:8000`.

5. Access the Horizon dashboard at `http://localhost:8000/horizon` to monitor your background jobs.

## Key Operations

- **Order Processing**: Storekeepers can place orders, which are processed as background jobs to improve performance.
- **Product Allocation**: Allocate items to warehouses via background jobs, ensuring scalability and responsiveness.
- **Inventory Tracking**: Automatically sync inventory levels across warehouses using background jobs.

## VueJS Integration

The VueJS frontend provides real-time status updates for storekeepers. For example, when an order is processed or a product is allocated, the storekeeper will receive notifications based on the status of the background job.

## Monitoring with Laravel Horizon

Horizon provides real-time metrics on job performance, including job execution times, throughput, and failure rates. Failed jobs can be retried directly from the Horizon dashboard.

## Notifications and Alerts

Alerts are configured for failed jobs to ensure reliability. For example, you can receive Slack notifications if a critical job such as inventory tracking fails.

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License

This project is licensed under the MIT License.
