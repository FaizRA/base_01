{{--MyOWN--}}
<script>
    $(document).ready(function (){
        re_init_sidebar_menu();
    });
    $('.sidebard_parent_menu').on('click',function (){
        var parent_name=$(this).data('parent_name');
        var state=$(this).data('state');

        var newSTate=0;
        if (state===0){
            newSTate=1;
        }
        $(this).data('state',newSTate);
        re_init_sidebar_menu()
    })
    function re_init_sidebar_menu(){
        $('.sidebard_parent_menu').each(function( index ) {
            var parent_name=$(this).data('parent_name');
            var state=$(this).data('state');
            var indicator_close='<span class="material-icons indicator">expand_more </span>';
            var indicator_open='<span class="material-icons indicator">expand_less </span>';


            if (state===1){
                $('.sidebard_child_menu.child_menu_of_'+parent_name).css('display','block')
                $(this).find('.indicator').html(indicator_open)
            }else {
                $('.sidebard_child_menu.child_menu_of_'+parent_name).css('display','none')
                $(this).find('.indicator').html(indicator_close)
            }
        });
    }

    function init_sidebar_active(className){
        $('.'+className).parent().addClass('active')
        var elem=$('.'+className);
        var parent_name=elem.parent().data('parent_name');
        var parent_elem=$('.sidebard_parent_menu.parent_of_group_'+parent_name)
        parent_elem.data('state',1);
        re_init_sidebar_menu()
        console.log(parent_name)
    }

</script>
<script>
    $(document).ready(function (){
        $('.card-table-v1 th').each(function (){
            var dataSort=$(this).data('sort')
            var order_by=$('#card-table-form input[name="order_by"]').val()
            var order_direction=$('#card-table-form input[name="order_direction"]').val()

            var blank=' <svg xmlns="http://www.w3.org/2000/svg" class="icon material-icons" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 9l4 -4l4 4m-4 -4v14" /><path d="M21 15l-4 4l-4 -4m4 4v-14" /></svg>';
            var asc='<svg xmlns="http://www.w3.org/2000/svg" class="icon material-icons" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="6" x2="11" y2="6" /><line x1="4" y1="12" x2="11" y2="12" /><line x1="4" y1="18" x2="13" y2="18" /><polyline points="15 9 18 6 21 9" /><line x1="18" y1="6" x2="18" y2="18" /></svg>';
            var desc=' <svg xmlns="http://www.w3.org/2000/svg" class="icon material-icons" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="6" x2="13" y2="6" /><line x1="4" y1="12" x2="11" y2="12" /><line x1="4" y1="18" x2="11" y2="18" /><polyline points="15 15 18 18 21 15" /><line x1="18" y1="6" x2="18" y2="18" /></svg>';


            if (dataSort!==undefined){

                var sort_by_text=$(this).data('sort_by_text');
                if (sort_by_text===undefined){
                    sort_by_text=$(this).text()
                }
                var title = 'Klik untuk mengurutkan berdasar '+sort_by_text;
                $(this).tooltip(
                    {
                        html: false,
                        title: title
                    });
                $(this).append('<span class="sortIcon">'+blank+'</span>')
                $(this).css('cursor','pointer')


                if (order_by===dataSort){
                    if (order_direction==='asc'){
                        $(this).find('.sortIcon').html(desc)
                    }else if (order_direction==='desc'){
                        $(this).find('.sortIcon').html(asc)
                    }
                }
            }
        })
    })
    $('.card-table-v1 th').on('click',function (){
        var dataSort=$(this).data('sort')
        var last_order_by=$('#card-table-form input[name="order_by"]').val()
        var last_order_direction=$('#card-table-form input[name="order_direction"]').val()
        var new_order_by='';
        var new_order_direction='';

        if (dataSort!==undefined){
            new_order_by=dataSort;
            if (dataSort===last_order_by){
                if (last_order_direction==='asc'){
                    new_order_direction='desc';
                }else if (last_order_direction==='desc'){
                    new_order_direction='asc';
                }
            }else {
                new_order_direction='asc';
            }

            $('#card-table-form input[name="order_by"]').val(new_order_by)
            $('#card-table-form input[name="order_direction"]').val(new_order_direction)
            $('#card-table-form').submit();
        }


    })
    $(document).ready(function (){
        var thCounts=0
        $('.card-table-v1 th').each(function (index){
            thCounts+=1;
        })
        // console.log(thCounts)
        var tbodyTrCounts=0
        $('.card-table-v1 tbody tr').each(function (index){
            tbodyTrCounts+=1;
        })
        // console.log(tbodyTrCounts)
        if (tbodyTrCounts===0){
            // console.log(tbodyTrCounts)
            $('.card-table-v1 tbody').append('<tr><td colspan="'+thCounts+'" class="text-center"><h4 class="my-5 py-5"><i class="fas fa-question-circle mr-2"></i> Data Not Found</h4></td></tr>')
        }
    })
</script>
<script>
    function deleteRow(id, name, url){
        Swal.fire({
            title: '<strong>Hapus Item</strong>',
            icon: 'warning',
            html: 'Anda yakin ingin menghapus<br><br><strong>'+name+'</strong> ?',
            showCloseButton: true,
            focusConfirm: false,
            confirmButtonText:'Hapus',
            confirmButtonColor: '#bd2130',
            showCancelButton:true,
            cancelButtonColor:'#6c757d',
            cancelButtonText:'Cancel'

        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                loadingON()
                executeDelete(id,url)
            }
        })
    }
    function executeDelete(id,url){
        $('#dynamicForm').attr('action',url);
        $('#dynamicForm').append('<input type="text" name="id" value="'+id+'">');
        $('#dynamicForm').submit();
        console.log('aaa')
    }


    function loadingON(){
        $('.loaderContainer').removeClass('d-none')
    }
    function loadingOFF(){
        $('.loaderContainer').addClass('d-none')
    }
    const loaderHtml = '<div class="row" style="height: 150px"><div class="lds-facebook"><div></div><div></div><div></div></div></div>';
    $('.toole_info').on('click', function () {
        var url = $(this).data('url')
        // console.log(url)
        $('#ModalXL .modal-body').html(loaderHtml)
        $.ajax({
            type:'GET',
            url:url,
            success:function(data){
                $('#ModalXL .modal-body').html(data)
                require_to_re_init();
            }
        });
        $('#ModalXL').modal({
            backdrop: 'static',
            keyboard: false
        })
    })

    function require_to_re_init(){
        $('.select2').select2();
    }
    $(document).ready(function (){
        require_to_re_init()
    })
</script>


<script>
    function initMap(lat,long,editable=0) {
        // console.log('executeMap')
        if(null!=lat&&null!=long){
            var LatN = parseFloat(lat)
            var LongN = parseFloat(long)
        }

        var center = {lat: LatN, lng: LongN}
        // document.getElementById('latitude').value = LatN;
        // document.getElementById('longitude').value = LongN;

        var dragable=false;
        if (editable===1){
            dragable=true
        }

        var map = new google.maps.Map(document.getElementById('map'), {
            scrollwheel: false,
            navigationControl: false,
            mapTypeControl: false,
            scaleControl: false,
            zoom: 17,
            streetViewControl: false,
            center: center,
            draggable:dragable
        });
        /**
         *
         * markep pakai css yang khusus map dalam form
         * Lokasi pakai evend darg map  otomatis ambil center
         * */

        if (editable===1){
            google.maps.event.addListener(map, 'dragend', function() {
                var latLng=map.getCenter();
                // console.log(latLng)
                document.getElementById('latitude').value = latLng.lat();
                document.getElementById('longitude').value = latLng.lng();
            } );
        }
    }
</script>

{{--side bar--}}
<script>
    $(document).ready(function (){
        sideBarInit()
    })
    $('.sidebar-toogle-bar').on('click',function (){
        sessionStorage.setItem("side_state_custom", 1);
        sideBarInit()
    })
    $('.hide-sidebar-button').on('click',function (){
        sessionStorage.setItem("side_state_custom", 0);
        sideBarInit()
    })

    function sideBarInit(){
        var sidebar_state=sessionStorage.getItem("side_state_custom");
        console.log(sidebar_state)
        if (parseInt(sidebar_state)===0){
            $('body').addClass('hide-navbar')
            console.log('addClass')
        }else {
            $('body').removeClass('hide-navbar')
            console.log('armClass')
        }
    }
</script>

<script>
    $(document).ready(function (e) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#x_form').on('submit', function(e){
            loadingON()
            e.preventDefault();
            var myForm = document.getElementById('x_form');
            var formData = new FormData(myForm);
            var url = myForm.getAttribute('action');
            $.ajax({
                type:'POST',
                url: url,
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    if($.isEmptyObject(data.error)){
                        //Jika tidak ada kesalahan validasi submit Form
                        $('input[name="action"]').val('submit')
                        myForm.submit()
                    }else{
                        //If Response ada kesalahan validasi
                        var result = data['error'];
                        // console.log(result)
                        $('.the-validation-text').empty()
                        for(var index in result) {
                            $('.the-validation-text.'+index).append('* '+result[index][0])
                        }
                        loadingOFF()
                    }
                },
            });
            return  false;
        });
    })
</script>
