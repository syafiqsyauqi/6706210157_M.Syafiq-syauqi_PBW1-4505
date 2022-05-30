<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses</title>
</head>
<body>
    <?php
    if (isset($_POST["submit"])){
        $name= $_POST["name"];
        $email= $_POST["email"];
        $website= $_POST["website"];
        $comment= $_POST["comment"];
        $gender= $_POST["gender"];
    }else{
        die ("Sorry, you cannot access this page!");
    }
    if (!empty($name)){
        if (!preg_match("/^[a-zA-Z \-\.\']*$/", $name)){
            echo "Your input name is Incorrect! Only letters white space, dot (.), and dash(-) are allowed <br>";
        }else{
        echo "Thanks, <b?>". $name."</b><br>";
        }
    }else{
        $name = test_input($name);
        echo ("Name is required <br>");
    }

    if (!empty($email)){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Invalid email format! <br>";
        }else{
            echo "Your email is:, ".$email."<br>";
        } 
    }else{
        $email = test_input($email);
        echo("email is required <br>");
    }

    if (!empty($website)){
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.:]*[-a-z0-9+&@#\/%=~_|]/i", $website)){
            echo "Invalid URL <br>";
        }else{
            $website = test_input($website);
            echo "Your website is ".$website. "<br>";
        }
    }else{
        echo "Your website is: none <br>";
    }

    if(!empty($comment)){
        $comment = test_input($comment);
        echo "Comment ".$comment. "<br>";
    }else{
        echo "Your comment is: none <br>";
    }
    
    if (!empty($gender)){
        echo "Your are ".$gender."<br>";
    }else{
        echo("Gender is required");
    }
    function test_input ($data){
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }
    ?>
</body>
</html>