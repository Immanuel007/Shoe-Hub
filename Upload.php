<?php

//validating any email and web URL and names
if (isset($_POST['signup'])) {
    $name = $_POST['myName'];
    $email = $_POST['email'];
    $url = $_POST['url'];
    $imgUrl = $_POST['imgUrl'];

    if (empty($name)) {
        $nameError = "Field is empty";
        echo $nameError;
    } elseif (!preg_match("/^[a-zA-Z]*$/", $name)) {
        $nameError = "only letters and white space are Allowed";
        echo $nameError;
    } else {
        echo "Your name is $name";
    }

    if (empty($email)) {
        $emailError = "Email cannot be empty";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format";
        } else {
            echo "Email is valid";
        }


    }

    if (empty($url)) {
        $urlError = "Url cannot be empty";
    } else {
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url)) {
            $urlError = "Invalid url";
            echo $urlError;
        } else {
            echo "Url is valid";
        }
    }

    if (empty($imgUrl)) {
        $imgUrlError = "image cannot be empty";
        echo $imgUrlError;
    } else {
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $imgUrl)) {
            $imgUrlError = "Invalid image";
            echo $imgUrlError;
        } else {
            echo "image is valid";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Php name, Email and URL validation</title>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
<div style="justify-content: center">
    <img src="<?php echo $_POST['imgUrl']?>" alt="beautiful" style="height: 300px;width: 300px">
</div>
<div style="justify-content: center">
    <form action = "" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="myName" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="url">Web url</label>
            <input type="url" name="url" class="form-control">
        </div>

        <div class="form-group">
            <label for="imgUrl">Image url</label>
            <input type="url" name="imgUrl" class="form-control">
        </div>

        <div class="form-group">
            <button name="submit" class="btn btn-primary btn-block">Submit</button>
        </div>

    </form>
    <div>
</body>
</html>
