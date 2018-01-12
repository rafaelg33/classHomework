(function() { 
    var canvas = document.getElementById("theCanvas"),
    context = canvas.getContext('2d'),
    ants = [];

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

  


  class Ant{
      constructor( color){
     
        this.color = color;
        this.x = canvas.width / 2;
        this.y = canvas.height / 2;
      }

      move(){
        this.x += Ant.getRandomNumberBetween(-10, 10);
        this.y += Ant.getRandomNumberBetween(-10, 10);
        context.fillStyle = this.color;
        context.fillRect(this.x, this.y, 5, 5);
      }

      static getRandomNumberBetween( min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
      }
  }

  document.getElementById('button').addEventListener('click',function(){
       var number = document.getElementById('number').value;
       var color = document.getElementById('color').value;
   
      // alert(color)
       for (var i = 0; i < number; i++) {
        ants.push(new Ant(color));
     }

   })

   // ants.push(new Ant( 'red'));



  setInterval(() => {
    context.clearRect(0, 0, canvas.width, canvas.height);
    ants.forEach(ant => ant.move());
}, 100);


}());