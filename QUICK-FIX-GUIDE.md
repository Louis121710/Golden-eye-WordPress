# Quick Fix Guide

## Fix Homepage and Contact Page

### Option 1: Use the Fix Script (Easiest) ⚡

1. **Make sure you're logged into WordPress as an administrator**

2. **Visit this URL in your browser:**
   ```
   http://your-site.local/wp-content/themes/golden-eye-security/fix-homepage-and-contact.php
   ```
   (Replace `your-site.local` with your actual site URL)

3. **The script will automatically:**
   - Delete the default "Hello World" WordPress post
   - Update the Contact page template to use the new design
   - Check your homepage settings

4. **After running, DELETE the file** `fix-homepage-and-contact.php` for security

### Option 2: Manual Fix

#### Remove Default WordPress Post:

1. Go to **Posts → All Posts** in WordPress admin
2. Find the "Hello World" post (or any post with "Welcome to WordPress")
3. Click **Trash** to delete it

#### Update Contact Page Template:

1. Go to **Pages → All Pages** in WordPress admin
2. Find and click on **Contact Us** (or **Contact**)
3. In the page editor, look for **Page Attributes** on the right sidebar
4. Under **Template**, select **Contact Page** (or `page-contact.php`)
5. Click **Update**

#### Fix Homepage Settings:

1. Go to **Settings → Reading**
2. Under **Your homepage displays**, select **A static page**
3. Choose your homepage from the dropdown (or create a new one)
4. Click **Save Changes**

### Option 3: Update All Page Templates

If you need to update multiple pages:

1. Visit: `http://your-site.local/wp-content/themes/golden-eye-security/update-page-templates.php`
2. This will update all pages with their correct templates
3. **DELETE the file after use**

## Verify It Worked

1. Visit your homepage - you should see the custom design, not blog posts
2. Visit the Contact page - you should see the new form with all fields
3. Check that the "Welcome to WordPress" post is gone

## Still Not Working?

- Clear your browser cache (Ctrl+F5)
- Check WordPress Settings → Reading
- Make sure the theme is activated
- Check if there are any PHP errors in the error log

