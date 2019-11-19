$(function () {
    var mark = $(".js-select-mark").val();
    $.ajax({
        type: 'POST',
        url: 'command.php',
        data: {mark: mark},
        success: function (data) {
            $(".model").html(data);
        }
    });
    $(".js-select-mark").change(function () {
        var mark = $(".js-select-mark").val();
        if (mark == 0) {

        }
        $.ajax({
            type: 'POST',
            url: 'command.php',
            data: {mark: mark},
            success: function (data) {
                $(".model").html(data);
            }
        });
    });
});