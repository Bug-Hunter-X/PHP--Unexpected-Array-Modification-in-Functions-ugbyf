```php
function processData(array $data): array {
  // Create a copy to avoid modifying the original array
  $newData = $data;
  // ... some processing on $newData ...
  return $newData;
}

$myData = [1, 2, 3];
$processedData = processData($myData);

// Now $myData remains unchanged
// and $processedData holds the modified copy
```