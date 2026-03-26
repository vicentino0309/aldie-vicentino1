<?php
session_start();
?>

<form method="POST" action="process_predict.php">
    Age: <input type="number" name="age"><br>
    BP: <input type="number" name="bp"><br>
    Sugar: <input type="number" name="sugar"><br>
    <button type="submit">Predict</button>
</form>