<!--   Core JS Files   -->
<script src="{{URL::asset('md_assets/js/core/jquery.min.js')}}"></script>
<script src="{{URL::asset('md_assets/js/core/popper.min.js')}}"></script>
<script src="{{URL::asset('md_assets/js/core/bootstrap-material-design.min.js')}}"></script>
<script src="{{URL::asset('md_assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!-- Plugin for the momentJs  -->
<script src="{{URL::asset('md_assets/js/plugins/moment.min.js')}}"></script>
<!--  Plugin for Sweet Alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!--  Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
{{--<script src="{{URL::asset('md_assets/js/plugins/sweetalert2.js')}}"></script>--}}
{{--<!-- Forms Validations Plugin -->--}}
{{--<script src="{{URL::asset('md_assets/js/plugins/jquery.validate.min.js')}}"></script>--}}
{{--<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->--}}
{{--<script src="{{URL::asset('md_assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>--}}
{{--<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->--}}
{{--<script src="{{URL::asset('md_assets/js/plugins/bootstrap-selectpicker.js')}}"></script>--}}
{{--<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->--}}
{{--<script src="{{URL::asset('md_assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>--}}
{{--<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->--}}
{{--<script src="{{URL::asset('md_assets/js/plugins/jquery.dataTables.min.js')}}"></script>--}}
{{--<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->--}}
{{--<script src="{{URL::asset('md_assets/js/plugins/bootstrap-tagsinput.js')}}"></script>--}}
{{--<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->--}}
{{--<script src="{{URL::asset('md_assets/js/plugins/jasny-bootstrap.min.js')}}"></script>--}}
{{--<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->--}}
{{--<script src="{{URL::asset('md_assets/js/plugins/fullcalendar.min.js')}}"></script>--}}
{{--<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->--}}
{{--<script src="{{URL::asset('md_assets/js/plugins/jquery-jvectormap.js')}}"></script>--}}
{{--<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->--}}
{{--<script src="{{URL::asset('md_assets/js/plugins/nouislider.min.js')}}"></script>--}}
{{--<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>--}}
{{--<!-- Library for adding dinamically elements -->--}}
{{--<script src="{{URL::asset('md_assets/js/plugins/arrive.min.js')}}"></script>--}}
<!-- Chartist JS -->
<script src="{{URL::asset('md_assets/js/plugins/chartist.min.js')}}"></script>
<script src="https://unpkg.com/chartist-plugin-tooltips@0.0.17"></script>
<script src="https://unpkg.com/chartist-plugin-pointlabels@0.0.6"></script>
<!--  Notifications Plugin    -->
<script src="{{URL::asset('md_assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{URL::asset('md_assets/js/material-dashboard.js?v=2.1.2')}}" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $().ready(function() {
            $sidebar = $('.sidebar');

            $sidebar_img_container = $sidebar.find('.sidebar-background');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                    $('.fixed-plugin .dropdown').addClass('open');
                }

            }

            $('.fixed-plugin a').click(function(event) {
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .active-color span').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-color', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data-color', new_color);
                }
            });

            $('.fixed-plugin .background-color .badge').click(function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('background-color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-background-color', new_color);
                }
            });

            $('.fixed-plugin .img-holder').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');


                var new_image = $(this).find("img").attr('src');

                if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    $sidebar_img_container.fadeOut('fast', function() {
                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $sidebar_img_container.fadeIn('fast');
                    });
                }

                if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $full_page_background.fadeOut('fast', function() {
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                        $full_page_background.fadeIn('fast');
                    });
                }

                if ($('.switch-sidebar-image input:checked').length == 0) {
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                }
            });

            $('.switch-sidebar-image input').change(function() {
                $full_page_background = $('.full-page-background');

                $input = $(this);

                if ($input.is(':checked')) {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar_img_container.fadeIn('fast');
                        $sidebar.attr('data-image', '#');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page_background.fadeIn('fast');
                        $full_page.attr('data-image', '#');
                    }

                    background_image = true;
                } else {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar.removeAttr('data-image');
                        $sidebar_img_container.fadeOut('fast');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page.removeAttr('data-image', '#');
                        $full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                }
            });

            $('.switch-sidebar-mini input').change(function() {
                $body = $('body');

                $input = $(this);

                if (md.misc.sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                } else {

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                    setTimeout(function() {
                        $('body').addClass('sidebar-mini');

                        md.misc.sidebar_mini_active = true;
                    }, 300);
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);

            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();

    });
</script>
{{--Xyz CHeck--}}
<script>
    /*xyz_check_container*/
    /*click handler*/
    function init_xyz_check(){
        $(document).on('click','.xyz_check_container',function (){
            var xyz_input=$(this).find('input');
            var xyz_input_name=xyz_input.attr('name')
            var xyz_input_value=xyz_input.attr('value')
            var xyz_input_siblings=$('input[name="'+xyz_input_name+'"]');
            var xyz_input_type=xyz_input.attr('type')
            // console.log(xyz_input_name)
            // console.log(xyz_input_value)
            // console.log(xyz_input_type)

            var xyz_result={
                name:xyz_input_name,
                checked_values:{}
            }
            var xyz_val_arr=[];

            if (xyz_input_type==='radio'){
                /*uncheck siblings*/
                xyz_input_siblings.prop('checked',false)

                /*check this*/
                xyz_input.prop('checked',true)

                /*giv status for container*/
                xyz_input_siblings.each(function(i, obj) {
                    var cur_val = $(this).val()
                    // console.log(i)
                    // console.log(obj)
                    // console.log(cur_val)
                    var is_checked_2=$(this).is(':checked');
                    // console.log('after')
                    // console.log(is_checked_2)
                    if (is_checked_2){
                        $(this).parent().addClass('checked')
                        xyz_val_arr.push($(this).val())
                    }else {
                        $(this).parent().removeClass('checked')
                    }
                });
            }else if (xyz_input_type==='checkbox'){
                /*decide for itself*/
                var is_checked_1=xyz_input.is(':checked');
                // console.log('before')
                // console.log(is_checked_1)
                if (is_checked_1){
                    xyz_input.prop('checked',false)
                }else {
                    xyz_input.prop('checked',true)
                }
                /*giv status for container*/
                xyz_input_siblings.each(function(i, obj) {
                    var cur_val = $(this).val()
                    // console.log(i)
                    // console.log(obj)
                    // console.log(cur_val)
                    var is_checked_2=$(this).is(':checked');
                    // console.log('after')
                    // console.log(is_checked_2)
                    if (is_checked_2){
                        $(this).parent().addClass('checked')
                        xyz_val_arr.push($(this).val())
                    }else {
                        $(this).parent().removeClass('checked')
                    }
                });
            }
            xyz_result['checked_values']=xyz_val_arr;
            // console.log(xyz_result)
            xyz_input.trigger('change')
        })
        /**Prepare Checked*/
        // console.log('counts')
        // console.log($('.xyz_check_container').length)
        $('.xyz_check_container').each(function(i, obj) {
            var xyz_input = $(this).find('input')
            var is_checked_2=xyz_input.is(':checked');
            if (is_checked_2){
                xyz_input.parent().addClass('checked')
            }else {
                xyz_input.parent().removeClass('checked')
            }
        });

        $(document).on('change','.xyz_check_container input',function (){
            var is_checked_2=$(this).is(':checked');
            if (is_checked_2){
                $(this).parent().addClass('checked')
            }else {
                $(this).parent().removeClass('checked')
            }
        })
    }


    $(document).ready(function (){
        init_xyz_check()
    })

</script>
