# Librewrary

Librewrary is an open-source Laravel-based platform designed to create, share, and explore beer recipes. This project empowers users to craft their own recipes, exchange ideas with the community, and collaborate on the finer details of brewing by sharing ingredients like grains, hops, and other additives.

## Current Status

This project is currently a work in progress and is temporarily on hold due to time constraints. Contributions, suggestions, and feedback are still welcome to help shape its future development.

## Features

- **Recipe Management**: Create, edit, and manage your own beer recipes.
- **Community Sharing**: Share your recipes with other users and discover new ones.
- **Ingredient Repository**: Contribute to and explore a shared library of grains, hops, and brewing additives.
- **User Interaction**: Engage with other brewers through comments and ratings.

## Installation

To set up Librewrary locally, follow these steps:

### Prerequisites

- PHP >= 8.0
- Composer
- Node.js & npm
- A database system (MySQL, PostgreSQL, etc.)

### Steps

1. **Clone the repository:**
   ```bash
   git clone https://github.com/TomeuMut/librewrary.git
   cd librewrary
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Set up the environment:**
   - Duplicate the `.env.example` file and rename it to `.env`.
   - Update the `.env` file with your database credentials and other configuration details.

4. **Generate application key:**
   ```bash
   php artisan key:generate
   ```

5. **Run database migrations:**
   ```bash
   php artisan migrate
   ```

6. **Build frontend assets:**
   ```bash
   npm run dev
   ```

7. **Start the development server:**
   ```bash
   php artisan serve
   ```

   The application will be available at `http://localhost:8000`.

## Usage

- Sign up to create an account.
- Start creating your beer recipes.
- Browse and discover recipes shared by others.
- Contribute ingredients to the shared library and explore existing entries.

## Contributing

We welcome contributions to improve Librewrary! If you'd like to contribute:

1. Fork the repository.
2. Create a new branch for your feature or bugfix.
3. Submit a pull request with a clear description of your changes.

## License

This project is licensed under the [MIT License](LICENSE).

##

Happy brewing and sharing!
