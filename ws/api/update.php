<?php

require_once('connection.php');

if($_SERVER['REQUEST_METHOD']=='POST') {
    $response = array();
    // Mengambil data
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $photo = $_POST['photo'];
    $gender = $_POST['gender'];
    $table_contact = 't_contact';

    $sql = "UPDATE $table_contact SET first_name = '$first_name', last_name = '$last_name', phone_number='$number', email = '$email', photo = '$photo', gender='$gender' WHERE id = '$id'";
    if(mysqli_query($con, $sql)) {
        $response['value'] = 1;
        $response['message'] = "Data kontak berhasil diperbaharui";
        echo json_encode($response);
    } else {
        $response['value'] = 0;
        $response['message'] = "Data kontak gagal diperbaharui!!!";
        echo json_encode($response);
    }
    mysqli_close($con);
} else {
    $response['value'] = 0;
    $response['message'] = "Pembaharuan data kontak gagal, silakan coba kembali!";
    echo json_encode($response);
}
?>