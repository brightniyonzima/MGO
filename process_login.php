<?php
    include 'config.php';
    $user_name = $_POST['user_name'];
    $password = md5($_POST['password']);

    //compare passwords
    $errflag = false;

    //Check for duplicate login ID
    if ($user_name != '' && $password != '') {
        $qry = "SELECT * FROM users WHERE User_Name='$user_name' and Password='$password'";
        $result = $conn->query($qry);
        if ($result) {
            if ($result->num_rows > 0) {
                $message = "login success";
                $url = '../students-site/index.html';
                /* redirection on success */
                ?>
                <script type="text/javascript">
                    alert('<?php echo $message; ?>');
                    window.location = "<?php echo $url; ?>";
                </script>
                <?php
            }
            else{
                $message = "wrong username or password";
                $url = '../students-site/login.html';
                /* redirection on failing */
                ?>
                <script type="text/javascript">
                    alert('<?php echo $message; ?>');
                    window.location = "<?php echo $url; ?>";
                </script>
                <?php
            }
            //@mysqli_free_result($result);
        } else {
            echo("Query failed");
        }
    }
?>