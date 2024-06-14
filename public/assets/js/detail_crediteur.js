$('document').ready(()=>{
    $('.btn-outline-info').on('click',()=>{
        var number=$('input[name=number]').val()
        var logement_id=$('input:text[name=logement_id]').val()
        CSRF_TOKEN=$('meta[name="csrf-token"]').attr('content')

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        
        $.ajax({
            type:"Post",
            url:"/abonnez",
            dataType:"json",
            data:{
                '_token':CSRF_TOKEN,
                'count':number,
                'logement_id':logement_id
            },

            success:function(response){

                console.log(response)

            }
        })
    })
})