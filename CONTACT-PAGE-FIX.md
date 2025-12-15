# Contact Page Not Updating? Here's How to Fix It

## Quick Fix - Run This Script

1. **Make sure you're logged into WordPress admin**

2. **Visit this URL in your browser:**
   ```
   http://your-site.local/wp-content/themes/golden-eye-security/force-update-contact.php
   ```
   (Replace `your-site.local` with your actual site URL)

3. **The script will:**
   - Find your contact page automatically
   - Force update the template
   - Clear cache
   - Show you a direct link to verify

4. **After it works, DELETE the file** `force-update-contact.php` for security

## Manual Method

### Step 1: Find Your Contact Page

1. Go to **Pages → All Pages** in WordPress admin
2. Look for a page named:
   - "Contact Us"
   - "Contact"
   - Or any page with "contact" in the title

### Step 2: Edit the Page

1. Click on the contact page to edit it
2. Look at the **right sidebar** for **"Page Attributes"**
3. If you don't see it, click the **three dots (⋮)** in the top right → **Preferences** → **Panels** → Enable **Page Attributes**

### Step 3: Change the Template

1. Under **Page Attributes**, find **"Template"**
2. Click the dropdown
3. Select **"Contact Page"** or **"page-contact.php"**
4. Click **"Update"** button

### Step 4: Clear Cache

1. **Browser Cache:** Press `Ctrl+F5` (Windows) or `Cmd+Shift+R` (Mac)
2. **WordPress Cache:** If you have a caching plugin, clear it
3. **Server Cache:** If using Local by Flywheel, restart the site

### Step 5: Verify

Visit your contact page - you should now see:
- Hero section with title and emergency hotline
- Contact info cards (Phone, Email, Postal)
- Regional offices section
- Full contact form with checkboxes

## Still Not Working?

### Check These:

1. **Is the page published?**
   - Go to Pages → All Pages
   - Make sure the contact page status is "Published" (not Draft)

2. **Is the theme activated?**
   - Go to Appearance → Themes
   - Make sure "Golden Eye Security" is active

3. **Check the page slug:**
   - Edit the contact page
   - Look at the URL slug (should be `contact-us` or `contact`)

4. **Try a different browser:**
   - Sometimes browser cache is stubborn
   - Try in incognito/private mode

5. **Check for PHP errors:**
   - In Local by Flywheel, check the PHP error log
   - Look for any errors related to the contact page

## Need More Help?

If none of this works, the issue might be:
- The page template file might have a syntax error
- WordPress might be using a different template hierarchy
- There might be a plugin conflict

Try deactivating all plugins temporarily to see if that helps.

