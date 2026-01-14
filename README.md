# Grade-System-using-PHP

It's stage 1 in your PHP language learning journey

project (7) : Grade-System-using-PHP


You will build a Grade System using PHP.
The program should:

    Take a student’s score from the user (0 → 100)
    Analyze the score
    Display the grade based on predefined rules

This project focuses on:

    if / else if / else
    Logical comparisons
    Input validation
    Clear backend decision logic

Grading Rules 

    Score Range	Grade
    90 – 100	A
    80 – 89	B
    70 – 79	C
    60 – 69	D
    0  – 59	F

Requirements 

    Use an HTML form to accept the score
    Use GET
    Check input using isset()
    Validate that the score is between 0 and 100

Display:

    The entered score
    The calculated grade
    Handle invalid input gracefully

Example Output 

Input:

    85
    
Output:

    Score: 85
    Grade: B

------------------------------------------------------

 Comparison Operators in PHP

Comparison operators are used to compare two values.
 They return a boolean value (true or false).

 List of comparison operators:

1. Equal (==)
   
            // Compares values only (not types)
            $a = 5;
            $b = "5";
            var_dump($a == $b);   // true

2. Identical (===)
   
            // Compares value AND type
            var_dump($a === $b);  // false

3. Not equal (!= or <>)
   
            var_dump($a != $b);   // false

4. Not identical (!==)
   
            var_dump($a !== $b);  // true

5. Greater than (>)
   
            var_dump($a > 3);     // true

6. Less than (<)
   
            var_dump($a < 10);    // true

7. Greater than or equal (>=)
   
            var_dump($a >= 5);    // true

8. Less than or equal (<=)
   
            var_dump($a <= 5);    // true

Spaceship operator (<=>)

        // Returns:
        //  0  → if both values are equal
        //  1  → if left is greater
        // -1  → if left is smaller

example :

        echo 5 <=> 5;   // 0
        echo 10 <=> 5;  // 1
        echo 3 <=> 5;   // -1


