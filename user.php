
<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
</head>

<body style="background-color:powderblue;">
    <h2 style="text-align:center;">My Website</h2>

    <form method="POST" enctype="multipart/form-data" action="conn.php" action="image.php" >
        <fieldset>

            <label for="first name"><b>Name: </b><label><br>
            <input type="text" name="name" placeholder="Please enter your name" required><br><br>

            <label for="last name"><b>Surname: </b></label><br>
            <input type="text" name="surname" placeholder="Please enter your surname" required><br><br>

            <label for="email address"><b>Email: </b></label><br>
            <input type="text" name="email" placeholder="Please enter your email address" required><br><br>

            <label for="Password"><b>Password: </b></label><br>
            <input type="password" name="pwd" placeholder="Please enter your password" required><br><br>

            <label for="file upload"><b>Select file to Upload: </b></label><br>
            <input type="file" name="upload" placeholder="Please upload file" required><br><br>

            <input type="submit" value="Submit" name="uploadfiles">
        </fieldset>
    </form>
</body>

</html>