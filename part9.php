<?php
    ini_set('display_errors' , 1);           //Show errors for debugging
    $firstName = "Jane";                     // String type variable
    $lastName = "Doe";                       // String type variable
    $age = 35;                               // Integer type variable
    $married = true;                         // Boolean type variable
    $childrenNames = array("Alice", "Bob");  // Array type variable
    
    $fullname = $firstName . " " . $lastName     //Concatenation opertor
    $dogYears = $age/7;                          // Arithmetic operator
    $isAdult = $dogYears > 4;                    // Comparison operator
    $isSettled = $isAdult and $married;          // Integer type variable

    function getFullName($firstName, $lastName) {
        return  $firstName . " " . $lastName;         // Concatenation Operator
    }
    $fullName = getFullName($firstName, $lastName);   // Using variables

    function getIsSettled($age, $married) {
        $dogYears = $age/7;                          // Arithmetic Operator
        $isAdult = $dogYears > 4;                    // Comparison operator
        $isSettled = $isAdult and $married;          // Integer type variable
        return $isSettled;
    }
    
    $isSettled = getIsSettled($age, $married);       // Using variables

    if ($isSettled) {
        echo $fullName . " is settled.";
    } else {
        echo $fullName . " is not settled.";
    }

    foreach($childrenNames as $childName) {
        echo "<li>" . $childName . "</li>";
?>