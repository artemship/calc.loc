<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Связанные списки</title>
    <!-- подключаем jquery -->
    <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        $(function () {
            var id = $(".league").val();
            $.ajax({
                type: 'POST',
                url: 'command.php',
                data: {id: id},
                success: function (data) {
                    $(".command").html(data);
                }
            });
            $(".league").change(function () {
                var id = $(".league").val();
                if (id == 0) {

                }
                $.ajax({
                    type: 'POST',
                    url: 'command.php',
                    data: {id: id},
                    success: function (data) {
                        $(".command").html(data);
                    }
                });
            });
        });
    </script>
</head>
<body>
<!--<form action="/index.php" method="post">-->
<!--    <label for="colorField">Выберите цвет футболки:</label>-->
<!--    <select name="color" id="colorField">-->
<!--        <option value="red">Красная</option>-->
<!--        <option value="blue">Синяя</option>-->
<!--        <option value="green">Зелёная</option>-->
<!--    </select>-->
<!--    <input type="submit" value="Отправить">-->
<!--</form>-->
<!--<br>-->

<select size="1" class="league">
    <option value="0">--Выбрать лигу--</option>
    <?php
    use Calc\Services\Db;
    $db = Db::getInstance();
    $entities = $db->query(
        'SELECT * FROM `league`');
    foreach ($entities as $entity) {
        echo '<option value="' . $entity->id . '">' . $entity->title . '</option>';
    }
    ?>
</select>
<span class="command">

</span>


</body>
</html>