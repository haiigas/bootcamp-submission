// subscribe sweet alert
$(document).on('click', '.subscribe', function () {
    Swal.fire(
        'Success',
        'Thanks for subscribing!',
        'success'
    );
    return false;
});

// contact send message
$(document).on('click', '.send-message', function () {
    Swal.fire(
        'Success',
        'Thanks for your message!',
        'success'
    );
    return false;
});