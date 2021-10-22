// $('#book-ticket').on('submit', function(e) {
//     e.preventDefault();
//     $.post($(this).attr('action'), $(this).serialize(), function(data, err) {
//         console.log(err);
//         $('#book-ticket').append(`<p style="color:rgba(255, 255, 255, 0.5);">${ data }</p>`)
//     }).fail(
//         function(da) {
//             console.log(da.responseJSON.errors.service_id[0]);
//             $('.error').append(da.responseJSON.errors.service_id[0])
//          });
// });
