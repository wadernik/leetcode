<?php

class Solution
{
    public static function lengthOfLongestSubstring(string $string): int
    {
        if ($string === '') {
            return 0;
        }

        if (strlen($string) === 1) {
            return 1;
        }

        $arr = str_split($string);
        $lastIndex = [];
        $maxSubstrLength = 0;
        $j = 0;

        foreach ($arr as $i => $iValue) {
            $j = max($j, ($lastIndex[$iValue] ?? -1) + 1);
            $maxSubstrLength = max($maxSubstrLength, $i - $j + 1);
            echo "$j | $maxSubstrLength\n";
            $lastIndex[$iValue] = $i;
        }

        echo "$maxSubstrLength\n";
        return 0;
    }
}

Solution::lengthOfLongestSubstring('pwwkew');
