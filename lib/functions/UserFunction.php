<?php 
include_once("db_conn.php");

function userRegistration($UserName,$UserEmail,$UserPass){

    $db_conn = connection();

    $insertsql = "INSERT INTO user_tbl(user_name,user_email,user_status)
    VALUES ('$UserName','$UserEmail',1);" ; 

    $sqlResult = mysqli_query($db_conn,$insertsql); 

    if (mysqli_connect_errno()){
        echo(mysqli_connect_error());
    }
    //if the registration result is success , we can feed data into the login table also 
    if($sqlResult > 0 ){
        //use MD5 method to our password
        $newPassword = md5($UserPass);
         
        $insertLogin = "INSERT INTO login_tbl(login_email,login_pwd,login_role,login_status) 
        VALUES ('$UserEmail','$newPassword','user',1)" ;

        $loginResult = mysqli_query($db_conn,$insertLogin);

    
        //check database connection errors
        if (mysqli_connect_errno()){
            echo(mysqli_connect_error());
        }

        return("Your Registration Success!!!");
    
}else {
    return("Please Try Again!!!");
}
}

// login function
function Authentication ($Email,$UserPass){
    //call database connection
    $db_conn = connection();

    $sqlFetchUser = "SELECT * FROM login_tbl WHERE login_email = '$Email' ;" ;
    $sqlResult = mysqli_query($db_conn,$sqlFetchUser) ;

    //check database connection errors
    if (mysqli_connect_errno()){
        echo(mysqli_connect_error());
    }

    // convert user password into hash value
    $newPass = md5($UserPass);

    //check the number of the rows
    $norows = mysqli_num_rows($sqlResult);

    //validation the number of records > 0 or not
    if($norows > 0){
        // fetch the user records
        $rec = mysqli_fetch_assoc($sqlResult);

        //validate the password
        if ($rec['login_pwd'] == $newPass){
            //validate the user login status
            if ($rec['login_status'] == 1){
                if ($rec['login_role'] == "admin"){
                    //redirect this user info admin dashboard
                    header('location:lib/views/dashboards/admin.php');
                } else {
                    //redirect this user into the user dashboard
                    header('location:lib/views/dashboards/user.php');
                }
            } else {
                return ("Your Account Has Been Diactivated !");
            }
        } else {
            return ("Your Password Is Not Correct ! Please Try Again !");
        }
    } else {
        return ("No Record Are Found!");
    }
}

?>