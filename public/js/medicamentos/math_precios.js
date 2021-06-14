$(document).ready(function(){
    $('#utilidad').on('keyup', function(){
        var p_costo= $('#p_costo').val()
        var utilidad = $('#utilidad').val()

        var p_venta = parseFloat(p_costo) + parseFloat(utilidad*p_costo/100)

        $('#p_unitario').val(p_venta.toFixed(2));
        console.log(p_venta)
    });

    $('#utilidad_caja').on('keyup', function(){
        var p_caja= $('#p_caja').val();
        var utilidad_caja = $('#utilidad_caja').val()

        var p_venta_caja = parseFloat(p_caja) + parseFloat(utilidad_caja*p_caja/100)

        $('#p_venta_caja').val(p_venta_caja.toFixed(2));
        console.log(p_venta_caja)
    });

});
