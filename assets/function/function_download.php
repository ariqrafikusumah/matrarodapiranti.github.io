<?php

// Downloads files
if (isset($_GET['file'])) {
    $id = $_GET['file'];

    // fetch file to download from database
    $query = "SELECT * FROM files WHERE id=$id";
    $result = mysqli_query($koneksi, $query);

    $file = mysqli_fetch_assoc($result);
    $filepath = '../uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('../uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE file SET downloads=$newCount WHERE id=$id";
        mysqli_query($koneksi, $updateQuery);
        exit;
    }

}