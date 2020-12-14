$(document).ready(function() {
    let registrationForm = $('.registration__form');
    let loginForm = $('.login__form');
    let logoutBtn = $('.logout');

    registrationForm.on('submit', function(e) {
        e.preventDefault();

        let error = '';
        let form = $(this);
        let formData = new FormData(this);
        let errorBlock = form.find('.form__errors');
        let successBlock = form.find('.form__success');
        let pass = form.find('.form__pass').val();
        let files = form.find('.form__file')[0].files;

        if (pass.length < 6) {
            error = 'Пароль должен быть больше 6 символов';
        }

        if (error.length) {
            errorBlock.text('');
            errorBlock.append(error);
            
            return false;
        }

        if (files.length) {
            $(files).each(function(i) {
                formData.append('FILES[]', files[i]);
            });
        }

        $.ajax({
            method: 'POST',
            data: formData,
            url: '/ajax/reg.php',
            processData: false,
            contentType: false,
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
                    location.href = '/';
                } else {
                    errorBlock.append(res.message);
                }
            }
        });
    });

    logoutBtn.on('click', function (e) {
        e.preventDefault();

        $.ajax({
            method: 'POST',
            url: '/ajax/logout.php',
            success: function(res) {
                location.href = '/';
            }
        });
    });
});
