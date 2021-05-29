$(document).ready(function(){


    $('#search_stock').on('keyup',function(){
        var search = $('#search_stock').val()
        console.log(search)
        var token = '{{csrf_token()}}';


        $.ajax({
            url:"../admin/stock/all",
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
                var tableRow = '';

                $('#dynamic-row').html('');

                $.each(res, function(index, value){

                    var f_vencimiento = new Date(value.f_vencimiento)
                    tableRow = '<tr id=row'+value.id+'><td class="d-none d-md-table-cell">'+value.n_generico+'</td><td class="d-none d-md-table-cell">'+value.cantidad+'</td><td class="d-none d-md-table-cell">'+value.anaquel+'</td><td class="d-none d-md-table-cell">'+value.f_ingreso+'</td><td class="d-none d-md-table-cell">'+f_vencimiento+'</td><td><a href="#" class="btn-editar" id='+value.id+' data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="align-middle" data-feather="edit-2"></i></a><a href="#" class="btn-eliminar" id='+value.id+'><i class="align-middle" data-feather="trash"></i></a></td></tr>';
                    $('#dynamic-row').append(tableRow);
                    feather.replace();

                    $('.btn-editar').on("click", function formEdit(){

                        var id = $(this).attr('id')


                        $.ajax({
                            url:"../admin/medicamentos/infoedit",
                            type: "POST",
                            dataType: 'json',
                            data:{
                                id: id
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success:function(res){


                               $.each(res, function(key, value){
                                $('#id_med').val(value.id);
                                $('#n_generico').val(value.n_generico);
                                $('#n_comercial').val(value.n_comercial);
                                $('#concent').val(value.concent);
                                $('#present').val(value.present);
                                $('#lab').val(value.lab);
                                $('#nro_caja').val(value.nro_caja);
                               })
                            }
                        });


                    })

                    $('.btn-eliminar').on("click", function(){
                        var id = $(this).attr("id")
                       if(confirm("Desea eliminar este medicamento?")){
                            $.ajax({
                                url:"../admin/medicamentos/delmedic",
                                type: "POST",
                                dataType: 'json',
                                data:{
                                    id: id
                                },
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success:function(res){
                                    //alert("Eliminar row"+id)
                                    $('#row'+id).remove()
                                }
                            });
                       }
                    });
                });


            }

            });

    });

});
