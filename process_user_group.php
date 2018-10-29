<?php
    include 'config.php';
    $groupname = $_POST['group_name'];
    $errflag = false;

    //Check for duplicate user group
    if ($groupname != '') {
        $qry = "SELECT * FROM user_groups WHERE Group_Name='$groupname'";
        $result = $conn->query($qry);
        if ($result) {
            if ($result->num_rows > 0) {
                $errmsg_arr[] = 'Group name already exists, please use another name';
                $errflag = true;
            }
            @mysqli_free_result($result);
        } else {
            echo("Query failed");
        }
    }

    // check if some errors occured
    if ($errflag) {

        if (is_array($errmsg_arr) && count($errmsg_arr) > 0) {

            echo '<strong align="center"><br><br><br>---ERROR---<br><br><h2> please first correct the following mistakes</h2><br><ul class="err">';

            foreach ($errmsg_arr as $msg) {
                echo '<li>' . $msg . '</li>';
            }
            echo 'Click back from the browser  to try again';
            $errmsg_arr = null;
        }

        // insert the group if  everything is correct
    } else {
        // get the group permissions assigned using category names
        $query = "select * from permission_category";
        $results = $conn->query($query);
        if (!$results) {
            echo "Sorry access to the database failed with error details below <br> :" . mysqli_error();
        } else {
            $permissions = '';
            while ($row = mysqli_fetch_assoc($results)) {
                $categoryname = str_replace(' ', '_', $row['Category_Name']);
                print_r($_POST[$categoryname]);
                if (isset($_POST[$categoryname])) {
                    //echo $permissions;
                    /*$permissions .= $categoryname;

                    foreach ($_POST[$categoryname] as $permission_name) {
                        $permissions .= $permission_name . ',';
                    }
                    $permissions .= $categoryname;*/
                }
            } //break;
        }
        $qry = "INSERT INTO user_groups(Group_Name,Group_Permission) VALUES('$groupname','$permissions')";
        $result = $conn->query($qry);
        if ($result) {
            //for audits
            $aditTask = 'Insert';
            $taskPerformed = 'New User Group Inserted';
            $tableName = 'user_groups';
            $row = mysqli_fetch_assoc($conn->query("SELECT LAST_INSERT_ID()"));

            $message = "added group success";
            $url = '../students-site/index.html';
            /* redirection on success */
            ?>
            <script type="text/javascript">
                alert('<?php echo $message; ?>');
                window.location = "<?php echo $url; ?>";
            </script>
            <?php
        } else {
            echo("Query failed" . mysqli_error());
        }
    }
?>