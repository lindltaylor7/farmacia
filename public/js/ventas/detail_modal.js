$(document).ready(function(){

    $('#cantidad').on('keyup',function(){
        var cant = $(this).val()
        var price = $('#price').val()

        var utl = cant * price

        $('#utilidad').val(utl)

    })

})
