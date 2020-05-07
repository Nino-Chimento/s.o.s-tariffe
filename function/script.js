// functrion stringMax
var string = "Buongiorno mi chiamo Paolo";


function stringMax(string){
    var array = string.split(" ");
    var stringMax = array[0];
    for (var i = 0; i < array.length; i++) {
        if (stringMax.length < array[i].length) {
            stringMax = array[i];
        }

    }

    return stringMax
}
// console.log(stringMax(string));


// function isInArray

var arrayA = [2,5,3,5,6,8,6,45,134,3,2,2];
var arrayB = [6,23,5,13,45,2,134,23,6];

function arrayMix(arrayA,arrayB){

    var arrayMix = [];
    if(arrayA.length >= arrayB.length){
        for (var i = 0; i < arrayA.length; i++){
            if (arrayB.includes(arrayA[i]) && !arrayMix.includes(arrayA[i])){
                arrayMix.push(arrayA[i]);
            }
        }
    }else{
        for (var i = 0; i < arrayB.length; i++) {
            if (arrayA.includes(arrayB[i]) && !arrayMix.includes(arrayB[i])) {
                arrayMix.push(arrayB[i]);
            }
        }
    }
    return arrayMix;
}

// console.log(arrayMix(arrayA,arrayB));

// arrayDish

array = [1,2,3,7,[43,2,23],2,[245,3,12]];

function arrayDish(array){

    arrayDish =[];
    for( var i = 0; i < array.length; i++){
        if (!array[i].length > 0){
            arrayDish.push(array[i])
        }else{
            for (var k = 0; k < array[i].length; k++){
                arrayDish.push(array[i][k])
            }
        }
    }

    return arrayDish;
}
    console.log(arrayDish(array));
    
    
    