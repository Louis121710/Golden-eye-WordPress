# Page Setup Guide

## Automatic Page Creation

The theme will automatically create the following pages when you activate it:

1. **Contact Us** (`/contact-us/`) - Contact form page
2. **Request Quote** (`/request-quote/`) - Quote request form page
3. **Products & Services** (`/products-services/`) - Services overview page
4. **Compliance & QC** (`/compliance-qc/`) - Compliance information page
5. **Training** (`/training/`) - Training programs page
6. **Equity** (`/equity/`) - Equity and transformation page
7. **Infrastructure** (`/infrastructure/`) - Infrastructure information page

## How to Trigger Page Creation

If the pages weren't created automatically, you can trigger their creation by:

1. **Option 1: Reactivate the Theme**
   - Go to **Appearance → Themes**
   - Switch to a different theme temporarily
   - Switch back to "Golden Eye Security" theme
   - Pages will be created automatically

2. **Option 2: Manual Creation**
   - Go to **Pages → Add New**
   - Create each page with the exact slug names listed above
   - For Contact Us and Request Quote, select the appropriate page template in the Page Attributes box

## Setting Up Navigation Menu

After pages are created:

1. Go to **Appearance → Menus**
2. Click "Create a new menu"
3. Name it "Primary Menu" (or any name)
4. Add all the pages to the menu:
   - Home
   - Compliance & QC
   - Training
   - Equity
   - Infrastructure
   - Products & Services
   - Contact Us
5. Check "Primary Menu" under "Display location"
6. Click "Save Menu"

## Page Templates Available

- **Default Template** - Standard page layout
- **Contact Us Template** (`page-contact.php`) - For Contact Us page
- **Request Quote Template** (`page-request-quote.php`) - For Request Quote page
- **Products & Services Template** (`page-products-services.php`) - Enhanced services page

To assign a template:
1. Edit the page
2. Look for "Page Attributes" box
3. Select the template from "Template" dropdown
4. Update the page

## Editing Page Content

1. Go to **Pages → All Pages**
2. Click on the page you want to edit
3. Update the content in the editor
4. Click "Update" to save

## Customizing Pages

You can customize each page by:
- Editing the page content in WordPress admin
- Modifying the page templates in the theme files
- Adding custom fields or widgets

## Troubleshooting

**Pages not created?**
- Make sure you have administrator privileges
- Check if pages already exist with those slugs
- Try reactivating the theme

**Pages created but not showing in menu?**
- Make sure you've created and assigned a menu
- Check that pages are published (not draft)

**Wrong template being used?**
- Edit the page and check the "Page Attributes" box
- Make sure the correct template is selected

