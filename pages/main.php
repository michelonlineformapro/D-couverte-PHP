<form action="pages/function.php" method="post">
    <input type="text" class="form-control" placeholder="test"/>
    <button type="submit" name="bouton" class="btn btn-danger">Lance une fonction</button>
</form>


<?php
    if(isset($_POST['bouton'])){
        function afficher(){
            echo "<p class='alert alert-success'>Ca MARCHE</p>";
        }
        afficher();
    }
?>





