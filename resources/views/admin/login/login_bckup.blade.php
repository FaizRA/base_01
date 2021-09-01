<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in (v2)</title>
    @include('admin.partial.css')
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="{{url(route('loginProcess'))}}" method="post" id="mainForm">
                {{ csrf_field() }}
                <input type="text" name="action" class="d-none">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <p class="small text-danger text-fail email"></p>
                </div>

                <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <p class="small text-danger text-fail password"></p>
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember" name="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="button" class="btn btn-primary btn-block btn-submit">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


            <!-- /.social-auth-links -->

{{--            <p class="mb-1">--}}
{{--                <a href="forgot-password.html">I forgot my password</a>--}}
{{--            </p>--}}
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->
@include('admin.partial.js')
<script>
    // this is the id of the form
    $(".btn-submit").on('click',function() {
        var form = $('#mainForm');
        var url = form.attr('action');
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
                console.log(data); // show response from the php script.
                $('.text-fail').html('')
                if (data.success===false){
                    for (var i in data.error){
                        $('.text-fail.'+i).html('* '+data.error[i][0])
                    }
                }else {
                    $('input[name="action"]').val('submit')
                    $('#mainForm').submit()
                }
            }
        });
    });

    $('.pass-switcher').on('click',function (){
        var input=$(this).attr('data-target');
        var state=$('input[name="'+input+'"]').attr('type');
        if (state==='password'){
            $('input[name="'+input+'"]').attr('type','text');
            $(this).html('<i class="fas fa-eye"></i>')
        }else {
            $('input[name="'+input+'"]').attr('type','password');
            $(this).html('<i class="fas fa-eye-slash"></i>')

        }
    })
</script>
</body>
</html>
