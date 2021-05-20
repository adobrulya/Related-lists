<script>
    $(function(){
        $('select[name="command"]').change(function(){
           alert($('select[name="command"]').val());
            //console.log("!");
        });
    });
</script>
<?php
require_once 'db.php';
//$counter = 0;
if (isset($_POST['id']) && !empty($_POST['id']))
{
    //$id = intval($_POST['id']);
    $id = $_POST['id'];

    //echo "id=".$id;
    $query = $db->query("SELECT * FROM `team` WHERE `id_league` = $id");
    //print_r($query);
    echo "<select name='command'>";

    while ($row = $query->fetch())
    {//$counter++;
        echo "<option>{$row->title}</option>";
    }
    echo "</select>";
    //echo "counter=".$counter;
}
else
{
    echo "<select name='command' disabled><option value='0'>--Выберите команду--</option></select>";
}

?>