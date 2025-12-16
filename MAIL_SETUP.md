# Email Setup Instructions

## SMTP Configuration

The contact form is now configured to send emails to both the admin (`zwehtet.dev@gmail.com`) and the customer who submitted the form.

### Setup Steps:

1. **Update your `.env` file** with your SMTP credentials:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="your-email@gmail.com"
MAIL_FROM_NAME="株式会社エヴォルブド・インフォ"
```

### For Gmail Users:

If you're using Gmail, you need to create an **App Password**:

1. Go to your Google Account settings
2. Navigate to Security
3. Enable 2-Step Verification (if not already enabled)
4. Go to "App passwords" section
5. Generate a new app password for "Mail"
6. Use this generated password in your `.env` file as `MAIL_PASSWORD`

**Important:** Do NOT use your regular Gmail password. Use the App Password instead.

### For Other SMTP Providers:

Update the following in your `.env` file:

- **Mailgun**: `MAIL_HOST=smtp.mailgun.org`, `MAIL_PORT=587`
- **SendGrid**: `MAIL_HOST=smtp.sendgrid.net`, `MAIL_PORT=587`
- **Amazon SES**: `MAIL_HOST=email-smtp.region.amazonaws.com`, `MAIL_PORT=587`
- **Mailtrap (testing)**: `MAIL_HOST=smtp.mailtrap.io`, `MAIL_PORT=2525`

### Testing:

After configuration, test the contact form by:

1. Visit `/contact/general`
2. Fill out the form
3. Submit
4. Check both emails:
   - Admin email: `zwehtet.dev@gmail.com`
   - Customer email: The email address entered in the form

### What Happens:

When a user submits the contact form:

1. **Admin receives**: A detailed email with all form data
2. **Customer receives**: A confirmation email with their submitted information
3. **Success message**: The form is hidden and a success message is displayed

### Files Created:

- `app/Http/Controllers/ContactController.php` - Handles form submission
- `app/Mail/ContactFormMail.php` - Mailable class for emails
- `resources/views/emails/contact-admin.blade.php` - Admin email template
- `resources/views/emails/contact-customer.blade.php` - Customer confirmation email template
- Updated `routes/web.php` - Added POST route for form submission
- Updated `resources/views/contact/general.blade.php` - Form now submits to the controller

### Troubleshooting:

If emails are not sending:

1. Check your `.env` file has correct SMTP credentials
2. Clear config cache: `php artisan config:clear`
3. Check Laravel logs: `storage/logs/laravel.log`
4. Test SMTP connection using a tool like Telnet
5. Ensure your hosting provider allows outbound SMTP connections on port 587

### For Development/Testing:

If you want to test without sending real emails, you can use:

- **Mailtrap.io** - Free email testing service
- **Log driver** - Set `MAIL_MAILER=log` to log emails instead of sending them
