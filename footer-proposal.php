<?php
 $valid = TRUE;
 if (isset($_POST['action']) && $_POST['action'] == 'footer-submit') {
    switch (true) {
        case (!filter_var($_POST['footer-email'], FILTER_VALIDATE_EMAIL)):
            echo "Invalid email format";
            $valid = FALSE;
            exit;
            break;
        default:
           $email = htmlentities(htmlspecialchars($_POST['footer-email']));
            //$stu_firstname = db_Input_Secure($db_conn,'stu_firstname');
            //$stu_firstname = nameChecker($stu_firstname);
            break;
    } 

    if (TRUE == $valid) {
        echo $email;
    }
}