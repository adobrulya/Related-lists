<script>
    $(function(){
        $('select[name="command"]').change(function(){
           alert($('select[name="command"]').val());
        });
    });
</script>
<?php
require_once 'db.php';
if (isset($_POST['id']) && !empty($_POST['id']))
{
    $id = intval($_POST['id']);
    $query = $db->query("SELECT * FROM `team` WHERE `id_league` = $id");
    echo "<select name='command'>";
    while ($row = $query->fetch())
    {
        echo "<option>{$row->title}</option>";
    }
    echo "</select>";
}
else
{
    echo "<select name='command' disabled><option value='0'>--Выберите команду--</option></select>";
}
?>