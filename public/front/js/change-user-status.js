$('#change-status').on('submit', function(e) {
    e.preventDefault();
    $.post($(this).attr('action'), $(this).serialize(), function(data) {
        console.log(data);
         $('#status-button').html(data);
    });
});