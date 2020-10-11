$(document).ready(function() {
    let registrationForm = $('.registration__form');

    registrationForm.on('submit', function(e) {
        e.preventDefault();

        let error = '';
        let form = $(this);
        let errorBlock = form.find('.registration__errors');
        let pass = form.find('.registration__pass').val();

        if (pass.length < 6) {
            error = 'Пароль должен быть больше 6 символов';
        }

        if (error.length) {
            errorBlock.append(error);
            
            return false;
        }

        $.ajax({
            method: 'POST',
            data: form.serialize(),
            url: '/userAuth/ajax/userReg.php',
            success: function(res) {
                console.log(res);
            }
        });        
    });
});
