<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Checkbox</title>
</head>
<body>
    
    <form action="" method="POST">
        <h2>Pilih Mata Kuliah Favorit Anda:</h2>
        <input type="checkbox" name="mk1" value="Matematika" checked> Matematika <br>
        <input type="checkbox" name="mk2" value="RPL"> RPL <br> 
        <input type="checkbox" name="mk3" value="Jarkom"> Jarkom <br> 
        <input type="checkbox" name="mk4" value="Java"> Java <br> 
        <input type="checkbox" name="mk5" value="Web"> Web <br> 
        <input type="submit" name="Pilih" value="Pilih">
    </form>

<?php 
if (isset($_POST['Pilih'])) {
    echo "Mata Kuliah Favorit Anda Adalah: <br>";
    
    if (isset($_POST['mk1'])) {
        echo "+ " . $_POST['mk1'] . "<br>";
    }
    
    if (isset($_POST['mk2'])) {
        echo "+ " . $_POST['mk2'] . "<br>";
    }

    if (isset($_POST['mk3'])) {
        echo "+ " . $_POST['mk3'] . "<br>";
    }

    if (isset($_POST['mk4'])) {
        echo "+ " . $_POST['mk4'] . "<br>";
    }

    if (isset($_POST['mk5'])) {
        echo "+ " . $_POST['mk5'] . "<br>";
    }
}
?>
</body>
</html>
