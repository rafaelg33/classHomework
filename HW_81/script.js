(function () {


    var hour = document.getElementById("hour");
    var min = document.getElementById("min");
    var sec = document.getElementById("sec");
    


     var buttonStart = document.getElementById('start');
     var buttonStop = document.getElementById('stop');
     var buttonReset = document.getElementById('reset');
     var timer;
     var counter = 0;
     var s;
      var m = 0;
      var h = 0;

      buttonStart.onclick = function () {
          console.log("Start");
          clearInterval(timer);
          timer = setInterval(startTimer, 1000);
      }

      buttonStop.onclick = function () {
          console.log("Stop");
          clearInterval(timer);
      }

      buttonReset.onclick = function () {
          console.log("Clear");
          clearInterval(timer);
          sec.innerHTML = "00";
          min.innerHTML = "00";
          hour.innerHTML = "00";

      }

       function startTimer() {
            ++counter;
           
            if (counter >  59) {
                ++m;
                min.innerHTML = m;
                counter = 0;
            }
            if(m > 59){
                ++h;
                hour.innerHTML = h;
                m = 0;
            }

            sec.innerHTML = counter;


       }


    
})();