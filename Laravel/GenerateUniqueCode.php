<?php 



public function generate(string $table, string $column = 'code', string $prefix = '', int $digits = 4, int $size = 13, string $splitter = '-', string $suffixSeparator = ''): string
{
    $entryRaw = DB::table($table)->orderBy('id', 'desc')->first(["$column"]);
    $prefix = strlen($prefix) === 0 ? strtoupper(substr($table, 0, 3)) : $prefix;
    $dateTimeStrPrefix = date('ymd');
    $splitterLength = strlen($splitter);
    $dateTimeStrPrefixLength = strlen($dateTimeStrPrefix);
    $prefixLength = strlen($prefix);
    $suffixSeparatorLength = strlen($suffixSeparator);
    $minSize = $prefixLength + $splitterLength + $dateTimeStrPrefixLength + $digits;
    $size = ($size < $minSize) ? $minSize : $size;
    if (isset($entryRaw)) {
        $entry = $entryRaw->$column;
        $suffixArr = preg_split("/([\\$splitter\-\#\*\--])/", $entry, -1, PREG_SPLIT_NO_EMPTY);
        $suffixStr = trim(array_pop($suffixArr));
        $suffixLength = strlen($suffixStr);
        $lastDigits = substr($suffixStr, 6, strlen($suffixStr));
        $lastDigitsNextValue = intval($lastDigits) + 1;
    } else {
        $lastDigitsNextValue = 1;
    }
    $lastDigitsLength = ($size - ($prefixLength + $dateTimeStrPrefixLength)) - 1;
    $lastDigitsFinal =  str_pad($lastDigitsNextValue, $lastDigitsLength, "0", STR_PAD_LEFT);
    $finalSuffix = $dateTimeStrPrefix . $suffixSeparator . $lastDigitsFinal;
    $finalStr = $prefix . $splitter . $finalSuffix;
    return $finalStr;
}

