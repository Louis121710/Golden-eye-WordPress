# How to Update Page Templates

## Option 1: Automatic Script (Easiest) ⚡

1. **Make sure you're logged into WordPress** as an administrator
2. **Visit this URL in your browser:**
   ```
   http://your-site.local/wp-content/themes/golden-eye-security/update-page-templates.php
   ```
   (Replace `your-site.local` with your actual Local site URL)
3. **The script will automatically update all pages** with the correct templates
4. **Delete the `update-page-templates.php` file** after use for security

## Option 2: Manual Update (Step-by-Step) 📝

### Step 1: Log into WordPress Admin
- Go to your WordPress admin panel (usually `http://your-site.local/wp-admin`)
- Log in with your administrator account

### Step 2: Go to Pages
- In the left sidebar, click on **"Pages"**
- Then click **"All Pages"**

### Step 3: Edit Each Page
For each page, follow these steps:

1. **Click on the page name** (or hover over it and click "Edit")
2. **Look for the "Page Attributes" box** on the right side of the screen
   - If you don't see it, click the three dots (⋮) in the top right
   - Click "Preferences" → "Panels" → Make sure "Page Attributes" is checked
3. **Find the "Template" dropdown** in the Page Attributes box
4. **Select the correct template:**
   - **Contact Us** → Select "Contact Us Template" or "page-contact.php"
   - **Request Quote** → Select "Request Quote Template" or "page-request-quote.php"
   - **Products & Services** → Select "Products & Services Template" or "page-products-services.php"
   - **Compliance & QC** → Select "Compliance & QC Template" or "page-compliance-qc.php"
   - **Training** → Select "Training Template" or "page-training.php"
   - **Equity** → Select "Equity Template" or "page-equity.php"
   - **Infrastructure** → Select "Infrastructure Template" or "page-infrastructure.php"
5. **Click "Update"** button (top right or bottom right)

### Step 4: Repeat for All Pages
Repeat Step 3 for each page that needs updating.

## Visual Guide

```
WordPress Admin → Pages → All Pages → [Click Page Name]
                                    ↓
                            [Edit Page Screen]
                                    ↓
                    [Right Sidebar: Page Attributes Box]
                                    ↓
                            [Template Dropdown]
                                    ↓
                    [Select Template → Click Update]
```

## Troubleshooting

### Can't see "Page Attributes" box?
1. Click the three dots (⋮) in the top right corner
2. Click "Preferences"
3. Click "Panels" tab
4. Make sure "Page Attributes" is enabled
5. Close the preferences window

### Template not showing in dropdown?
- Make sure the template file exists in the theme folder
- Try refreshing the page
- Check that the theme is activated

### Pages don't exist yet?
- Run the `create-pages-now.php` script first to create all pages
- Or manually create pages in WordPress: Pages → Add New

## Quick Checklist

- [ ] Logged into WordPress as admin
- [ ] Navigated to Pages → All Pages
- [ ] Updated Contact Us page template
- [ ] Updated Request Quote page template
- [ ] Updated Products & Services page template
- [ ] Updated Compliance & QC page template
- [ ] Updated Training page template
- [ ] Updated Equity page template
- [ ] Updated Infrastructure page template
- [ ] Deleted update script file (if used)

## Need Help?

If you're still having trouble:
1. Use the automatic script (Option 1) - it's much easier!
2. Make sure you have administrator privileges
3. Check that all template files exist in the theme folder

