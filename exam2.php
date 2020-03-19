<!DOCTYPE html>
<html>
    <body>
        <h1>MidTerm php connect&display</h1>
            
<?php
    $conid = mysqli_connect("localhost", "root", "", "books")
        or die ("Cannot connect. " . mysqli_connect_errno() . " ".
        mysqli_connect_error());

            echo "Connected. ". mysqli_get_host_info($conid). "<br />". "<br />";
            $result = mysqli_query($conid, $query);

            if(!$result){

                echo "Connection Failed. " . mysqli_error($conid);
            } else {
                echo "Query successful.";
            }

            mysqli_free_result($result);
            mysqli_close($conid);
            ?>