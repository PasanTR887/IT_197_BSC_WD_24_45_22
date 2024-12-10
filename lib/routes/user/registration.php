<?php

include_once('../../functions/UserFunction.php');

$result = userRegistration($_POST['UserName'],$_POST['UserEmail'],$_POST['UserPass']);

        echo($result);
?>