<!DOCTYPE html>
<html >
    <head>
        <title>feedback form</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,
        minimum-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="FormsStyle.css">
    </head>
    <body>

    <div class="GridForms">
        <div class="Formbox">
        <form action="Forms.php" method="post" name="form">
            <div class="form">
                <div>
                    <h2>Feedback Form</h>
                </div>
                <div>
                    <input name="name" type="text" placeholder="Your name" class="formInput"/>
                </div>
                <div>
                    <input name="email" type="text" placeholder="Email" class="fromInput"/>
                </div>
                <div>
                    <textarea cols="32" name="message" rows="5">Feedback text
                    </textarea>
                </div>
                <div>
                    <input type="submit" value="Submit" class="formSubmit"/>
                </div>
                <div>
                    <p><a href="AboutUs.html">Go Back to About us Page</a></p>
                </div>
            </div>
        </form>
        </div>
    </div>
        <?php 
        // Checks to see if form Is properly filled in
        if(isset($_POST['Submit'])){

            // Checks if all fields are empty if not then proceed 
            if(!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['message'])){
            
                // Stores the text fields into the Variables 
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                
                //Checks if Name is longer then 3 characters 
                if(strlen($_POST['name'])>= 3){
                    //Checks if Email contains the character @
                    if(str_contains($_POST['email'], "@" )){
                        //Lastly checks if the feedback fields has 20 Characters or more
                        if(strlen($_POST['message'])>= 20){
                            // Successfully filled the form 
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
                
            }else{
                echo"Fill in all the fields";
            }
        }   
        ?>

    </body>
</html>