$(document).ready(function(){


    $('#search_med').on('keyup',function(){
        var search = $('#search_med').val()
        console.log(search)
        var token = '{{csrf_token()}}';


        $.ajax({
            url:"admin/medicamentos/all",
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
                    tableRow = '<tr><td class="d-none d-xl-table-cell">'+value.n_generico+'</td><td class="d-none d-xl-table-cell">'+value.n_comercial+'</td><td class="d-none d-xl-table-cell">'+value.present+'</td><td class="d-none d-xl-table-cell">'+value.concent+'</td><td class="d-none d-md-table-cell">S./5.00</td><td class="d-none d-md-table-cell">20</td><td class="d-none d-md-table-cell">'+value.lab+'</td><td class="d-none d-md-table-cell">1</td><td><button class="btn btn-success"><i class="align-middle" data-feather="edit-2"></i></button><button class="btn btn-danger"><i class="align-middle" data-feather="trash"></i></button></td></tr>';

                    $('#dynamic-row').append(tableRow);
                });


            }

            });

    });

});
