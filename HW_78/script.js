var numbers = [5, 6, 7 , 8];

function multiplyNumber(num){
    return num * 2 ;
}

function ourMapFunction(theArray){
    NewArray = [];
    for(var i = 0; i < theArray.length; i++){
         NewArray[i] = theArray[i] * 2 ;    
        }
        return NewArray;
    }


console.log("Javascript Map", numbers.map(multiplyNumber));
console.log("Our Custome Map", ourMapFunction(numbers));

