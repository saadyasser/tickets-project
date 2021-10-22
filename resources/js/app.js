require('./bootstrap');

require('alpinejs');
window.Echo.channel(`tickets.${ ticketId }`)
.listen('.ticket.created', function(event) {
        alert('your service in proccesing');
});
$('#book-ticket').on('submit', function(e) {
        e.preventDefault();
        $.post($(this).attr('action'), $(this).serialize(), function(data, err) {
            $('#book-ticket').append(`<p style="color:rgba(255, 255, 255, 0.5);">${ data }</p>`);
            $.get("http://127.0.0.1:8000/get-num", function( num ) {
                alert(data);

    
      });
        }).fail(
            function(da) {
                console.log(da.responseJSON.errors.service_id[0]);
                $('.error').append(da.responseJSON.errors.service_id[0])
             });
    });
