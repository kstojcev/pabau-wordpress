$(function() {
    let submit = $('#submit_btn');

    submit.on('click', function (e) {
        e.preventDefault();

        let contact_info = {
            name: $("#first_name").val(),
            surname: $("#last_name").val(),
            email: $("#email").val(),
            password: $("#phone").val(),
            destination: $('#destination').find(":selected").text(),
        }
        
        $.ajax({
            url: "/recruitment.pabau.me",
            type: "POST",
            headers: { APIKey : 'MTAwNjc06c939651250603f2137b69c2e172c47'},
            data: contact_info,
            success: function () {
                $("#form_notification").text('You have successfully booked your destination, please check your e-mail for more information')
            },
            error: function (error) {
                console.error(error);
            },
        });
    })

})