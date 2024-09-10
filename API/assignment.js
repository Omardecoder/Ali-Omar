//Declaring variables
let name='Meme';
let age='102';
let isStudent=true;//Boolean value

console.log("Name:",name);
console.log("Age:",age);
console.log("isStudent:",isStudent);

let numberString="20";

let actualNumber=Number(numberString);

let result=actualNumber+1;

console.log("Result:",result);

//declaring a variable Null
let nullVariable=null;

let undefinedVariable;

console.log("NullVariable:",nullVariable);
console.log("UndefinedVariable:",undefinedVariable);


let length=20;
let width=10;
 
//calculating area
 let area=length*width;

console.log("Area",area);
//calculating remainder
let value1=20;
let value2=3;

let remainder=value1%value2;

console.log("remainder:",remainder);

//swapping variables

let a=5;
let b=11;

//swapping using arithmetic 
a=a+b;
b=a-b;
a=a-b;

console.log("Answers After Swapping:a:",a,"b:",b);

//Strings

let originalString = "hello, world!";

// Converting  the string to uppercase
let upperCaseString = originalString.toUpperCase();


console.log("Uppercase String:", upperCaseString);

// Store a string in a variable
let mainString = "JavaScript is fun";

// Extract a substring from the string
let substring = mainString.substring(0, 10); // Extracts characters from index 0 to 9


console.log("Extracted Substring:", substring);

// Store a string in a variable
let sentence = "The quick brown fox jumps over the lazy dog";

// Specify the word to check s
let wordToCheck = "fox";

// Check if the string contains the specific word
if (sentence.includes(wordToCheck)) {
    console.log("WordToCheck:",wordToCheck);
} else {
    console.log("WordToCheck:",wordToCheck);
}
//arrays
let fruits=["Pineapple","Apple","Bananas","Mango","Strawberry"];

for (let i=0;i<fruits;i++){
    console.log("Fruits",fruits[i]);
}

let items=["item1","item2","item3"];

//adding a new item
items.push("Newitem");

//removing the first item
items.shift("");

console.log("UpdatedArrray:",items)

//conditional statements
let number=7;

if(number%2==0)
{
        console.log(Number + "is even");
}
else{
    console.log(Number + "is odd");
}