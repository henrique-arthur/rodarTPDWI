$(document).ready(function() {
  $('#formjax').submit(function(event) { //Trigger on form submit
    $("#cform").empty();

      var ajaxRequest;
      //Validate fields if required using jQuery

      var postForm = { //Fetch form data
          'idVeiculo'     : $('input[name=idVeiculo]').val(), //Store name fields value
          'tipo'          :$('input[name=tipo]').val(), //Store name fields value
          'nomeVeiculo'   : $('input[name=nomeVeiculo]').val(), //Store name fields value
          'imgVeiculo'    : $('input[name=imgVeiculo]').val() //Store name fields value
      };

      ajaxRequest = $.ajax({ //Process the form using $.ajax()
          type      : 'POST', //Method type
          url       : '../../controller/ajaxPerfilController.php', //Your form processing file URL
          data      : postForm, //Forms name
          dataType  : 'json',
          success   : function(data) {
                          if (!data.success) { //If fails
                              if (data.errors.name) { //Returned if any error from process.php
                                  $('.throw_error').fadeIn(1000).html(data.errors.name); //Throw relevant error
                              }
                          }
                          else {
                                  $('#success').fadeIn(1000).append('<p>' + data.posted + '</p>'); //If successful, than throw a success message
                              }
                          }
      });

      /* On failure of request this function will be called  */
      ajaxRequest.fail(function (response){
        if(response.status == 200){
          $( "#cform" ).append(response.responseText);
        }else{
          console.log(response);
        }
      });

      event.preventDefault(); //Prevent the default submit
  });

  $('#formjax2').submit(function(event) { //Trigger on form submit
    $("#cform").empty();
    var ajaxRequest;
    //Validate fields if required using jQuery

    var postForm = { //Fetch form data
        'idVeiculo'     : $('input[name=idVeiculo]').val(), //Store name fields value
        'tipo'     : $('input[name=tipo2]').val(), //Store name fields value
        'nomeVeiculo'     : $('input[name=nomeVeiculo]').val(), //Store name fields value
        'imgVeiculo'     : $('input[name=imgVeiculo]').val(), //Store name fields value
        'dataMin'     : $('input[name=dataMin]').val() //Store name fields value
    };

    ajaxRequest = $.ajax({ //Process the form using $.ajax()
        type      : 'POST', //Method type
        url       : '../../controller/ajaxPerfilController.php', //Your form processing file URL
        data      : postForm, //Forms name
        dataType  : 'json',
        success   : function(data) {
                        if (!data.success) { //If fails
                            if (data.errors.name) { //Returned if any error from process.php
                                $('.throw_error').fadeIn(1000).html(data.errors.name); //Throw relevant error
                            }
                        }
                        else {
                                $('#success').fadeIn(1000).append('<p>' + data.posted + '</p>'); //If successful, than throw a success message
                            }
                        }
    });

    /* On failure of request this function will be called  */
    ajaxRequest.fail(function (response){
      if(response.status == 200){
        $( "#cform" ).append(response.responseText);
        console.log(response)
      }else{
        console.log(response);
      }
    });

    event.preventDefault(); //Prevent the default submit
});
});