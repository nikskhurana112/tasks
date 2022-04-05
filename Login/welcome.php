<?php
session_start();
if( isset($_SESSION['username']) == false)
{
    header("Location:form.php");
    exit;
}
?>
<h1>Welcome <?php echo $_SESSION['username']; ?> </h1>

<form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control"> <br>
        <label for="">Photo</label>
        <input type="file" name="photo" accept="image/png, image/gif, image/jpeg" class="form-control"> <br>
        <button class="btn">Submit  </button>

</form>