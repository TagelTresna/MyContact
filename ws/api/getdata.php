<?php

require_once ('connection.php');

if($_SERVER['REQUEST_METHOD']=='GET') {
    $sql = "SELECT * FROM t_contact ORDER BY first_name ASC";
    $res = mysqli_query($con, $sql);
    $result = array();
    while($row = mysqli_fetch_array($res)) {
        array_push($result, array('id'=>$row[0], 'first_name'=>$row[1], 'last_name'=>$row[2], 'number'=>$row[3], 'email'=>$row[4], 'photo'=>$row[5], 'gender'=>$row[6]));
    }
    echo json_encode(array("value"=>1, "result"=>$result));
    mysqli_close($con);
}
?>