# PHP-Journey

Palidrome.php trace:

the number is 103 let us say.

The reverse function:
i = 103
remainder = 0 initilized at 0
Rev = 0 initilized at 0

1st Iteration
the while loop will loop until i=0
remainder = 103%10 => 3
Rev = Rev * 10 + remainder => 0*10 + 3 => 3
i = (int)(i/10) => 10 since we need our solution to be int to its base form

remainder = 3
Rev = 3
i = 10

2nd Iteration
remainder = 10%10 = 0
Rev = 3 * 10 + 0 = 30
i = 10/10 = 1

remainder = 0
Rev = 30
i = 1

3rd Iteration:
remainder = 1%10 = 1
Rev = 30*10 + 1 = 301
i = (int)(1/10) = 0


Out of the loop

Returned Rev of 301

we will go to isPalindrome to check if 103==301 if not then not palindrom

____________________________________________________________________________________________________________________


MergeSort.php Trace:
$array = [12, 31, 25, 8, 32, 17, 40, 42];

MergeSort($array, 0, count($array) - 1);

in this Function it will take the array as parameter and 0 as the begining of the array, count array = 8 -1 = 7

MergeSort():

We will check if start < end: in this case 0<7 it will go into the if statement

middle = start + end / 2 = 0 + 7/2 => 7/2 = 3.5=> [3]
start = 0, end = 7, middle = 3.

First Recursive Call: 
MergeSort($a, $start, $middle);
MergeSort($array,0,3):
middle = 0+3/2 = [1]
start = 0, end = 7, middle = 1.


2nd Recursive Call:
if(start< end) => 0<7 true
middle = 0+1/2 = [0]
start = 0, end = 1, middle = 0

3rd Recursive Call:
start < end? true 0<1
middle = 0+0/2 = 0
start = 0, end = 0. Base case (array of one element). Return.

4th recursice Call:
start < end ? false start = end
start = 1, end = 1. Base case. Return.

We will Now have the First Merge
Merge($array, 0, 0, 1);
Left array: [12], Right array: [31].
Result: [12, 31]

Fifth Recursive Call (Right Half of Left Half):
MergeSort($array, 2, 3);
start = 2, end = 3, middle = 2.

Sixth Recursive Call (Single Element):
MergeSort($array, 2, 2);
start = 2, end = 2. Base case. Return.

Seventh Recursive Call (Single Element):
MergeSort($array, 3, 3);
start = 3, end = 3. Base case. Return.

Second Merge:
Merge($array, 2, 2, 3);
Left array: [25], Right array: [8].
Result: [8, 25].

Third Merge:
Merge($array, 0, 1, 3);
Left array: [12, 31], Right array: [8, 25].
Result: [8, 12, 25, 31].

It will continue till the end of the algorithim until the final Merge:
Merge($array, 0, 3, 7);
Left array: [8, 12, 25, 31], Right array: [17, 32, 40, 42].
Result: [8, 12, 17, 25, 31, 32, 40, 42].











