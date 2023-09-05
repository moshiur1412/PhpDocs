<?php
# 1. Simple Output -->
/* Outputs: 
this is a simple string
*/
echo 'this is a simple string' . PHP_EOL;



# 2. Line Break -->
/* Outputs: 
You can also have embedded newlines in
strings this way as it is
okay to do
*/
echo 'You can also have embedded newlines in
strings this way as it is
okay to do' . PHP_EOL;



# 3. Double Quotation (" ") -->
/* Outputs:
Arnold once said: "I'll be back"
*/
echo 'Arnold once said: "I\'ll be back"' . PHP_EOL;



# 4. Backsplash (\) Solution 01 -->
/* Outputs:
You deleted C:\*.*?
*/
echo 'You deleted C:\\*.*?' . PHP_EOL;



# 5. Backsplash (\) Solution 02 -->
/* Outputs:
You deleted C:\*.*?
*/
echo 'You deleted C:\*.*?' . PHP_EOL;



# 6. New Line (\n) -->
/* Outputs:
This will not expand: \n a newline
*/
echo 'This will not expand: \n a newline' . PHP_EOL;



# 7. Variable ($value) -->
/* Outputs:
Variables do not $expand $either
*/
echo 'Variables do not $expand $either' . PHP_EOL;


?>