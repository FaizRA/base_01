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
    console.log('counts')
    console.log($('.xyz_check_container').length)
    $('.xyz_check_container').each(function(i, obj) {
        var xyz_input = $(this).find('input')
        var is_checked_2=xyz_input.is(':checked');
        if (is_checked_2){
            xyz_input.parent().addClass('checked')
        }else {
            xyz_input.parent().removeClass('checked')
        }


    });
}
