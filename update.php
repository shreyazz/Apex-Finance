<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <?php include './css/update_style.php' ?>
</head>
<body>
    <div class="back">
        <a href="dashboard.php"><img src="./images/pricing/chevron-left.svg" alt="" class="backImg"></a>
    </div>

    <div class="mid">
        <div class="left">
            <form action="" method="post">
                <div class="name">
                    <label for="Name">Change First Name:</label>
                    <input type="text" class="nameChange" placeholder="Enter New First Name here" name="Uname">
                </div>
                <div class="email">
                    <label for="Email">Change Email:</label>
                    <input type="text" class="emailChange" placeholder="Enter new Email here" name="email">
                </div>
                <div class="name">
                    <label for="email">Change Number:</label>
                    <input type="text" class="nameChange" placeholder="Enter New Phone No. here" name="number">
                </div>
                <div class="name">
                    <label for="Name">Change PIN:</label>
                    <input type="text" class="nameChange" placeholder="Enter New PIN here" name="pin" style="color: #fff;">
                </div>
                <button type="submit" name="btn">Save Changes</button>
            </form>
        </div>
        <div class="right">
            <img src="./images/update.svg" alt="">
        </div>
    </div>
    <script src="./js/update.js"></script>
</body>
</html>

<?php 
    include './server/connection.php';
    if (isset($_POST['btn'])) {
        $username = $_POST['Uname'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $pin = $_POST['pin'];
        $id = $_SESSION['id'];

        if (strlen($username) > 0) {
            $query = "update data set fname = '$username' where id = $id";
            $sendQuery = mysqli_query($con, $query);
            
        }
        if (strlen($email) > 0) {
            $query = "update data set email = '$email' where id = $id";
            $sendQuery = mysqli_query($con, $query);
        }
        if (strlen($number) > 0) {
            $query = "update data set phone = $number where id = $id";
            $sendQuery = mysqli_query($con, $query);
        }
        if (strlen($pin) > 0) {
            $query = "update data set pin = $pin where id = $id";
            $sendQuery = mysqli_query($con, $query);
        }
        ?>
            <script>
                location.replace("updateS.php");
            </script>
            <?php
    }

?>