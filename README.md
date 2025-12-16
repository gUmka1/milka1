# Milka CMS

A minimal CMS built with PHP, designed for simplicity and ease of use.

## Deploying to Vercel

To deploy this PHP application to Vercel:

1. Ensure you have the `vercel.json` file in the root of your project (already included)
2. Push your code to a GitHub repository
3. Connect your GitHub repository to Vercel
4. During the import process, Vercel should automatically detect the `vercel.json` file
5. Deploy your site

The `vercel.json` file tells Vercel how to handle PHP files and route requests.

If you encounter issues with deployment, make sure:
- Git is installed on your system
- Your project is properly committed and pushed to GitHub
- The `vercel.json` file is in the root directory

## Features

- **Content Management**: 
  - Pages (with title, slug, content, meta tags)
  - Blog Posts (with categories, meta tags)
- **Media Management**: Upload and manage images
- **Simple Installation**: Easy setup with automatic database initialization

## Installation

1. Clone the repository to your web server
2. Configure your database settings in `config/config.php`
3. Navigate to `/install` to initialize the database
4. Your site is ready to use!

## File Structure

```
milka/
├── api/             # API endpoints
├── assets/          # Static assets (images, CSS, JS)
├── bootstrap/       # Application bootstrap
├── classes/         # Core classes (DB, Router, Controller, etc.)
├── config/          # Configuration files
├── controllers/     # Controllers for frontend
├── includes/        # Shared templates (header, footer)
├── install/         # Installation files
├── routes/          # Route definitions
├── storage/         # Storage for uploaded files
├── views/           # View templates
└── index.php        # Main entry point
```

## Security

- All passwords are hashed using PHP's `password_hash()` function
- CSRF protection is implemented on all forms
- Database queries use prepared statements to prevent SQL injection

## Requirements

- PHP 7.4 or higher
- MySQL or MariaDB
- Apache with mod_rewrite enabled

## License

This project is open-source and available under the MIT License.