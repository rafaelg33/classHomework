var MyApp = MyApp || {};

MyApp.utils = (function (utils) {
    "use strict";

    var months = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"];

    utils.getNumber = function (name) {
            for (var i = 0; i < months.length; i++) {
                if (months[i] === name) {
                    return i + 1;
                }
            }
            return -1;  

    };
    
    return utils;
}(MyApp.utils || {}));