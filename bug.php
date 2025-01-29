```php
function increment_array_values(array &$arr): void {
    foreach ($arr as &$value) {
        $value++;
    }
}

$arr = [1, 2, 3];
increment_array_values($arr);
print_r($arr); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

$arr = ['a' => 1, 'b' => 2, 'c' => 3];
increment_array_values($arr);
print_r($arr); // Output: Array ( [a] => 2 [b] => 3 [c] => 4 )

$arr = [1, 2, 'a'];
increment_array_values($arr); // Notice: Only numeric values are incremented
print_r($arr); // Output: Array ( [0] => 2 [1] => 3 [2] => a )
```