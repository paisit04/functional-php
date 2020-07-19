<?php

function odd(int $a): bool
{
    return $a % 2 === 1;
}

$filtered = array_filter([1, 2, 3, 4, 5, 6], 'odd');
/* $filtered contains [1, 3, 5] */

?>

<?php

$filtered = array_filter(["one", "two", "", "three", ""]);
/* $filtered contains ["one", "two", "three"] */

$filtered = array_filter([0, 1, null, 2, [], 3, 0.0]);
/* $filtered contains [1, 2, 3] */

$filtered = array_filter(["account_id"=> 0, "name" => "john", "address" => ""]);
/* $filtered contains ["name" => "john"] */
?>

<?php

$data = [];

function key_only($key)
{
    // [...]
}

$filtered = array_filter($data, 'key_only', ARRAY_FILTER_USE_KEY);

function both($value, $key)
{
    // [...]
}

$filtered = array_filter($data, 'both', ARRAY_FILTER_USE_BOTH);

?>
