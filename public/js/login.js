toastr.options = {
    "closeButton": true,
    "timeOut": "2000",
    "progressBar": true,
    "positionClass": "toast-top-right",
    "newestOnTop": true,
};

$(document).ready(function() {
    // Click user button
    $(".btn-user").click(function(e){            
      e.preventDefault();

      var _token = $("input[name='_token']").val();
      var name = $("input[name='name']").val();
      var password = $("input[name='password']").val();          

        $.ajax({
            url: "login",
            type:'POST',
            data: {_token:_token, name:name, password:password},
            dataType: 'json',

            success: function(data) { 
              if(data == 1) {
                window.location.replace('/');                                                            
              } else {                    
                toastr.error('Credentials Error, Login Failed');
              }                    
            },
            error: function (err) {
                if (err.status == 422) {
                    printErrorMsg(err.responseJSON.errors);
                }
            }
        });
    }); 
    // Click user button

    // Print Message
            
    function printErrorMsg (msg) {
      $(".print-msg").find("ul").html('');
      $(".alert-success").css('display','none');                
      $(".print-msg").css('display','block');
      $(".print-msg").addClass('alert-danger');
      $.each( msg, function( key, value ) {
        $(".print-msg").find("ul").append('<li>'+value+'</li>');
      });            
    }
    // Print Message
   });