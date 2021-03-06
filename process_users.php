<?php
session_start();
$action = $_GET['action'];

switch ($action) {
	case 'add_user':
		add_user();
		break;
	
	default:
		# code...
		break;
}

// inserts new users in the database	
function add_user() {
    $fname = $_POST['first_name'];
    $sname = $_POST['last_name'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $user_group = $_POST['user_group'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    //$conn = mysqli_connect('localhost','root','root@1','mgo');

    //compare passwords
    $errflag = false;
    if (strcmp($password, $cpassword) != 0) {
        $errmsg_arr[] = 'Passwords do not match';
        $errflag = true;
    }

    //Check for duplicate login ID
    if ($user_name != '') {
        $qry = "SELECT * FROM users WHERE User_Name='$user_name'";
        $result = $conn->query($qry);
        if ($result) {
            if ($result->num_rows > 0) {
                $errmsg_arr[] = 'user name already in use';
                $errflag = true;
            }
            //@mysqli_free_result($result);
        } else {
            echo("Query failed");
        }
    }

    // check if some errors occured
    if ($errflag) {

        if (is_array($errmsg_arr) && count($errmsg_arr) > 0) {
            $error_message = " <br>---ERROR-- please first correct the following mistake<\br>";

            foreach ($errmsg_arr as $msg) {
                $error_message .= "<br>" . $msg;
            }
            $errmsg_arr = null;
            //redirect($error_message, "/registration.php");
            header("location:javascript://history.go(-1)");
        }
    } // insert the user if  everything is correct
    else {

        $form_data = array(
            "First_Name" => $fname,
            "Last_Name" => $sname,
            "User_Name" => $user_name,
            "Password" => md5($password),
            "User_Group_Id" => $user_group,
            "Mobile_Number" => $phone,
            "Email" => $email,
            "Active" => 1
        );
        $message = "new user has been added";
        $result = db_row_insert("users", $form_data, $conn);
        //redirect($message, "/registration.php");
        header("location:javascript://history.go(-1)");
    }
}

//Call this function when u need to do a javascript redirect and also display a message eg after submitting results 
function redirect($message, $url) {
    ?>
    <script type="text/javascript">
        alert('<?php echo $message; ?>');
        window.location = "<?php echo $url; ?>";
    </script>
    <?php
}

function db_row_insert($table_name, $form_data,$conn) {
    $fields = array_keys($form_data);
    // building the query
    $sql = "INSERT INTO " . $table_name . " (`" . implode('`,`', $fields) . "`) VALUES('" . implode("','", $form_data) . "')";
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: ";
	}
    // run and return the query result
    $conn->close();
}

?>