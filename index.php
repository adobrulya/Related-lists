<?php
require_once 'db.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <title>Связанные списки</title>
</head>
<body>
<select class="league">
    <option value="0">--Выбрать лигу--</option>
    <?php
        $query = $db->query("SELECT * FROM `league`");
        while ($row = $query->fetch())
        {
            echo "<option value='($row->id)'>".$row->title."</option>";
        }
    ?>
</select>

</body>
</html>
