
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label>Floor Name:</label>
        <input type="text" name="floor_name" /><br>
        <select>
            <?php
                include('dd_connection.php');
                $floor = mysqli_query($con, "Select * from categories");
                while($c = mysqli_fetch_array($categories)) {
            ?>
            <option value="<?php echo $c['ID']?>"><?php echo $c['Floor'] ?></option>
            <?php } ?>
        </select>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>