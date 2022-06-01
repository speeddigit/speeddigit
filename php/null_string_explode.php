<?php 

$name = 'ERP POS';

$strArr = explode(' ', $name);

echo $strArr[0] . ' # ';

echo isset($strArr[1]) ? $strArr[1] : '' ;
