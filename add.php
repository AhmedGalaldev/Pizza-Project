<?php
?>
<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php') ?>
<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="add.php" class="white" method="GET">
        <label >Email : </label>
        <input type="text" name="email">
        <label >Pizza Title : </label>
        <input type="text" name="title">
        <label >Ingredients (comma separeted ):</label>
        <input type="text" name="Ingredients">   
        <div class="center">
        <input type="submit" value="submit" name="submit" class="btn brand z-depth-0">
        </div>             
    </form>
</section>
<?php include('templates/footer.php') ?>

    

</html>