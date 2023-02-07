
// Anaïs

let A = [1,1];
let B = [3,1];

function calcDistance (A,B) {
    let XAB = (B[0]-A[0]);
    let YAB = (B[1]-A[1]);
    let distanceSquare = (Math.pow(XAB, 2) + Math.pow(YAB, 2));
    let distanceAB = (Math.sqrt(distanceSquare));
    return(distanceAB);
}
//Math.hypot();