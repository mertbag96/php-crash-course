<?php

/* ------------------------ PHP OPERATORS ------------------------ */
/*
Operators are used to perform operations on variables and values.
PHP divides the operators in the following groups:
- Arithmetic operators
- Assignment operators
- Comparison operators
- Increment/Decrement operators
- Logical operators
- String operators
- Array operators
- Conditional assignment operators
*/

$x = 1;
$y = 2;

echo "<h1 style='color: #7a86b8; margin: 0;'>Arithmetic Operators</h1>", "<br>";
echo "
<table>
<thead>
<tr>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Operator</th>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center;'>Name</th>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center;'>Example</th>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center;'>Result</th>
</tr>
</thead>
<tbody>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>+</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Addition</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x + $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Sum of " .'$x and $y' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>-</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Subtraction</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x - $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Difference of " .'$x and $y' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>*</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Multiplication</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x * $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Product of " .'$x and $y' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>/</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Division</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x / $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Quotient of " .'$x and $y' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>%</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Modulus</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x % $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Remainder of " .'$x divided by $y' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>**</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Exponentiation</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x ** $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Result of raising " .'$x to the $y th power' . "</td>
</tr>
</tbody>
</table>
<br><br>
";

echo "<h1 style='color: #7a86b8; margin: 0;'>Assignment Operators</h1>", "<br>";
echo "
<table>
<thead>
<tr>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Assignment</th>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center;'>Same as...</th>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center;'>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>x = y</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>x = y</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>The left operand gets set to the value of the expression on the right</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>x += y</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>x = x + y</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Addition</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>x -= y</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>x = x - y</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Subtraction</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>x *= y</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>x = x * y</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Multiplication</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>x /= y</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>x = x / y</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Division</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>x %= y</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>x = x % y</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Modulus</td>
</tr>
</tbody>
</table>
<br><br>
";

echo "<h1 style='color: #7a86b8; margin: 0;'>Comparison Operators</h1>", "<br>";
echo "
<table>
<thead>
<tr>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Operator</th>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center;'>Name</th>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center;'>Example</th>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center;'>Result</th>
</tr>
</thead>
<tbody>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>==</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Equal</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x == $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Returns true if " .'$x is equal to $y' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>===</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Identical</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x === $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Returns true if " .'$x is equal to $y' . " and they are of the same type</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>!=</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Not equal</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x != $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Returns true if " .'$x is not equal to $y' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'><></td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Not equal</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x <> $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Returns true if " .'$x is not equal to $y' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>!==</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Not identical</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x !== $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Returns true if " .'$x is not equal to $y' . " or they are not of the same type</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>></td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Greater than</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x > $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Returns true if " .'$x is greater than $y' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'><</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Less than</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x < $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Returns true if " .'$x is less than $y' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>>=</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Greater than or equal to</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x >= $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Returns true if " .'$x is greater than or equal to $y' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'><=</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Less than or equal to</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x <= $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Returns true if " .'$x is less than or equal to $y' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'><=></td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Spaceship</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x <=> $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Returns an integer less than, equal to, or greater than zero, depending on if " .'$x is less than, equal to, or greater than $y. Introduced in PHP 7.' . "</td>
</tr>
</tbody>
</table>
<br><br>
";

echo "<h1 style='color: #7a86b8; margin: 0;'>Increment / Decrement Operators</h1>", "<br>";
echo "
<table>
<thead>
<tr>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Operator</th>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center;'>Same as...</th>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center;'>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '++$x' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Pre-increment</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . 'Increments $x by one, then returns $x' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x++' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Post-increment</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . 'Returns $x, then increments $x by one' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '--$x' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Pre-decrement</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . 'Decrements $x by one, then returns $x' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x--' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Post-decrement</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . 'Returns $x, then decrements $x by one' . "</td>
</tr>
</tbody>
</table>
<br><br>
";

echo "<h1 style='color: #7a86b8; margin: 0;'>Logical Operators</h1>", "<br>";
echo "
<table>
<thead>
<tr>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Operator</th>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center;'>Name</th>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center;'>Example</th>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center;'>Result</th>
</tr>
</thead>
<tbody>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>and</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>And</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x and $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>True if both " .'$x and $y are true' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>or</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Or</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x or $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>True if either " .'$x or $y is true' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>xor</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Xor</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x xor $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>True if either " .'$x or $y is true but not both' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>&&</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>And</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x && $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>True if both " .'$x and $y are true' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>||</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Or</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x || $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>True if either " .'$x or $y is true' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>!</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Not</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$x ! $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>True if " .'$x is not true' . "</td>
</tr>
</tbody>
</table>
<br><br>
";

echo "<h1 style='color: #7a86b8; margin: 0;'>String Operators</h1>", "<br>";
echo "
<table>
<thead>
<tr>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Operator</th>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center;'>Name</th>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center;'>Example</th>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center;'>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>.</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Concatenation</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$txt1 . $txt2' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . 'Concatenation of $txt1 and $txt2' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '.=' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Concatenation assignment</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '$txt1 .= $txt2' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . 'Appends $txt2 to $txt1' . "</td>
</tr>
</tbody>
</table>
<br><br>
";

echo "<h1 style='color: #7a86b8; margin: 0;'>Array Operators</h1>", "<br>";
echo "
<table>
<thead>
<tr>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Operator</th>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center;'>Name</th>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center;'>Example</th>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center;'>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>+</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Union</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '	$x + $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . 'Union of $x and $y' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>==</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Equality</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '	$x == $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . 'Returns true if $x and $y have the same key/value pairs' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>===</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Identity</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '	$x === $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . 'Returns true if $x and $y have the same key/value pairs in the same order and of the same types' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>!=</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Inequality</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '	$x != $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . 'Returns true if $x is not equal to $y' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'><></td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Inequality</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '	$x <> $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . 'Returns true if $x is not equal to $y' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>!==</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>	Non-identity</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . '	$x !== $y' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . 'Returns true if $x is not identical to $y' . "</td>
</tr>
</tbody>
</table>
<br><br>
";

echo "<h1 style='color: #7a86b8; margin: 0;'>Conditional Assignment Operators</h1>", "<br>";
echo "
<table>
<thead>
<tr>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Operator</th>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center;'>Name</th>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center;'>Example</th>
<th style='border: 1px solid black; padding: .5rem 4rem; text-align: center;'>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>?:</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Ternary</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . ' $x = expr1 ? expr2 : expr3 ' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . 'Returns the value of $x' . "<br>" . 'The value of $x is expr2 if expr1 = TRUE' . "<br>" . 'The value of $x is expr3 if expr1 = FALSE' . "</td>
</tr>
<tr>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>??</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>Null coalescing</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . ' $x = expr1 ?? expr2 ' . "</td>
<td style='border: 1px solid black; padding: .5rem 4rem; text-align: center'>" . 'Returns the value of $x' . "<br>" . 'The value of $x is expr1 if expr1 exists, and is not NULL' . "<br>" . 'If expr1 does not exist, or is NULL, the value of $x is expr2' . "<br>" . 'Introduced in PHP 7' . "</td>
</tr>
</tbody>
</table>
<br><br>
";

?>
