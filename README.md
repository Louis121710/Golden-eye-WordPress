# Golden Eye Security - WordPress Theme

A professional, fully responsive WordPress theme for Golden Eye Security, a security services company. This theme features a modern design, comprehensive contact forms, and custom page templates for all company services.

## 🌐 Live Demo

**Website URL:** [https://near-duck.localsite.io](https://near-duck.localsite.io)

**WordPress Admin Login:**
- **Username:** `00000`
- **Password:** `11111`
- **Admin URL:** [https://near-duck.localsite.io/wp-admin](https://near-duck.localsite.io/wp-admin)

## ✨ Features

- **Fully Responsive Design** - Mobile-first approach with smooth animations
- **Custom Page Templates** - Dedicated templates for all service pages
- **Contact Form with Bot Protection** - Math CAPTCHA and honeypot field
- **Regional Office Information** - Multi-location contact details
- **Service Selection Forms** - Comprehensive checkbox selection for services
- **Professional Security Aesthetic** - Modern design with security-focused branding
- **WordPress Best Practices** - Clean code, proper hooks, and security measures

## 📁 Project Structure

```
golden-eye-security/
├── assets/
│   └── images/
│       ├── golden-eye-logo.png
│       └── saidsa-logo.png
├── template-parts/
│   ├── content-home.php
│   ├── content-page.php
│   └── content-none.php
├── js/
│   └── theme.js
├── style.css
├── functions.php
├── header.php
├── footer.php
├── index.php
├── front-page.php
├── page.php
├── single.php
├── 404.php
├── page-contact.php
├── page-request-quote.php
├── page-equity.php
├── page-compliance-qc.php
├── page-training.php
├── page-infrastructure.php
└── page-products-services.php
```

## 🚀 Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/Louis121710/golden-eye-security.git
   ```

2. **Navigate to WordPress themes directory:**
   ```bash
   cd wp-content/themes/
   ```

3. **Copy the theme folder:**
   ```bash
   cp -r golden-eye-security /path/to/wordpress/wp-content/themes/
   ```

4. **Activate the theme:**
   - Log into WordPress admin
   - Go to **Appearance → Themes**
   - Find "Golden Eye Security" and click **Activate**

5. **Set up pages:**
   - The theme will automatically create required pages on activation
   - Or manually create pages and assign templates from **Page Attributes**

## 🎨 Customization

### Changing Colors

Edit CSS variables in `style.css`:

```css
:root {
    --primary-color: #0d2d47;
    --secondary-color: #d4af37;
    --accent-color: #c41e3a;
    /* ... */
}
```

### Adding Menu Items

1. Go to **Appearance → Menus**
2. Create or edit your menu
3. Assign to "Primary Menu" location

### Logo Upload

1. Go to **Appearance → Customize → Site Identity**
2. Upload your logo
3. Or place logo files in `assets/images/` folder

## 📝 Page Templates

- **Contact Page** (`page-contact.php`) - Full contact form with regional offices
- **Request Quote** (`page-request-quote.php`) - Quote request form
- **Equity** (`page-equity.php`) - Company ownership information
- **Compliance & QC** (`page-compliance-qc.php`) - Compliance details
- **Training** (`page-training.php`) - Training programs
- **Infrastructure** (`page-infrastructure.php`) - Company infrastructure
- **Products & Services** (`page-products-services.php`) - Service listings

## 🔒 Security Features

- **Nonce Verification** - All forms use WordPress nonces
- **Input Sanitization** - All user inputs are sanitized
- **Bot Protection** - Math CAPTCHA and honeypot field
- **Email Validation** - Server-side email validation
- **XSS Prevention** - Proper escaping of all outputs

## 🛠️ Technologies Used

- **WordPress** - CMS Framework
- **PHP** - Server-side scripting
- **HTML5** - Semantic markup
- **CSS3** - Modern styling with Flexbox/Grid
- **JavaScript (ES6)** - Interactive functionality
- **Google Fonts** - Inter font family

## 📱 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## 👨‍💻 Development

### Code Standards

- WordPress Coding Standards
- PSR-12 PHP coding style
- Semantic HTML5
- BEM-inspired CSS methodology
- ES6 JavaScript

### File Organization

- **Templates** - Page-specific templates in root
- **Template Parts** - Reusable components in `template-parts/`
- **Assets** - Images, fonts, and media in `assets/`
- **JavaScript** - Custom scripts in `js/`

## 📄 License

This project is proprietary software developed for Golden Eye Security.

## 👤 Author

**Louis Venter**

- GitHub: [@Louis121710](https://github.com/Louis121710)
- Portfolio: [Your Portfolio URL]
- LinkedIn: [Your LinkedIn URL]

## 🙏 Acknowledgments

- WordPress Community
- Golden Eye Security for the project opportunity

---

**Note:** This theme was developed as a custom solution for Golden Eye Security. All code follows WordPress best practices and security guidelines.
