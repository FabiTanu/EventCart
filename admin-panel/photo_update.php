<?php
include 'config/dbconn.php';

$id = $_GET['id'];


$insert = "SELECT * FROM gallery WHERE id='$id' ";
$result = mysqli_query($connection, $insert);

$row = mysqli_fetch_assoc($result);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Photo Details</title>

    <!-- bootstraop cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>



    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Update Photo Details:</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Photo Name:</label>
                        <input type="text" name="Pname" class="form-control" value="<?php echo $row['name'] ?>"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Title:</label>
                        <input type="text" name="Ptitle" class="form-control" value="<?php echo $row['title'] ?>"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image Preview:</label>
                        <img src="<?php echo $row['image']; ?>" height="100"><br>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Add Image:</label>
                        <input class="form-control" name="image" type="file" id="formFile">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Select Photo Category</label>
                        <select class="form-select" name="Pages" value="<?php echo $row['category'] ?>">
                            <option value="Wedding">Wedding</option>
                            <option value="Birthday">Birthday</option>
                            <option value="Corporate">Corporate</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <button name="update" value="update"
                        class="bg-danger fs-4 fw-bold my-3 form-control text-white">Update</button>
                </form>
            </div>
        </div>
    </div>



    <!-- bootstraop js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>


<?php


if (isset($_POST['update'])) {

    $photo_name = $_POST['Pname'];
    $title = $_POST['Ptitle'];
    $photo_image = $_FILES['image'];
    $photo_category = $_POST['Pages'];

    $image_loc = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $img_des = "Uploadimage/" . $image_name;
    move_uploaded_file($image_loc, "Uploadimage/" . $image_name);


    $insert = "UPDATE gallery SET `name`=' $photo_name',`title`='$title', `image`='$img_des',`category`='$photo_category' WHERE id=$id";

    $query = mysqli_query($connection, $insert);

    if (!$query) {
        // echo "<script> alert('not inserted!!')</script>";
        echo "<script> location.href = 'user_update.php'</script>";

    } else {
        //  echo "<script> alert('SUCCESSFULLY Updated')</script>";
        echo "<script> location.href = 'photo_gallery.php'</script>";

    }
}



?>