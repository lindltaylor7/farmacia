$(document).ready(function(){
    $('#btn_dni').on('click',function(){
        var dni = $('#search_dni').val()
        var token = '087d16c0688f5150268342d085a55d54b5064c7649596011f03b35b935899a50'
        $.ajax({
            url:"https://apiperu.dev/api/dni/"+dni,
                type: "GET",
                dataType: 'json',
                headers: {
                    "Authorization": 'Bearer '+ token
                },
                success:function(res){
                    console.log(res)


                    $.each(res, function(key, value){
                        $('#nombre_cliente').html(value.nombre_completo)
                       })
                }
        })


    });





});
