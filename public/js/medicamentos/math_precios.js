$(document).ready(function(){
    $('#utilidad').on('keyup', function(){
        var p_costo= $('#p_costo').val()
        var utilidad = $('#utilidad').val()

        var p_venta = parseFloat(p_costo) + parseFloat(utilidad*p_costo/100)

        $('#p_unitario').val(p_venta);
        console.log(p_venta)
    });

    $('#p_caja').on('keyup', function(){
        var p_caja= $(this).val()
        var utilidad = $('#utilidad').val()

        var p_venta_caja = parseFloat(p_caja) + parseFloat(utilidad*p_caja/100)

        $('#p_venta_caja').val(p_venta_caja);
        console.log(p_venta_caja)
    });

});
