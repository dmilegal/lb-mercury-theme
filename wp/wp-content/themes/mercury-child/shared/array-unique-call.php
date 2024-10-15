<?
/**
* Remove duplicate elements from an array by comparison callback.
*
* @param array $array : An array to eliminate duplicates by callback
* @param callable $callback : Callback accepting an array element returning the value to compare.
* @param bool $preserveKeys : Add true if the keys should be perserved (note that if duplicates eliminated the first key is used).
* @return array: An array unique by the given callback
*/
function array_unique_call(array $array, callable $callback, bool $preserveKeys = false): array
{
    $unique = array_intersect_key($array, array_unique(array_map($callback, $array)));
    return ($preserveKeys) ? $unique : array_values($unique);
}