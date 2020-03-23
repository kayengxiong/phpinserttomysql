<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert MySQL By PHP</title>
</head>
<body>
    <form action="insert.php" method="POST">
        <input type="text" name="firstname" placeholder="Firstname">
        <input type="text" name="lastname" placeholder="Lastname">
        <select name="gender">
            <option value="m">Male</option>
            <option value="f">Female</option>
        </select>
        <label><input type="radio" value="php" name="favoriteProgramming"> PHP </label>
        <label><input type="radio" value="java" name="favoriteProgramming"> JAVA </label>
        <label><input type="radio" value="js" name="favoriteProgramming"> JavaScript </label>
        <input type="submit" value="INSERT" name="addToDatabase">
    </form>
    <?php
        $connection = mysqli_connect("localhost", "root", "", "insertmysqlbyphp");
        if(isset($_POST['addToDatabase'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $gender = $_POST['gender'];
            $favoriteProgramming = $_POST['favoriteProgramming'];
            $SQL = "INSERT INTO `tb_information`(`id`, `firstname`, `lastname`, `gender`, `favoriteProgramming`) VALUES (NULL,'$firstname','$lastname','$gender','$favoriteProgramming')";
            $QUERY = mysqli_query($connection,$SQL);
            header("location:insert.php");
            
        }

    ?>
</body>
</html>