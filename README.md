PHP Form Handling with PHPMailer
This repository contains a PHP script to create a form and send its data via email using PHPMailer. The form submission sends an email to a specified Gmail address, demonstrating how to handle form data efficiently and securely.
Features
. PHP Form: Simple form to collect user input.
. PHPMailer Integration: Uses PHPMailer to send form data via email.
. SMTP Support: Configured to use Gmail's SMTP server.
. HTML Email: Sends emails with HTML content.
.Screenshot Included: Screenshot of the form for reference.
![Screenshot 2024-05-20 104610](https://github.com/Abhishekgithubrit/Form_Using-PhpMailer/assets/124499295/58ea0223-3d47-441c-b2f4-8e32ecc2a458)
![Screenshot 2024-05-20 104529](https://github.com/Abhishekgithubrit/Form_Using-PhpMailer/assets/124499295/fe17674f-cd75-4665-a675-90af2283313b)
![Screenshot 2024-05-20 104515](https://github.com/Abhishekgithubrit/Form_Using-PhpMailer/assets/124499295/4a2f18df-a907-4d2c-a7b9-03aa87c7bc27)

How It Works
Create the Form: A PHP script creates an HTML form to collect user input.

Handle Form Submission: When the form is submitted, PHP processes the input data.

Send Email with PHPMailer: The form data is sent to a specified Gmail address using PHPMailer configured for SMTP.

Fetch Data in Gmail: The submitted form data appears in the recipient's Gmail inbox.

. Update send_email.php with your Gmail SMTP details:
php
Copy code
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'your_email@gmail.com';
$mail->Password = 'your_password';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

