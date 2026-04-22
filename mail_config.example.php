<?php
// Copy this file to mail_config.php and fill in your credentials.
// mail_config.php is gitignored — never commit the real file.
//
// Gmail app password setup:
//   1. Enable 2FA on your Google account
//   2. Go to myaccount.google.com → Security → App passwords
//   3. Create a new app password (select "Mail" + "Other")
//   4. Paste the 16-character password below (spaces optional)

return [
    'gmail_user'         => 'your.address@gmail.com',
    'gmail_app_password' => 'xxxx xxxx xxxx xxxx',
    'to'                 => 'julian@wiche.eu',
];
