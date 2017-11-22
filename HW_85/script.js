(function () {
    "use strict";
    $("#output").hide();
    $("#danger").hide();
    var loading = $('<img src="waiting.gif">').appendTo('body').hide();
   
    $("#button").click(function () {
        var file = $("#file").val();
         $.get(file, function (loadedData) {
             
               loading.show();
              setTimeout(function () {
                  $("#output").show();
                  $("#output").text(loadedData)
                  loading.hide();
              }, 3000);
             
         }).fail(function (xhr, statusCode, statusText) {

               $("#danger").show();
               $("#danger").text(file + " was not found")
             console.log(xhr, statusCode, statusText);
         });
      
    });


   
}());