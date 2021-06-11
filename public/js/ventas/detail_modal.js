$(document).ready(function(){
    $('#ad-danger').hide();
    $('#cantidad').on('keyup',function(){
        var cant = $(this).val()
        var price = $('#price').val()

        var utl = cant * price

        console.log(utl.toFixed(2))
        $('#utilidad').val(utl.toFixed(2))

        var cant_stock = $('#cant_stock').val()

        console.log(cant_stock - cant)
        if(cant_stock - cant < 0){
            $('#ad-danger').show();
            $('#btn-agregar').prop('disabled',true)
        }else{
            $('#ad-danger').hide();
            $('#btn-agregar').prop('disabled',false)
        }

    })



})
