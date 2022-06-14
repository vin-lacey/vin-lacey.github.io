<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/form.css">
    <title>Contact me | Vin Lacey</title>
</head>

<body>
    <div class="container">
        <div class="form">
            <div class="form-container">
                <form id="contact" action="formsubmit.php" method="post">
                    <h3>Contact me</h3>
                    <div class="form-flex">
                        <div class="form-input-field">
                            <input placeholder="Your name" type="text" tabindex="1" id="name" required autofocus>
                        </div>
                        <div class="form-input-field">
                            <input placeholder="Your Email Address" type="email" id="email" tabindex="2" required>
                        </div>
                        <div class="form-input-field">
                            <textarea placeholder="Type your Message Here...." id="message" tabindex="3" required></textarea>
                        </div>
                        <div class="form-button">
                            <button name="submit" type="submit" id="contact-submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>