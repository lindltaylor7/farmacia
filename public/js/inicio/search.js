$(document).ready(function(){


    $('#search_index').on('keyup',function(){
        var search = $('#search_index').val()
        console.log(search)


        $.ajax({
            url:"./admin/all",
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

                $('#dynamic-row-index').html('');

                $.each(res, function(index, value){
                    if(value.total == null){
                        value.total = 0
                    }
                    tableRow = '<tr id=row'+value.id+'><td class="d-none d-md-table-cell">'+value.n_generico+'</td><td class="d-none d-md-table-cell">'+value.n_comercial+'</td><td class="d-none d-md-table-cell">'+value.present+'</td><td class="d-none d-md-table-cell">'+value.concent+'</td><td class="d-none d-md-table-cell">S./'+value.p_unitario.toFixed(2)+'</td><td class="d-none d-md-table-cell">'+value.total+'</td><td class="d-none d-md-table-cell">'+value.lab+'</td><td class="d-none d-md-table-cell"><span class="badge bg-primary">'+value.anaquel+'</span></td></tr>';
                    $('#dynamic-row-index').append(tableRow);
                });


            }

            });

    });

});
