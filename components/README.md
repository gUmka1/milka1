# Unified Components System

This directory contains the shared components for the Muse Beauty Salon website.

## Components

The components are now integrated directly into the PHP template system rather than separate HTML files.

## How It Works

Each page loads shared components (header, footer) through PHP includes. This ensures a consistent header and footer across all pages while allowing individual pages to maintain their unique content.

## Updating Components

To update the header, footer, or other shared components:

1. Edit the respective PHP file in the `includes/` directory
2. Changes will automatically propagate to all pages that use the component
3. No need to manually update each individual page

## Service Pages

Service pages follow this structure:
- Unique content sections (banner, description, pricing, specialist, expert advice)
- Shared components loaded through PHP includes (header, footer)
- Page-specific JavaScript initialization for booking buttons

## Benefits

- Consistent design and navigation across all pages
- Easier maintenance (change once, update everywhere)
- Faster development of new pages
- Reduced code duplication