# GitHub Setup Instructions

## Step 1: Initialize Git Repository

If you haven't already, initialize git in the theme directory:

```bash
cd app/public/wp-content/themes/golden-eye-security
git init
```

## Step 2: Add All Files

```bash
git add .
```

## Step 3: Create Initial Commit

```bash
git commit -m "Initial commit: Golden Eye Security WordPress theme

- Professional responsive design
- Custom page templates for all services
- Contact forms with bot protection
- Mobile-first responsive navigation
- WordPress coding standards compliant
- Security best practices implemented"
```

## Step 4: Create GitHub Repository

1. Go to [GitHub](https://github.com) and sign in
2. Click the **"+"** icon in the top right
3. Select **"New repository"**
4. Name it: `golden-eye-security` (or your preferred name)
5. **Don't** initialize with README (we already have one)
6. Click **"Create repository"**

## Step 5: Connect and Push

GitHub will show you commands. Use these:

```bash
# Add remote repository (replace YOUR_USERNAME with your GitHub username)
git remote add origin https://github.com/YOUR_USERNAME/golden-eye-security.git

# Rename branch to main (if needed)
git branch -M main

# Push to GitHub
git push -u origin main
```

## Step 6: Verify

Visit your GitHub repository to verify all files are uploaded.

## Important Notes

- The `.gitignore` file will exclude sensitive files
- Don't commit `wp-config.php` or database files
- Remove setup scripts (`fix-homepage-and-contact.php`, etc.) before pushing
- Update README.md with your actual GitHub username and links

## Updating the Repository

After making changes:

```bash
git add .
git commit -m "Description of changes"
git push
```

## Making Code Look Professional

The code is already formatted with:
- ✅ Proper comments and documentation
- ✅ WordPress coding standards
- ✅ Clean, readable structure
- ✅ Security best practices
- ✅ Professional file organization

Your code is ready to impress potential employers! 🚀

