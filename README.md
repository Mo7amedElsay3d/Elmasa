# 💎 Elmasa Wedding Hall

A Laravel-based wedding hall booking system that allows customers to explore available packages, view package details, and book their preferred package.

## 🚀 Features

- 🏛️ Wedding hall website
- 📦 Wedding packages management
- 💎 Silver, Gold, and VIP packages
- 📋 Detailed package information
- 📅 Booking system
- 🗓️ Display booked dates
- ✅ Booking confirmation page
- 🔗 RESTful API
- 📡 Packages API
- 📡 Bookings API
- 📡 Booked dates API
- 🔒 Laravel Sanctum API support

## 🛠️ Technologies

- PHP
- Laravel
- MySQL
- HTML5
- CSS3
- Bootstrap
- JavaScript
- Laravel Blade
- REST API
- Laravel Sanctum
- Git & GitHub

## 📦 Packages

### 🥈 Silver
- Basic hall setup
- Basic decoration and wedding stage
- Basic sound and lighting system
- DJ
- Basic photography
- Basic buffet
- Hospitality services
- 150 chairs

### 🥇 Gold
- Special decoration
- Advanced lighting
- Professional photography
- Special buffet
- Fire Show
- Mazmar Band
- Drums Band
- 200 chairs

### 💎 VIP
- VIP decoration
- VIP lighting and effects
- Full photography
- Drone photography
- VIP buffet
- Dabke Band
- Mazmar Band
- Drums Band
- Fire Show
- 300 chairs

## 🔌 REST API

The project includes RESTful APIs for managing:

- Wedding packages
- Bookings
- Booked dates

### Package Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/packages` | Get all packages |
| POST | `/api/packages` | Create a package |
| GET | `/api/packages/{id}` | Get package details |
| PUT/PATCH | `/api/packages/{id}` | Update a package |
| DELETE | `/api/packages/{id}` | Delete a package |

## 📅 Booking Flow

1. Customer visits the homepage.
2. Customer views available packages.
3. Customer selects a package.
4. Customer views package details.
5. Customer clicks **Book This Package**.
6. Customer is redirected to the booking section.
7. The selected package is automatically selected.
8. Customer submits the booking request.
9. A booking success message is displayed.

## ⚙️ Installation

Clone the repository:

```bash
git clone YOUR_REPOSITORY_URL