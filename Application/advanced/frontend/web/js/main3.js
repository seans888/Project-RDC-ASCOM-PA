$(function () {
    $('#modalButton3').click(function () {
        $('#modal3').modal('show')
            .find('#modalContent3')
            .load($(this).attr('value'));
    });
});