$(document).ready(function(){

    $('#medicamentos_select').hide()

    $('#search').on('click', function(){
        $('#medicamentos_select').show()
    })

 /*    $('#search').on('focusout', function(){

    }) */

    $('#search').on('keyup', function(){
       var search = $(this).val()
       $('#medicamentos_select').trigger("click")
        $.ajax({
            url:"../medicamentos/all",
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
                    list = '<tr><td><a class="search-link" id="'+value.id+'">'+value.n_generico+' - '+value.n_comercial+'</a></td></tr>'
                    $('#medicamentos_select').append(list);
                });

                $('.search-link').on('click', function(){
                    $('#search').val($(this).text())
                    $('#medicamento_id').val($(this).attr('id'))
                    $('#medicamentos_select').hide()
                })

            }

            });
    });
});


