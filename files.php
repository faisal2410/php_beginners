<?php
// In PHP, $_FILES is a superglobal variable that contains information about files that are uploaded to the server via an HTTP POST request. It is used to handle file uploads in a web application.

// Here is an example that demonstrates how to use $_FILES to upload a file:


// <form method="post" action="upload_file.php" enctype="multipart/form-data">
//     <label for="file">Choose file to upload:</label>
//     <input type="file" id="file" name="file">
//     <input type="submit" value="Upload">
// </form>



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    // process uploaded file...
}
// In the above example, we use a form to allow the user to choose a file to upload. We set the enctype attribute of the form to "multipart/form-data" to allow file uploads. In the PHP script that handles the file upload, we check if the REQUEST_METHOD is POST, and if it is, we use the $_FILES variable to retrieve the uploaded file and move it to a target directory for further processing.

// Real-life use cases for $_FILES include:

// Uploading images and videos: $_FILES can be used to handle image and video uploads in a web application. For example, we can allow users to upload images and videos to the server to share with other users:

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    // create new post with image or video...
}

// Uploading documents: $_FILES can also be used to handle document uploads in a web application. For example, we can allow users to upload documents such as PDFs or Word files to the server for others to download:

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    // add new document to the website for download...
}
// User profile pictures: $_FILES can be used to handle user profile pictures in a web application. For example, we can allow users to upload a profile picture that is displayed on their user profile:

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    // update user profile picture...
}

// In summary, $_FILES is a superglobal variable in PHP that is used to handle file uploads in a web application. It is commonly used for uploading images, videos, documents, and user profile pictures. However, because it is used to handle sensitive data, it is important to use it carefully and validate user input to prevent security vulnerabilities such as file inclusion attacks.



