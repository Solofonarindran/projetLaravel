$(document).ready(function(){
    $('.reaction').click(function(){
        
        // get the value id of the button event
        var data=$(this).attr('id')

        CSRF_TOKEN=$('meta[name="csrf-token"]').attr('content')
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })


        $.ajax({
            type:"post",
            url:"/u/Offre", 
            dataType:"json",
            data:{
                "_token":CSRF_TOKEN,
                "id":data
            },
            success:function(response){

                console.log(response)
            }
        })







    })
})