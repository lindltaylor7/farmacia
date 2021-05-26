$(document).ready(function(){
    $('#utilidad').on('keyup', function(){
        var p_costo= $('#p_costo').val()
        var utilidad = $('#utilidad').val()

        var p_venta = parseFloat(p_costo) + parseFloat(utilidad*p_costo/100)

        $('#p_unitario').val(p_venta);
        console.log(p_venta)
    })

});
