# Troubleshooting Guide

## If the website doesn't look like the original design:

### 1. **Activate the Theme**
   - Go to WordPress Admin → Appearance → Themes
   - Find "Golden Eye Security" theme
   - Click "Activate"
   - If you don't see the theme, make sure all files are in: `wp-content/themes/golden-eye-security/`

### 2. **Clear Browser Cache**
   - Press `Ctrl + F5` (Windows) or `Cmd + Shift + R` (Mac) to hard refresh
   - Or clear your browser cache completely

### 3. **Check WordPress Settings**
   - Go to Settings → Reading
   - Make sure "Your homepage displays" is set correctly:
     - Either "Your latest posts" (for blog-style homepage)
     - Or "A static page" (if you want to use a page as homepage)
   - The theme will work with either setting

### 4. **Verify Theme Files**
   Make sure these files exist:
   - `style.css` ✓
   - `functions.php` ✓
   - `header.php` ✓
   - `footer.php` ✓
   - `front-page.php` ✓ (NEW - this ensures homepage loads correctly)
   - `index.php` ✓
   - `page.php` ✓

### 5. **Check for Plugin Conflicts**
   - Deactivate all plugins temporarily
   - See if the theme displays correctly
   - Reactivate plugins one by one to find conflicts

### 6. **Check Browser Console**
   - Press F12 to open Developer Tools
   - Check the Console tab for JavaScript errors
   - Check the Network tab to see if `style.css` is loading (status should be 200)

### 7. **Verify CSS is Loading**
   - View page source (Ctrl+U)
   - Search for "golden-eye-security-style" or "style.css"
   - The CSS file should be linked in the `<head>` section

### 8. **Common Issues:**

   **Issue: Seeing default WordPress theme**
   - Solution: Activate "Golden Eye Security" theme in Appearance → Themes

   **Issue: Styles not applying**
   - Solution: Clear browser cache (Ctrl+F5)
   - Check if CSS file exists and is readable

   **Issue: Homepage shows blog posts instead of custom design**
   - Solution: The `front-page.php` template should handle this automatically
   - If still showing posts, go to Settings → Reading and set a static page

   **Issue: Menu not showing**
   - Solution: Go to Appearance → Menus and create/assign a menu to "Primary Menu" location

### 9. **Quick Test**
   Try accessing the site directly:
   - If using Local by Flywheel, the URL should be something like: `http://golden-eye-security.local`
   - Make sure you're viewing the homepage, not a subpage

### 10. **Still Not Working?**
   Check the error log:
   - In Local by Flywheel, check the PHP error log
   - Look for any PHP errors that might prevent the theme from loading

