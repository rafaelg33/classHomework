var pcs = pcs || {};

pcs.tools = (function() {
  "use strict";

  function get(id) {
    return document.getElementById(id);
  }

  function setCss(elem, property, value) {
    elem.style[property] = value;
  }

  function clicked(){
    elem.addEventListener("click", function(){
        alert("The " + elem.innerHTML + " was clicked");
    });

  }

  return {
    wrap: function(id) {
      var elem = get(id);

      return {
        setCss: function(property, value) {
          setCss(elem, property, value);
          return this;
        },

        clicked: function(callback){
            elem.addEventListener( "click", callback);
            return this;
        },

        remove: function(){
            elem.addEventListener("click", function(){
                setCss(elem, "display", "none");
                return this;
            });    
        },

        hide: function(){
            setCss(elem, "display", "none");
            return this;
        },

        pulsate: function() {
          var fontSize = 32,
            i = 1,
            //that = this,
            interval = setInterval(function() {
              if (i <= 5 || i > 15) {
                fontSize += 5;
              } else {
                fontSize -= 5;
              }

              //that.setCss("fontSize", fontSize + 'px');
              setCss(elem, "fontSize", fontSize + 'px');

              if (i++ === 20) {
                clearInterval(interval);
              }
            }, 100);

          return this;
        }
      };
    }
  };

}());