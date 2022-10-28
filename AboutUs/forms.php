<!DOCTYPE html>
<html>
    <head>
        <title>feedback form</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
        </style>
    </head>
    <body>
        <form action="forms.PHP" method="post" name="form">
        <input name="name" type="text" placeholder="Your name"/>
        <br>
        <input name="email" type="text" placeholder="Email"/>
        <br>
        <textarea cols="32" name="message" rows="5"> Your Feedback
        </textarea>
        <br>
        <input type="submit" value="Submit" />
        </form>

        <?php 
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if(strlen($_POST['name'])>= 3){
            if(str_contains($_POST['email'], "@" )){
                if(strlen($_POST['message'])>= 20){
                    echo "FeedBack has been sent.";
                    echo "Thank you for filling in the form";
                }else{
                    echo "The feedback must Contain at least 20 characters.";
                }

            }else{
                echo "Fill in the E-mail address.";
            }
        }else{
            echo "Fill in First name.";
        }
        ?>

    </body>
</html>

<?php 

?>