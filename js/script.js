$(document).ready(function() {
    let registrationForm = $('.registration__form');

    registrationForm.on('submit', function(e) {
        e.preventDefault();

        let error = '';
        let form = $(this);
        let errorBlock = form.find('.registration__errors');
        let successBlock = form.find('.registration__success');
        let pass = form.find('.registration__pass').val();

        if (pass.length < 6) {
            error = 'Пароль должен быть больше 6 символов';
        }

        if (error.length) {
            errorBlock.text('');
            errorBlock.append(error);
            
            return false;
        }

        $.ajax({
            method: 'POST',
            data: form.serialize(),
            url: '/userAuth/ajax/userReg.php',
            success: function(res) {
                res = JSON.parse(res);

                if (res.error) {
                    errorBlock.text('');
                    errorBlock.append(res.message);
                } else if (res.success) {
                    errorBlock.text('');
                    successBlock.text('');
                    successBlock.append(res.message);
                    form[0].reset();
                }
            }
        });        
    });
});
