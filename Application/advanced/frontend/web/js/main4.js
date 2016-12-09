$(function () {
    $('#modalButton4').click(function () {
        $('#modal4').modal('show')
            .find('#modalContent4')
            .load($(this).attr('value'));
    });
});
