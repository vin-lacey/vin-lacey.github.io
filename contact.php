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
                <form action="action.php" method="post">
                    <div>
                        <input type="text" id="name" name="name" placeholder="Name" required />
                    </div>
                    <div>
                        <input type="email" id="email" name="email" placeholder="Email address" required />
                    </div>
                    <div>
                        <textarea placeholder="Type your Message Here...." id="message" name="message" required></textarea>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>