<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <style>
        @page {
            size: 7in 9.25in;
            margin: 27mm 16mm 27mm 16mm;
        }

        body,
        html {
            height: 100%;
            font-family: Poppins-Regular, sans-serif;
        }

        body {
            margin: 0;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
        }

        .container {
            min-height: 100vh;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 15px;
            background: #e6e6e6;
        }

        .wrap-comment {
            width: 920px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            padding: 62px 55px 59px;
            /* padding: 62px 55px 90px; */
        }


        .wrap-space-evenly {
            display: flex;
            justify-content: space-evenly;
        }

        .title {
            display: block;
            width: 100%;
            font-family: Montserrat-Black;
            font-size: 39px;
            color: #333;
            line-height: 1.2;
            text-align: center;
            padding-bottom: 59px;
        }

        .content {
            display: block;
            width: 100%;
            font-family: Montserrat-Black;
            font-size: 29px;
            color: #333;
            line-height: 1.2;
            text-align: left;
            padding-bottom: 28px;
        }

        .sub-content {
            display: block;
            width: 100%;
            font-family: Montserrat-Black;
            font-size: 19px;
            color: #333;
            line-height: 1.2;
            text-align: left;
            padding-bottom: 28px;
        }

        a {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
            width: fit-content;
            height: 50px;
            background-color: #e4e4e4;
            border-radius: 12px;
            font-family: Montserrat-Medium;
            font-size: 16px;
            color: #000;
            line-height: 1.2;
            transition: all .4s;
            outline: none !important;
            border: none;
            text-transform: uppercase;
            text-decoration: none;
        }

        a:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>

    <!-- [START Class] -->
    <?php
    class Feedback
    {
        private $name;
        private $email;
        private $phone;
        private $gender;
        private $message;

        // Declaration of constructor
        public function __construct($name, $email, $phone, $gender, $message)
        {
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
            $this->gender = $gender;
            $this->message = $message;
        }

        // Used to generate comments.txt
        public function generateTXT()
        {
            $file = fopen('comments.txt', 'w');
            echo fwrite(
                $file,
                "Name: " . $this->name .
                    "\nEmail: " . $this->email .
                    "\nPhone: " . $this->phone .
                    "\nGender: " . $this->gender .
                    "\nMessage: " . $this->message
            );
            fclose($file);
        }

        // Used to generate confirmation.html
        public function generateHTML()
        {
            $file = fopen('confirmation.html', 'w');
            echo fwrite(
                $file,
                '
                    <!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Confirmation</title>
                        <style>
                            @page {
                                size: 7in 9.25in;
                                margin: 27mm 16mm 27mm 16mm;
                            }

                            body,
                            html {
                                height: 100%;
                                font-family: Poppins-Regular, sans-serif;
                            }

                            body {
                                margin: 0;
                                font-size: 1rem;
                                font-weight: 400;
                                line-height: 1.5;
                                color: #212529;
                                background-color: #fff;
                            }

                            .container {
                                min-height: 100vh;
                                display: flex;
                                flex-wrap: wrap;
                                justify-content: center;
                                align-items: center;
                                padding: 15px;
                                background: #e6e6e6;
                            }

                            .wrap-confirm {
                                width: 920px;
                                background: #fff;
                                border-radius: 10px;
                                overflow: hidden;
                                padding: 62px 55px 59px;
                                /* padding: 62px 55px 90px; */
                            }


                            .wrap-space-evenly {
                                display: flex;
                                justify-content: space-evenly;
                            }

                            .title {
                                display: block;
                                width: 100%;
                                font-family: Montserrat-Black;
                                font-size: 39px;
                                color: #333;
                                line-height: 1.2;
                                text-align: center;
                                padding-bottom: 59px;
                            }

                            .content {
                                display: block;
                                width: 100%;
                                font-family: Montserrat-Black;
                                font-size: 29px;
                                color: #333;
                                line-height: 1.2;
                                text-align: left;
                                padding-bottom: 28px;
                            }

                            a {
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                padding: 0 20px;
                                width: fit-content;
                                height: 50px;
                                background-color: transparent;
                                border-radius: 12px;
                                font-family: Montserrat-Medium;
                                font-size: 16px;
                                color: #000;
                                line-height: 1.2;
                                transition: all .4s;
                                outline: none !important;
                                border: none;
                                text-transform: uppercase;
                                text-decoration: none;
                            }

                            a:hover {
                                background-color: #e4e4e4;
                                cursor: pointer;
                            }
                        </style>
                    </head>

                    <body>
                        <!-- [START confirm form] -->
                        <div class="container">
                            <div class="wrap-confirm">
                                <span class="title">Confirmation Page</span>
                                <span class="content">Thank you for filling out this form.</span>
                                <span class="content">Do you want to submit the form?</span>
                                <div class="wrap-space-evenly">
                                    <a href="comments.php?status=submit">Yes</a>
                                    <a href="comments.php?status=cancel">No</a>
                                </div>
                            </div>
                        </div>
                        <!-- [END confirm form] -->
                    </body>

                    </html>
                    '
            );
            fclose($file);
        }

        // Used to remove the generated file comments.txt
        public static function removeTXT()
        {
            unlink('comments.txt');
        }

        // Used to remove the generated file confirmation.html
        public static function removeHTML()
        {
            unlink('confirmation.html');
        }
    }
    // <!-- [END Class] -->
    ?>

    <div class="container">
        <div class="wrap-comment">
            <?php
            if ($_GET['status'] == 'submit') {
                echo "<span class='title'>Summary</span>";

                echo "<span class='content'>";
                echo "Thank you for submitting this form.<br>";
                echo "We have successfully received it.<br>";
                echo "Below is a summary of the information you provided.<br></span>";

                // [START read comments.txt and take out the content]
                $file = fopen("comments.txt", "r");
                $contents = fread($file, filesize("comments.txt"));
                $contents = preg_replace("/\r\n|\r|\n/", '<br>', $contents); // replace enter with <br>
                fclose($file);
                // [END read comments.txt and take out the content]

                // [START show file content]
                echo "<span class='sub-content'>";
                echo $contents;
                echo "</span>";
                // [END show file content]

                // [START create a button to allow users to go to feedback.html]
                echo "<span class='content'><div class='wrap-space-evenly'><a href='feedback.html'>Go Back</a></div></span>";
                // [END create a button to allow users to go to feedback.html]

                Feedback::removeTXT(); // remove comments.txt
                Feedback::removeHTML(); // remove confirmation.html
                return;
            }
            if ($_GET['status'] == 'cancel') {
                Feedback::removeTXT(); // remove comments.txt
                Feedback::removeHTML(); // remove confirmation.html

                echo "
                <script type='text/javascript'>
                    alert('The data has been destroyed.');
                    window.location.href='feedback.html';
                </script>";
            }
            ?>
        </div>
    </div>


    <?php
    // Create a variable to store the error message.
    $messageErr = "";

    // [START Form Validation]
    if (!isset($_POST['name']) || trim($_POST['name']) == '') {
        $messageErr .= 'Name is required.\n';
    }
    if (!isset($_POST['email']) || trim($_POST['email']) == '') {
        $messageErr .= 'Email is required.\n';
    }
    if (!isset($_POST['phone']) || trim($_POST['phone']) == '') {
        $messageErr .= 'Phone is required.\n';
    }
    if (!isset($_POST["gender"])) {
        $messageErr .= 'Gender is required.\n';
    }
    if (!isset($_POST['message']) || trim($_POST['message']) == '') {
        $messageErr .= 'Message is required.\n';
    }
    if ($messageErr == "") {
        $student = new Feedback($_POST["name"], $_POST["email"], $_POST["phone"], $_POST["gender"], $_POST["message"]);
        $student->generateTXT();
        $student->generateHTML();
        header('location: confirmation.html');
    } else {
        echo "<script type='text/javascript'>alert(\"$messageErr\");window.location.href='feedback.html';</script>";
    }
    // [END Form Validation]
    ?>

</body>

</html>