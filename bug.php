```php
function processData(array $data): array {
  // ... some processing ...
  return $data;
}

$myData = [1, 2, 3];
$processedData = processData($myData);

// Unexpected behavior if processData modifies $myData in place
// instead of creating a new array.
```