<?php

require_once('connection.php');

if($_SERVER['REQUEST_METHOD']=='POST') {
    $response = array();
    $id = $_POST['id'];
    $table_contact = 't_contact';

    $sql = "DELETE FROM $table_contact WHERE id = '$id'";
    if(mysqli_query($con, $sql)) {
        $response['value'] = 1;
        $response['message'] = "Data kontak berhasil dihapus";
        echo json_encode($response);
    } else {
        $response['value'] = 0;
        $response['message'] = "Data kontak gagal dihapus!!!";
        echo json_encode($response);
    }
    mysqli_close($con);
}else {
    $response['value'] = 0;
    $response['message'] = "Penghapusan data kontak gagal, silakan coba kembali!";
    echo json_encode($response);
}
?>