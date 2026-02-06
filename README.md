# Golden Eye Security WordPress Theme

A custom WordPress theme I built for Golden Eye Security, a security services company. This theme includes custom page templates, contact forms with bot protection, and a fully responsive design that works great on mobile and desktop.

## Live Demo

You can check out the live site here: [[famous-observation.localsite.io](https://famous-observation.localsite.io)](famous-observation.localsite.io)

**WordPress Admin:**
- URL: [https://famous-observation.localsite.io](famous-observation.localsite.io)
- Username: `00000`
- Password: `11111`

## What It Does

This theme provides a complete website solution for Golden Eye Security with:

- **Custom page templates** for all their service pages (Contact, Training, Compliance, Infrastructure, etc.)
- **Contact forms** with math CAPTCHA and honeypot fields to prevent spam
- **Regional office information** displayed on the contact page
- **Mobile-responsive navigation** with a slide-in menu for better mobile UX
- **Professional design** that fits a security company's brand

## Tech Stack

- WordPress (custom theme)
- PHP for server-side logic and form handling
- HTML5 with semantic markup
- CSS3 with custom properties, flexbox, and grid
- Vanilla JavaScript for interactive features
- Google Fonts (Inter)

## Getting Started

1. Clone the repo:
   ```bash
   git clone https://github.com/Louis121710/Golden-eye-WordPress.git
   ```

2. Copy the theme to your WordPress installation:
   ```bash
   cp -r golden-eye-security /path/to/wordpress/wp-content/themes/
   ```

3. Activate the theme in WordPress admin under **Appearance → Themes**

4. The theme will automatically create the necessary pages when activated, or you can create them manually and assign templates from the page attributes.

## Project Structure

```
golden-eye-security/
├── assets/images/          # Logo files
├── template-parts/         # Reusable template components
├── js/                     # JavaScript files
├── style.css               # Main stylesheet
├── functions.php           # Theme functions and hooks
├── header.php              # Site header
├── footer.php              # Site footer
├── front-page.php          # Homepage template
├── page-contact.php        # Contact page template
├── page-equity.php         # Equity page template
├── page-training.php       # Training page template
└── ... (other page templates)
```

## Features

### Custom Page Templates
Each service page has its own template with custom layouts:
- Contact page with regional offices and contact form
- Training page with course listings
- Compliance & QC page with certification details
- Infrastructure page with operational capabilities
- Products & Services page with service offerings
- Equity page with ownership information

### Form Handling
- Contact form with validation and sanitization
- Quote request form
- Math CAPTCHA for bot protection
- Honeypot field as additional spam prevention
- Email notifications sent to admin

### Responsive Design
- Mobile-first approach
- Slide-in navigation menu for mobile
- Responsive typography and spacing
- Touch-friendly buttons and links

## Customization

### Colors
Edit the CSS variables in `style.css`:
```css
:root {
    --primary-color: #0d2d47;
    --secondary-color: #d4af37;
    --accent-color: #c41e3a;
}
```

### Menus
Create menus in **Appearance → Menus** and assign them to the "Primary Menu" or "Footer Menu" locations.

### Logo
Upload a logo in **Appearance → Customize → Site Identity**, or place logo files in the `assets/images/` folder.

## Security Features

- WordPress nonces for form security
- Input sanitization on all user inputs
- Output escaping to prevent XSS
- Server-side email validation
- Bot protection with CAPTCHA and honeypot

## Browser Support

Tested and working on:
- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Development Notes

I followed WordPress coding standards and best practices throughout. The code is organized with clear separation of concerns - templates in the root, reusable parts in `template-parts/`, and assets in their respective folders.

The theme uses WordPress hooks properly (`wp_enqueue_scripts`, `after_setup_theme`, etc.) and follows the template hierarchy. All forms include proper security measures and validation.

## License

Proprietary - Developed for Golden Eye Security

## Author

**Louis Venter**

- GitHub: [@Louis121710](https://github.com/Louis121710)
