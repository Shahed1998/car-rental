<div class="container d-none dashAbout d-flex align-items-center justify-content-center min-vh-100">
    <div class="mt-5">
        <h1 class="text-center">About</h1>
        <form action="" method="post">

            <label for="heading">Heading</label><br>
            <input
             type="text" name="heading" id="heading" class="w-100 p-2"
             value="<?= $_SESSION['heading']?>"><br>

            <label for="sub_heading">Sub heading points</label><br>
            <?php
                foreach($_SESSION["sub_heading"] as $key=>$value){
                    echo "
                    <input type='text' id='sub_heading $key' name='sub_heading' class='w-100 p-2'
                    value='$value'><br/>";
                }
            ?>

            <label for="description">Description</label><br>
            <textarea name="description" id="description" cols="30" rows="5" class="p-2 w-100"><?= $_SESSION["description"] ?></textarea><br>

            <label class="form-label" for="customFile">Input image</label>
            <input type="file" class="form-control" id="customFile" /> 

            <input type="submit" class="btn btn-primary w-100 p-3" value="Update">
        </form>
    </div>
</div>