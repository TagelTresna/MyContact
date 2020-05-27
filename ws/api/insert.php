<?php

require_once('connection.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    $response = array();
    // Mengambil data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $photo = $_POST['photo'];
    $gender = $_POST['gender'];
    $table_contact = 't_contact';

    //Memeriksa apakah NIM mahasiswa sudah terdaftar atau belum
    $sql = "SELECT * FROM $table_contact WHERE phone_number = '$number'";
    $check = mysqli_fetch_array(mysqli_query($con, $sql));
    if(isset($check)){
        $response["value"] = 0;
        $response["message"] = "Kontak dengan nomor $number sudah terdaftar, silakan lakukan pembaharuan data";
        echo json_encode($response);
    } else {
        $sql = "INSERT INTO $table_contact (first_name, last_name, phone_number, email, photo, gender) VALUES ('$first_name','$last_name','$number','$email','$photo','$gender')";
        if(mysqli_query($con, $sql)) {
            $response["value"] = 1;
            $response["message"] = "Sukses menambahkan kontak baru";
            echo json_encode($response);
        } else {
            $response["value"] = 0;
            $response["message"] = "Gagal menambahkan kontak baru";
            echo json_encode($response);
        }
    }

    //tutup konekasi ke basis data
    mysqli_close($con);
} else {
    $response["value"] = 0;
    $response["message"] = "Pendaftaran kontak baru gagal, silakan coba lagi!";
    echo json_encode($response);
}
?>