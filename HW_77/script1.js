var MyApp = MyApp || {};

MyApp.utils = (function (utils) {
    "use strict";

    utils.caseInsensitive = function (string1, string2){
        
            if( string1.toUpperCase() === string2.toUpperCase()){
                return true;
            }
        
    };

    return utils;
}(MyApp.utils || {}));