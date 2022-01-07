toastr.options = {
    "closeButton": true,
    "timeOut": "2000",
    "progressBar": true,
    "positionClass": "toast-top-right",
    "newestOnTop": true,
};

$('#upload-form').on('submit', function(event){
    event.preventDefault();            
    var file_data = $('#select_file').prop('files')[0];
    var data = new FormData();
    data.append('file', file_data);
    data.append('_token', $('[name="csrf-token"]').attr('content'));
    
    $.ajax({
        url:"/input-speedometer/import",
        method: "POST",
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {        
            $("#message").css('display','none');                      
            toastr.success(data.success);                                                                  
        },
        error: function(err) {        
            if(err.status == 500) { 
                $("#message").find("ul").html('');                
                $("#message").find("ul").append('<li>Something wrong happened, please try again.</li>');
                $("#message").css('display','block'); 
            }
                         
            if(err.status == 422) { 
                printErrorMsg(err.responseJSON.errors);
            }                    
        },
        complete: function(data) {
            $('#upload-form')[0].reset();
        }

    })
});

// Print Message
function printErrorMsg (msg) {                 
    $("#message").find("ul").html('');
    $("#message").css('display','block');                
    $.each( msg, function( key, value ) {
        $("#message").find("ul").append('<li>'+value+'</li>');
    });        
}
// Print Message