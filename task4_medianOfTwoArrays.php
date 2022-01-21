<?php

class Solution
{
    /**
     * @param array $nums1
     * @param array $nums2
     * @return float
     */
    public static function findMedianSortedArrays(array $nums1, array $nums2): float
    {
        $i = 0;
        $j = 0;
        $iterator = 0;
        $middleLeft = -1;
        $middle = 1;

        $nums1Size = count($nums1);
        $nums2Size = count($nums2);

        for ($iterator = 0; $iterator <= ($nums1Size + $nums2Size) / 2; $iterator++) {

        }

        return 0.0;
    }

    public static function testFunction(array $nums1, array $nums2): float
    {
        $temp = array_merge($nums1, $nums2);
        sort($temp);
        print_r($temp);

        $size = count($temp);
        echo "Size: $size\n";

        if ($size === 0) {
            return 0.0;
        }

        $index = intdiv($size, 2);
        $median = 0.0;
        if ($size % 2 === 0) {
            $index--;
            $firstOperand = $temp[$index];
            $secondOperand = $temp[$index + 1];
            $median = (float) (($firstOperand + $secondOperand) / 2);

            echo "Size is even. Median: $firstOperand + $secondOperand / 2 = $median\n";
        } else {
            $median = (float) $temp[$index];

            echo "Size is odd. Median: $median\n";
        }

        return $median;
    }
}

// $nums1 = [];
// $nums2 = [];
$nums1 = [1, 3];
$nums2 = [2];

// Solution::findMedianSortedArrays($nums1, $nums2);
Solution::testFunction($nums1, $nums2);
