$(document).ready(function() {
    let registrationForm = $('.registration__form');
    let loginForm = $('.login__form');

    registrationForm.on('submit', function(e) {
        e.preventDefault();

        let error = '';
        let form = $(this);
        let errorBlock = form.find('.form__errors');
        let successBlock = form.find('.form__success');
        let pass = form.find('.form__pass').val();

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
            url: '/ajax/reg.php',
            success: function(res) {
                res = JSON.parse(res);

                errorBlock.text('');
                successBlock.text('');

                if (res.success) {
                    successBlock.append(res.message);
                    form[0].reset();
                } else {
                    errorBlock.append(res.message);
                }
            }
        });
    });

    loginForm.on('submit', function(e) {
        e.preventDefault();

        let form = $(this);
        let errorBlock = form.find('.form__errors');

        $.ajax({
            method: 'POST',
            data: form.serialize(),
            url: '/ajax/login.php',
            success: function(res) {
                res = JSON.parse(res);

                errorBlock.text('');

                if (res.success) {
                    location.href = '/?auth=y';
                } else {
                    errorBlock.append(res.message);
                }
            }
        });
    });
});
