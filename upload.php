<?php
// Check if image file is selected
if(isset($_FILES['image'])){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    // Move uploaded file to desired location
    if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
        // Insert image details into database
        $image_name = basename($_FILES["image"]["name"]);
        $sql = "INSERT INTO images (image_name, image_path) VALUES ('$image_name', '$target_file')";
        // Execute SQL query using your preferred database library (e.g., mysqli, PDO)
        // $conn->query($sql);
        echo "Image uploaded successfully.";
    } else{
        echo "Error uploading image.";
    }
}
?>
