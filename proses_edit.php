<?php
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $program_studi = $_POST['program_studi'];
    $palamat_domisili = $_POST['alamat_domisili'];

    $update_query = "UPDATE data_mahasiswa SET nama = '$nama', program_studi = '$program_studi', alamat_domisili = '$alamat_domisili' WHERE nim = '$nim'";
    $result = mysqli_query($conn, $update_query);

    if ($result) {
        echo '<script>alert("Data berhasil dirubah.");</script>';
        echo '<script>window.location.href = "index.html";</script>';
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else {
    header("Location: index.html");
    exit();
}
?>
