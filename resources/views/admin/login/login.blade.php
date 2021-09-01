<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in (v2)</title>
    @include('admin.partial.css')
    <style>
        .login .panel{
            height: 100vh;
        }
        .the_bg{
            /* The image used */
            background-image: url("{{assetLink('assets/image/login_panel_bg.jpg')}}");
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        @media only screen and (max-width: 768px) {
            .the_login_panel {
                position: absolute;
                height: 100vh;
                background-color: rgb(0,0,0,0) !important;
            }
            .the_login_panel .the_container {
                background-color: rgb(255 255 255 / 90%) !important;
                padding: 40px 0 50px 0;
                max-width: 90%;
                border-radius: 20px 20px 20px 20px;
            }
        }
    </style>
</head>
<body class="bg-dark">
    <div class="container-fluid m-0 p-0" style="height: 100vh;overflow: hidden">
        <div class="row login p-0 m-0 position-relative">
            <div class="col-lg-9 col-md-7 col-12 panel the_bg bg-dark"></div>
            <div class="col-lg-3 col-md-5 panel the_login_panel bg-light text-dark d-flex p-0">
                <div class="m-auto the_container">
                    <div class="text-center">
                        <h4 class="font-weight-bold head_text">Admin Login Panel</h4>
                    </div>
                    <div class="row mt-5 px-5">
                        <div class="col-md-12 my-2">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">E-Mail</label>
                                <input type="text" class="form-control" name="label" value="{{$query1->label ?? null}}">
                            </div>
                        </div>
                        <div class="col-md-12 my-2">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Password</label>
                                <input type="text" class="form-control" name="shipper_name" value="{{$query1->shipper_name ?? null}}">
                            </div>
                        </div>
                        <div class="col-md-12 my-2">
                            <div class="form-group">
                                <div class="xyz_check_container" style="border: 0!important;padding: 0 !important;">
                                    <i class="xyz_checked"></i>
                                    <i class="xyz_un_checked"></i>
                                    <label>Remember Me</label>
                                    <input type="checkbox" name="is_primary" value="1">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 text-right">
                            <button type="button" class="btn btn-primary btn-block btn-lg">
                                Login
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- /.login-box -->
@include('admin.partial.js')
@include('admin.partial.js-2')
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
