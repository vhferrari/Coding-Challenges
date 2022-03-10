function fourthBit($number) {
    // Write your code here
    $binary = decbin($number);
    return substr($binary,-4,1);
}
