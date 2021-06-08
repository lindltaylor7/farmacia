$(document).ready(function(){

    $('#cantidad').on('keyup',function(){
        var cant = $(this).val()
        var price = $('#price').val()

        var utl = cant * price

        console.log(utl.toFixed(2))
        $('#utilidad').val(utl.toFixed(2))

    })



})
