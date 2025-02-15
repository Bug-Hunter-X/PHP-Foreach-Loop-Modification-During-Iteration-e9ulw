function foo(array $arr) {
  $result = [];
  foreach ($arr as $value) {
    if ($value !== null) {
      $result[] = $value;
    }
  }
  return $result;
}

$arr = [1, 2, null, 4, null, 6];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [2] => 4 [3] => 6 )