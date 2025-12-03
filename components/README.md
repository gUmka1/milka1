# Unified Components System

This directory contains the shared components for the Muse Beauty Salon website.

## Components

1. **header.html** - Main navigation header with logo and menu
2. **mobile-menu.html** - Mobile navigation menu
3. **footer.html** - Site footer with contact information and links
4. **modal.html** - Booking modal popup

## How It Works

Each page (including service pages) loads these components dynamically using JavaScript. This ensures a consistent header and footer across all pages while allowing individual pages to maintain their unique content.

## Updating Components

To update the header, footer, or other shared components:

1. Edit the respective HTML file in this directory
2. Changes will automatically propagate to all pages that use the component
3. No need to manually update each individual page

## Service Pages

Service pages follow this structure:
- Unique content sections (banner, description, pricing, specialist, expert advice)
- Shared components loaded dynamically (header, mobile menu, footer, modal)
- Page-specific JavaScript initialization for booking buttons

## Component Loader Script

The component loader script in each page:
1. Fetches HTML content from component files
2. Injects them into placeholder divs
3. Initializes the main JavaScript functionality
4. Sets up page-specific event listeners

## Benefits

- Consistent design and navigation across all pages
- Easier maintenance (change once, update everywhere)
- Faster development of new pages
- Reduced code duplication