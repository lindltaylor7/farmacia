$(document).ready(function(){

    $('#medicamentos_select').hide()

    $('#search').on('click', function(){
        $('#medicamentos_select').show()
    })

    $('#container-search').on('focusout', function(){
        //$('#medicamentos_select').hide()
    })

    $('#search').on('keyup', function(){
       var search = $(this).val()
       $('#medicamentos_select').trigger("click")
        $.ajax({
            url:"../medicamentos/medPrice",
            type: "POST",
            dataType: 'json',
            data:{
                search: search
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(res){
                console.log(res);
                var list = '';

                $('#medicamentos_select').html('');

                $.each(res, function(index, value){
                    if(value.sumatoria != null){
                        list = '<tr><td><a class="search-link" data-cant="'+value.sumatoria+'" data-box="'+value.p_venta_caja+'" data-price="'+value.p_unitario+'" data-bs-toggle="modal" data-bs-target="#ventaModal" id="'+value.id+'">'+value.n_generico+' - '+value.n_comercial+' - '+value.concent+' - '+value.present+'</a></td></tr>'
                        $('#medicamentos_select').append(list);
                    }





                    $('.search-link').on('click', function(){
                        $('#cant_stock').val($(this).data('cant'))
                        $('#medicamento_id').val($(this).attr('id'))
                        $('#info_medic').html($(this).text())
                        $('#price').val($(this).data('price').toFixed(2))

                        $('#pricebox').hide()

                        var price = $(this).data('price')
                        var pricebox= $(this).data('box')

                        $("#cajaCheck").on( 'change', function() {
                            if( $(this).is(':checked') ) {
                                // Hacer algo si el checkbox ha sido seleccionado

                                $('#price').val(pricebox.toFixed(2))
                            } else {
                                // Hacer algo si el checkbox ha sido deseleccionado
                                $('#price').val(price.toFixed(2))
                            }
                        });
                    })
                });



            }

            });
    });
});
