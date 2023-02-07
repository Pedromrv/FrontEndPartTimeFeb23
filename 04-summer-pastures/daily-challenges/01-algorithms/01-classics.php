<?php

echo '01 - CLASSICS' . PHP_EOL;

/*
 * Multiples of 3 or 5
 */

$sum = 0;

for ($i = 0; $i < 1000; $i++) { // Loop over the whole range, from 0 to 1000 NOT included
    if ($i % 3 == 0 || $i % 5 == 0) { // Check if the number is either a multiple of 3 or 5 (or both)
        $sum += $i; // If so, increase the sum value by that number
    }
}

printTitle('Multiples of 3 or 5');
echo 'Multiples of 3 or 5 : ' . $sum . PHP_EOL . PHP_EOL;

/*
 * -------------------------------------------------------------------------------------------------
 */

/*
 * Even Fibonacci numbers
 */

$pair = [1, 2];
$sum = 0;
$newIndex = 1;

// newIndex is the index of the "highest" element in the pair of Fibonacci values
while($pair[$newIndex] < 4000000) {
    // If the highest element is even, we add it to the sum
    if ($pair[$newIndex] % 2 === 0) {
        $sum += $pair[$newIndex];
    }
    // We flip the index of the newest element in the array
    // 1 = 1 - 0 or 0 = 1 - 1
    $newIndex = 1 - $newIndex;
    // We calculate then assign the newest element of the sequence
    $pair[$newIndex] = $pair[0] + $pair[1];
}

printTitle('Even Fibonacci numbers');
echo 'Sum of even Fibonacci numbers : ' . $sum . PHP_EOL . PHP_EOL;

/*
 * -------------------------------------------------------------------------------------------------
 */

/*
 * Palindrome detection
 */

function detectPalindrome(string $input): bool
{
    // In order to avoid unnecessarily loops, we go from the start to the middle of the string and from the end to the middle at the same time
    for ($i = 0; $i < ceil(strlen($input)/2); $i++) {
        // If both elements are different, we return false directly and end the function
        if ($input[$i] !== $input[strlen($input) - $i -1]) return false;
    }

    return true;
}

printTitle('Palindrome detection');
echo 'Palindrome detection : ' . PHP_EOL;
echo 'radar is a palindrome ? --> ' . (detectPalindrome('radar') ? 'TRUE' : 'FALSE') . PHP_EOL;
echo 'bonjour is a palindrome ? --> ' . (detectPalindrome('bonjour') ? 'TRUE' : 'FALSE') . PHP_EOL;
echo '7557 is a palindrome ? --> ' . (detectPalindrome('7557') ? 'TRUE' : 'FALSE') . PHP_EOL;
echo 'redivider is a palindrome ? --> ' . (detectPalindrome('redivider') ? 'TRUE' : 'FALSE') . PHP_EOL;
echo 'recidivistes is a palindrome ? --> ' . (detectPalindrome('recidivistes') ? 'TRUE' : 'FALSE') . PHP_EOL . PHP_EOL;

/*
 * -------------------------------------------------------------------------------------------------
 */

/*
 * Sorting one array
 */

// NOTE : This algorithm is **highly** inefficient compared to the native sort() function of PHP.
// Always use sort() whenever sorting an array. Also, sort() is an optimised version of the quicksort algorithm.

$input = [6, 8, -9, 12, 789, 27, 110, -638, 2, 0, 0, 7, 1, 99, -27];

// I would suggest reading material regarding the quicksort algorithm as the recursion would be
// difficult to explain in comments.
function quickSort(array $inputArr): array
{
    if (sizeof($inputArr) < 2) return $inputArr; // If we have 0 or 1 element, the array is already sorted.

    $left = $right = array(); // Initialize the left and right arrays.

    reset($inputArr); // Set the pointer of the input array to the first element.
    $pivot_key = key($inputArr); // Set the key of the pivot element to the one currently being pointed at.
    $pivot = array_shift($inputArr); // Shift the first element off the array and stores it into the $pivot var.

    // For each remaining element of the array, add it to the left if smaller than the pivot, right if higher.
    foreach ($inputArr as $key => $value) {
        if ($value < $pivot) {
            $left[$key] = $value;
        } else if ($value === $pivot) {
            break;
        } else {
            $right[$key] = $value;
        }
    }

    // Recursive function.
    // Here we create a new array with the left, pivot and right arrays and quicksort each part separately until there
    // is only 1 or 0 element in the sorted parts.
    return array_merge(quickSort($left), array($pivot_key => $pivot), quickSort($right));
}

printTitle('Sorting one array');
echo 'Original array : ' . PHP_EOL ;
printArray($input);
echo PHP_EOL . 'Sorted array : ' . PHP_EOL;
printArray(quickSort($input));
echo PHP_EOL;

/*
 * -------------------------------------------------------------------------------------------------
 */

/*
 * Merging two arrays
 */

$array1 = [-25, -12, 0, 1, 3, 6, 7, 8, 44];
$array2 = [-9, -8, -1, 6, 7, 12, 44, 100];

function mergeTwoArrays(array $array1, array $array2): array
{
    // Initializing multiple variables used in the algorithm
    $index1 = 0;
    $length1 = sizeof($array1);
    $index2 = 0;
    $length2 = sizeof($array2);
    $indexOutput = 0;
    $interruptLoop = false;
    $output = [];

    // Looping over the first array
    while ($index1 < $length1) {
        // Looping over the second array and checking if we trigger in interrupt
        while ($index2 < $length2 && !$interruptLoop) {
            // Adding element from the second array if lower than the first or interrupting the inner loop
            if ($array2[$index2] < $array1[$index1]) {
                $output[$indexOutput] = $array2[$index2];
                $index2++;
                $indexOutput++;
            } else {
                $interruptLoop = true;
            }
        }
        // If the inner loop is interrupted, we reset the trigger
        $interruptLoop = false;
        // If the second array is not fully covered
        if ($index2 < $length2) {
            // We check if the two current elements are the same, if so we ignore them.
            // Otherwise, we add the element from the first array
            if ($array1[$index1] === $array2[$index2]) {
                $index1++;
                $index2++;
            } else {
                $output[$indexOutput] = $array1[$index1];
                $index1++;
                $indexOutput++;
            }
        // If the second array is fully covered, we add the current element from the first array
        } else {
            $output[$indexOutput] = $array1[$index1];
            $index1++;
            $indexOutput++;
        }
    }

    // We reach this part if the first array is fully covered, we check if there are remaining elements in the second
    while ($index2 < $length2) {
        $output[$indexOutput] = $array2[$index2];
        $index2++;
        $indexOutput++;
    }

    return $output;
}

printTitle('Merging two sorted arrays with redundant elements');
echo 'Original arrays : ' . PHP_EOL;
echo 'Array 1 : ';
printArray($array1);
echo 'Array 2 : ';
printArray($array2);
echo PHP_EOL . 'Resulting array : ';
printArray(mergeTwoArrays($array1, $array2));





/*
 * Helpers functions
 */

function printArray(array $array): void
{
    echo '[';
    for ($i = 0; $i < (sizeof($array) - 1); $i++) {
        echo $array[$i] . ', ';
    }
    echo $array[$i] . ']' . PHP_EOL;
}

function printTitle(string $title): void
{
    echo PHP_EOL . '###' . PHP_EOL . ' ' . $title . PHP_EOL . '###' . PHP_EOL;
}