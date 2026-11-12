
# Laravel Cloud Deployment Demo

A Laravel application created to demonstrate cloud deployment, GitHub integration, and automated deployment workflows using Laravel Cloud.

## Project Overview

This project demonstrates how to deploy a Laravel application to Laravel Cloud using a GitHub repository.

## Features

- Laravel application setup
- GitHub repository integration
- Cloud deployment configuration
- Automated deployment testing
- Application route testing
- Deployment log monitoring

## Tech Stack

- PHP 8.3+
- Laravel
- MySQL (optional)
- Git & GitHub
- Laravel Cloud

## Installation

Clone the repository:

```bash
git clone https://github.com/deepak18121988/laravel-cloud-deployment-demo.git
```

Navigate to the project:

```bash
cd laravel-cloud-deployment-demo
```

Install dependencies:

```bash
composer install
```

Create environment file:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

Run the application:

```bash
php artisan serve
```

Open:

http://127.0.0.1:8000

## Test Route

Visit:

`/test`

Expected response:

`Laravel Cloud Deployment Successful!`

## Deployment

The application is intended to be deployed using Laravel Cloud with GitHub integration.

Live Demo: Coming Soon

## Author

Deepak Lohani

GitHub: https://github.com/deepak18121988
