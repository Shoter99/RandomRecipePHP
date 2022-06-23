<?php
include_once "/RandomRecipePHP/utils/connect.php";
include_once "/RandomRecipePHP/inc/base.php";

if (isset($_GET['name'])) {
    $name = filter_input(INPUT_GET, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $sql = "INSERT INTO ingredients (name) VALUES ('$name')";

    if (mysqli_query($conn, $sql) !== TRUE) {
        echo "Error while adding itemd";
    }
}

?>
<div class="row">
    <div class="col"></div>
    <div class="col-4">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="container p-3 form">
            <div>
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="text-center">
                <input type="submit" value="Add" class="btn btn-primary m-3">
            </div>
        </form>
    </div>
    <div class="col"></div>
</div>