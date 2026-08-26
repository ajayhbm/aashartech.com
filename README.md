# PCB Innovate Multi-Page Website

## Pages
Home, About Us, PCB Design, PCB Fabrication, PCB Assembly, AI-Assisted PCB Design, Training/FDP, Projects, Products, Contact Us.

## Run locally with PHP
1. Install PHP 8+.
2. Open a terminal in this folder.
3. Run: `php -S localhost:8000`
4. Open `http://localhost:8000/`.

## Real enquiry form
The Contact Us form posts to `api/enquiry.php`. Before deployment, change `YOUR_BUSINESS_EMAIL@example.com` to your real business email. For reliable production delivery, configure SMTP through your hosting provider or replace `mail()` with PHPMailer/SMTP credentials.

## Deploy on Apache/cPanel
Upload the complete folder to `public_html`. Keep the `api` directory. Ensure PHP is enabled. Configure the recipient email in `api/enquiry.php` and test the form.

## Customization
Replace PCB Innovate with your registered startup name, add your logo, phone, email, address, social links and actual project/product data.
