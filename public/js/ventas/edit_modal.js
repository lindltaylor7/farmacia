$(document).ready(function(){

    $('#btn-edit-detail').on('click',function(){
        var id = $(this).val();

        $('#detail_id').val(id);
        $('#price_edit').val($(this).data('price').toFixed(2))
        $('#cantidad_edit').val($(this).data('cant'))
        $('#utilidad_edit').val($(this).data('cant')*$(this).data('price'))
        $('#cantidad_edit').on('keyup',function(){
            var cant = $(this).val()
            var price = $('#price_edit').val()

            var utl = cant * price

            $('#utilidad_edit').val(utl.toFixed(2))

        })

    })



})
