$(function () {
    var mark_name = $(".js-select-mark").val();
    $.ajax({
        type: 'POST',
        url: 'command.php',
        data: {mark_name: mark_name},
        success: function (data) {
            $(".model").html(data);
        }
    });
    $(".js-select-mark").change(function () {
        var mark_name = $(".js-select-mark").val();
        if (mark_name == 0) {

        }
        $.ajax({
            type: 'POST',
            url: 'command.php',
            data: {mark_name: mark_name},
            success: function (data) {
                $(".model").html(data);
            }
        });
    });
});