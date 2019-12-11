<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="login-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div id="formWrapper">
                <div id="form">
                    <div class="form-item text-center lead">
                        <h3 class="">Welcome Owner</h3>
                    </div>
                    <div class="form-item custom-separator">
                        <p class="formLabel">Email or phone</p>
                        <input type="email" name="email" id="email" class="form-style" value="{{ old('email') }}" autocomplete="off"/>
                        <small class="email-error"></small>
                    </div>

                    <div class="form-item">
                        <p class="formLabel">Password</p>
                        <input type="password" name="password" id="password" class="form-style" />
                        <small class="password-error"></small>
                    </div>
                    <div class="form-item">
                        <label class="forgotPassword" for="forgotPassword">
                            <input type="checkbox" id="forgotPassword" name="forgo_password">
                            Remember password?
                        </label>
                    </div>
                    <div class="form-item">
                        <input class="submitButton" type="submit" name="" value="Sign In">
                    </div>
                </div>
            </div>
        </form>
    </div>

<script src="{{ asset('back_end/plugins/jquery/jquery.js') }}"></script>
<script>
    $(document).ready(function(){
        var formInputs = $('input[type="email"],input[type="password"]');
        formInputs.focus(function() {
            $(this).parent().children('p.formLabel').addClass('formTop');
            $('div#formWrapper').addClass('darken-bg');
            $('div.logo').addClass('logo-active');
        });
        formInputs.focusout(function() {
            if ($.trim($(this).val()).length == 0){
                $(this).parent().children('p.formLabel').removeClass('formTop');
            }
            $('div#formWrapper').removeClass('darken-bg');
            $('div.logo').removeClass('logo-active');
        });
        $('p.formLabel').click(function(){
            $(this).parent().children('.form-style').focus();
        });
    });
</script>
</body>
</html>
