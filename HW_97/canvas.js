(function(){


var canvas = document.getElementById('canvas');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

var c = canvas.getContext('2d');

c.beginPath();
c.arc(200,200, 30, 0 ,Math.PI * 2 , false);
c.strokeSttle = "blue";
c.stroke();

var x = 200;
var y = 200;
var dx = 4;
var dy = 4;
var radius = 30;

function animate(){
    requestAnimationFrame(animate);
    c.clearRect(0,0,innerWidth,innerHeight);

    c.beginPath();
    c.arc(x,y, radius, 0 ,Math.PI * 2 , false);
    c.strokeSttle = "blue";
    c.stroke();
    if(x + radius > innerWidth || x - radius < 0){
        dx = -dx;
    }
    if(y + radius > innerHeight || y - radius < 0){
        dy = -dy;
    }
    x += dx;
    y += dy;
}

animate();


// // Start listening to resize events and draw canvas.
// initialize();

// function initialize() {
//     // Register an event listener to call the resizeCanvas() function 
//     // each time the window is resized.
//     window.addEventListener('resize', resizeCanvas, false);
//     // Draw canvas border for the first time.
//     resizeCanvas();
//  }

//  // Display custom canvas. In this case it's a blue, 5 pixel 
//  // border that resizes along with the browser window.
//  function redraw() {
//     c.strokeStyle = 'blue';
//     c.lineWidth = '5';
//     c.strokeRect(0, 0, window.innerWidth, window.innerHeight);
//  }

//  // Runs each time the DOM window resize event fires.
//  // Resets the canvas dimensions to match window,
//  // then draws the new borders accordingly.
//  function resizeCanvas() {
//     canvas.width = window.innerWidth;
//     canvas.height = window.innerHeight;
//      redraw();
//  }
})();

