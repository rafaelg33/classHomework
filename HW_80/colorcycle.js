(function () {
    "use strict";

    var box = document.getElementById("box");
    var Button = document.getElementById("button");
    var intervalId;
    var i = 0;
   
    var startString = 'Start changing the color';
    var stopString = 'Stop changing the color';

    function get_random_color() 
{
    var color = "";
    for(var i = 0; i < 3; i++) {
        var sub = Math.floor(Math.random() * 256).toString(16);
        color += (sub.length == 1 ? "0" + sub : sub);
    }
    return "#" + color;
}  


   function changecolor(){

      var color = get_random_color();
      box.style.background = color;



   }




    Button.addEventListener('click', function () {
    
        if (Button.innerHTML === startString) {



            intervalId = setInterval(changecolor, 250);

            Button.innerHTML = stopString;
          
        } else {
            clearInterval(intervalId);
            Button.innerHTML = startString;
 
        }
    });

  

}());