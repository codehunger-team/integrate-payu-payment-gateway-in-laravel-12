<p align="center">
    <a href="https://www.codehunger.in" target="_blank">
        <img src="https://www.codehunger.in/assets/image/logo.png"  alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions">
        <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
    </a>
</p>

# Integrate PayU Payment Gateway in Laravel 12 Without Any Package (Test Mode)

This repository demonstrates a clean, package-free integration of the PayU payment gateway in a Laravel 12 application, specifically focusing on **test mode**. The code includes hash generation, payment redirection, and response handling for success and failure.

---

## About This Integration

- Generate secure hashes as required by PayU without third-party packages
- Redirect users to PayU’s test environment for payment
- Handle success and failure responses securely
- Simple and extendable Laravel 12 controller and view example

---

## Blog Tutorial

For a detailed step-by-step guide, visit the blog post:

[PayU Payment Gateway Integration in Laravel 12 (Test Mode) - CodeHunger](https://www.codehunger.in/blog/payu-payment-gateway-integration-in-laravel-12)

---

## About CodeHunger Pvt Ltd

This integration and tutorial are proudly created by CodeHunger Pvt Ltd, a professional Laravel development company.

- **Website:** [https://www.codehunger.in](https://www.codehunger.in)
- **Contact Us:** [https://www.codehunger.in/contact-us](https://www.codehunger.in/contact-us)

---

## Getting Started

Clone this repository and set your PayU credentials in your `.env` file:

```env
MERCHANT_KEY=your_merchant_key_here
MERCHANT_SALT=your_merchant_salt_here
MERCHANT_ID=your_merchant_id_here
