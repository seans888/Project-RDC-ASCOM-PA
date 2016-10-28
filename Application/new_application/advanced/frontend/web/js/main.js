/**
 * Created by Caranto on 10/26/2016.
 */
$(function(){

    // add the event to clicked date in the calendar
    $(document).on('click','.fc-day', function(){
        var date = $(this).attr('data-date');

        $.get('index.php?r=event/create', {'date':date}, function (data) {
            $('#modal').modal('show')
            .find('#modalContent')
            .html(data);
        })
    });

    // get the click event of the create button
    $('#modalButton').click(function () {
       $('#modal').modal('show')
           .find('#modalContent')
           .load($(this).attr('value'));
    });
});