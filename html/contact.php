<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../PHPMailer/src/Exception.php';

// Runs if the submit button is clicked to send a message.
if (isset($_POST['sendMessageButton'])) {

    //Create/Sanitize variables from user inputs on message form.
    $first_name = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
    $last_name = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    //Input error messages.
    $first_name_error = '';
    $last_name_error = '';
    $email_error = '';
    $state_error = '';
    $message_error = '';

    // Validate first name.
    if (empty($first_name)) {
        $first_name_error = 'First name is required';
    } elseif (strlen($first_name) > 40) {
        $first_name_error = 'First name must be less than 40 characters';
    }

    // Validate last name.
    if (empty($last_name)) {
        $last_name_error = 'Last name is required';
    } elseif (strlen($last_name) > 40) {
        $last_name_error = 'Last name must be less than 40 characters';
    }

    // Validate email.
    if (empty($email)) {
        $email_error = 'An email is required';
    } elseif (strlen($email) > 75) {
        $email_error = 'Emails must be less than 75 characters';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = 'Email is not valid';
    }

    // Validate message
    if (empty($message)) {
        $message_error = 'A message is required';
    } elseif (strlen($message) > 1500) {
        $message_error = 'Messages must be less characters';
    }

    // If all inputs are valid, send the email.
    if (empty($first_name_error) && empty($last_name_error) && empty($email_error) && empty($state_error) && empty($message_error)) {
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'example@gmail.com';                 // SMTP username
            $mail->Password = 'password';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Reply to
            $mail->addReplyTo($email, $first_name . ' ' . $last_name);

            // Have to send to self for forgery reasons. The reply to will have the users email.
            $mail->setFrom('example@gmail.com');

            //To me
            $mail->addAddress('example@gmail.com');     // Add a recipient

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $first_name . ' ' . $last_name . ' (' . $state . ') sent you a message!';
            $mail->Body = $message;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo '<script>alert("Your message has been sent.");
            window.location = "https://chadwolding.com/The_Wolding_Journal/pages/contact.php";
            </script>';
        } catch (Exception $e) {
            //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    } else {
        echo '<script>alert("Something went wrong. Please try again.")</script>';
    }

}

?>

<!doctype html>
<html lang="en">

<head>
    <title>The Wolding Journal</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rye%7CUnifrakturCook:700%7CUnifrakturMaguntia" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../css/nav.css">
    <link rel="stylesheet" type="text/css" href="../css/contactStyle.css">
    <link rel="icon" href="../Images/logo.PNG">
</head>

<body>
<header>
    <div class="titleBar">

        <div class=nav>
            <ul>
                <li id="title" class="pd"><a href="../pages/index.php">T.W.J.</a></li>
                <li><a href="../pages/resume.php" class="pd">Resume</a></li>
                <li><a href="../pages/contact.php" class="pd">Contact</a></li>
                <div class="drop">
                    <button class="dropHover pd">About</button>
                    <div class="dropdown-items">
                        <a href="../pages/bio.php">Bio</a>
                        <a href="../pages/interests.php">Interests</a>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</header>
<main>
    <div class="container">
        <div class="headerGrid">
            <div class="logoTitleContainer">
                <div class="logo">
                    <h1 id="logoId">T.W.J.</h1>
                </div>
                <div class="list">
                    <h1 id="thisTitle">Contact</h1>
                </div>
            </div>
            <div class="smallListContainer">
                <h1 id="listTitle">Contact Info</h1>
                <ul class="enjoy" style="list-style-type:disc">
                    <li>Name: Chad C Wolding</li>
                    <li>Phone: 715-630-6664</li>
                    <li>Email: chadwolding27@gmail.com</li>
                    <li>Home: Nelsonville, WI 54458</li>
                </ul>
            </div>
        </div>

        <div class="bodyContent">
            <div id="imgContainer"></div>
            <img src="../Images/me.png" id="bodyImage" alt="">
            <form action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post"
                  id="contactForm">

                <!-- First Name -->
                <label for="fname">First Name</label>
                <input class="input <?php if (!empty($first_name_error)) echo 'inputError' ?>" type="text" id="fname"
                       name="firstName" value="<?php if (!empty($first_name)) echo $first_name; ?>">
                <span class="inputErrorMessage"><?php if (!empty($first_name_error)) echo $first_name_error . '<br>'; ?></span>

                <!-- Last Name -->
                <label for="lname">Last Name</label>
                <input class="input <?php if (!empty($last_name_error)) echo 'inputError' ?>" type="text" id="lname"
                       name="lastName" value="<?php if (!empty($last_name)) echo $last_name; ?>">
                <span class="inputErrorMessage"><?php if (!empty($last_name_error)) echo $last_name_error . '<br>'; ?></span>

                <!-- Email -->
                <label for="email">Email</label>
                <input class="input <?php if (!empty($email_error)) echo 'inputError' ?>" type="text" id="email"
                       name="email" value="<?php if (!empty($email)) echo $email; ?>">
                <span class="inputErrorMessage"><?php if (!empty($email_error)) echo $email_error . '<br>'; ?></span>

                <!-- State -->
                <label for="state">State</label>
                <select id="state" name="state">
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>

                <!-- Message -->
                <label for="subject">Message</label>
                <textarea class="input <?php if (!empty($message_error)) echo 'inputError' ?>" id="subject"
                          name="message"
                          placeholder="Enter your message here!"><?php if (!empty($message)) echo $message; ?></textarea>
                <span class="inputErrorMessage"><?php if (!empty($message_error)) echo $message_error . '<br>'; ?></span>

                <!-- Submit and cancel buttons -->
                <input type="submit" value="Send" name="sendMessageButton" class="button">
                <input type="reset" value="Clear" class="button">
            </form>
        </div>

    </div>
</main>
<footer>
    <div class="social white">
        <a href="https://www.facebook.com/chad.wolding.5"><i class="fa fa-facebook-official fa-2x"></i></a>
        <a href="http://www.thepictaram.club/instagram/chadwolding"><i class="fa fa-instagram fa-2x"></i></a>
        <a href="https://www.linkedin.com/in/chadwolding/"><i class="fa fa-linkedin-square fa-2x"></i></a>
        <a href="https://codepen.io/GingerDev/"><i class="fa fa-codepen fa-2x"></i></a>
    </div>
</footer>
<script src="../js/function.js"></script>
<script src="https://use.fontawesome.com/1edc521bf1.js"></script>
</body>

</html>
