alert("Hello World");

var firstName = "Jane";                     // String type variable
var lastName = "Doe";                       // String type variable
var age = 35;                               // Number type variable
var married = true;                         // Boolean type variable
var childrenNames = ["Alice", "Bob"];       // Array type variable
var husband = { firstName: "John", lastName: "Doe", age: 35 }                                               
var fullName = firstName + " " + lastName;        // Concatenation operator
var dogYears = age/7;                             // Arithmetic Operator
var isAdult = dogYears > 4;                       // Comparison operator
var isSettled = isAdult && married;               // Integer type variable

function getFullName(firstName, lastName) {     // Function name
    return  firstName + " " + lastName;         // Returned value
}

function getIsSettled(age, married) {
    return isSettled;    
}

if (isSettled) {
    document.write(fullName + " is settled.");
} else {
    document.write(fullName + " is not settled.");
}

function revealMessage () {
    document.getElementById("hiddenMessage").style.display = 'block';
}