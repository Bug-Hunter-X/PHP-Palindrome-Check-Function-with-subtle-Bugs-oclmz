```php
function isPalindrome(string $str): bool {
    // Handle edge cases: empty or single-character strings
    if (strlen($str) < 2) {
        return true;
    }

    // Remove spaces and convert to lowercase for case-insensitive comparison
    $str = strtolower(str_replace(' ', '', $str));

    // Efficient comparison using strrev()
    return $str === strrev($str);
}

$string1 = "Race car";
$string2 = "madam";
$string3 = "";
$string4 = "a";
$string5 = "A man, a plan, a canal: Panama";

var_dump(isPalindrome($string1)); // true
var_dump(isPalindrome($string2)); // true
var_dump(isPalindrome($string3)); // true
var_dump(isPalindrome($string4)); // true
var_dump(isPalindrome($string5)); // true
```