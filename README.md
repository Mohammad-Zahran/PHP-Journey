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

