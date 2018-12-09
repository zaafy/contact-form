/*eslint-env jquery*/

$(document).ready(function() {
    $('#contact-form').submit(function(event) {
        var formData = {
            'name'       : $('#contact-form input[name=name]').val(),
            'email'      : $('#contact-form input[name=email]').val(),
            'subject'    : $('#contact-form input[name=subject]').val(),
            'message'    : $('#contact-form input[name=message]').val()
        };

        $.ajax({
            type        : 'POST',
            url         : 'process.php', // file url
            data        : formData,
            dataType    : 'json', // get back json
            encode      : true
        })

        // .success(function(data) {})
            .done(function(data) {
        
                // test the data
                console.log(data);

                if ( ! data.success) {

                    if (data.errors.name) {
                        $('.name-error').append('<div class="help-block">' + data.errors.name + '</div>');
                    }

                    if (data.errors.email) {
                        $('.email-error').append('<div class="help-block">' + data.errors.email + '</div>');
                    }

                    if (data.errors.subject) {
                        $('.subject-error').append('<div class="help-block">' + data.errors.subject + '</div>');
                    }

                    if (data.errors.message) {
                        $('.message-error').append('<div class="help-block">' + data.errors.message + '</div>');
                    }

                } else {
                    // if everything goes fine
                    $('#contact-form').append('<div class="alert alert-success">' + data.message + '</div>');

                    // window.location = '/thank-you';
                    alert('success');
                }
            });

        // prevent default form submit
        event.preventDefault();
    });
});