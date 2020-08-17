$(function(){ 
    $( document ).ready(function() {
        console.log('starting ......');
        $.ajax({ 
      type: "GET", 
      url: "getcontacts.php",
    }).done(function( data ) { 
        console.log(data)
      var result=data; 
      var string='<table class="table table-responsive table-striped">\
      <thead>\
        <tr>\
          <th width="10%" scope="col">Name</th>\
          <th width="10%" scope="col">Email</th>\
          <th width="10%" scope="col">Phone</th>\
          <th width="30%" scope="col">Message</th>\
          <th width="30%" scope="col">Action</th>\
        </tr> </thead>\
      <tbody>';

     /* from result create a string of data and append to the div */
    
      $.each( result, function( key, value ) { 
        
        string += "<tr> <td scope="+'row'+">"+value['name'] + "</td><td>"+value['emailAddress']+"</td><td>"+value['phoneNumber']+"</td>  \
                  <td>"+value['message']+"</td><td><button type='button' class='btn btn-danger'>Delete</button></td> </tr>"; 
            }); 
            string+='</tbody>'
           string += '</table>'; 
        $("#contact-table").html(string); 
     }); 
  }); 
}); 