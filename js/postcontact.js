//$(document).on('click','#contact_btn',function(e) {
   // e.preventDefault();

   $(function() {
    console.log('contact processing .....')
    
    
    
    $("#contact_form").validate({
        // Specify validation rules
        rules: {
          // The key name on the left side is the name attribute
          // of an input field. Validation rules are defined
          // on the right side
          name: "required",
          email: {
            required: true,
            email: true
          },
          phonenumber: {
            required: true,
            digits: true,
            minlength: 10,
            maxlength:10
          },
          msg:"required"
        },
        // Specify validation error messages
        messages: {
                name: "Please enter your firstname",
                msg: "Please enter your message",
                phonenumber: {
                    required: "Please provide your phone number",
                    minlength: "Your phone number must be at least 10 characters long",
                    maxlength: "Your phone number must be at most 10 characters long",
                    digit:"Your phone number should contain digits only"
                },
                email: {
                    required: "Please provide your email",
                    email:"Please enter a valid email address"
                }
           },
     
        submitHandler: function(form) {
            $.ajax({
                url: form.action,
            type: form.method,
            data: $(form).serialize(),
                success: function(dataResult){
                        var dataResult = JSON.parse(dataResult);
                        if(dataResult.status==201){
                            // $('#addEmployeeModal').modal('hide');
                            alert(dataResult.message); 
                            location.reload();						
                        }
                        else {
                           alert(dataResult.message);
                        }
                }
            });
        }
      });
    
    
    
  
});

