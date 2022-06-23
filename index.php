<?php
include_once "inc/base.php";

?>

<div class="row">
    <div class="col"></div>
    <div class="col-4">
        <div class="d-flex justify-content-center m-5">
            <ul class="list-group list-group-flush fs-3">
                <?php ?>
                <li class="list-group-item"></li>
            </ul>
        </div>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" class="">
            <div class="text-start mb-3 fs-3">
                <label for="quantity" class="form-label">Enter quantity: </label>
                <input type="number" name="quantity" id="quantity" class="form-control fs-4">
            </div>
            <div class="text-center p-3">
                <input type="submit" class="btn btn-success fs-4" value="Generate Recipe">
            </div>
        </form>
    </div>
    <div class="col"></div>
</div>

<?php include_once "inc/footer.php"; ?>