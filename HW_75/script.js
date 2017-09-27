var letters1 = ['a','B' ,'c',  'e','F' ];
var letters2 = ['a','b' ,'c',  'e' ];


function isUpperCase(letter){
    return letter === letter.toUpperCase();
}
function isLowerCase(letter){
    return letter !== letter.toUpperCase();
}

console.log(letters1.some(isUpperCase));
console.log(letters2.some(isUpperCase));

function ourSomeFunction(theArray, callback){
    for(var i = 0; i < theArray.length; i++){
        if (callback(theArray[i]) === true){
            return true;
        }
    }
    return false;
}
console.log(ourSomeFunction(letters1, isUpperCase));
console.log(ourSomeFunction(letters2, isUpperCase));

function onlyIf(theArray, test, action){
 for(var i = 0; i < theArray.length; i++){
        if(test(theArray[i]) === true){
            action(theArray[i]);
        }
    }
}
function pop(index){
    alert(index);
}

function printIt(index){
      console.log(index);
}

onlyIf(letters1,isUpperCase,printIt);

onlyIf(letters1,isUpperCase,pop);