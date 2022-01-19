<?php

class Solution
{
    /**
     * @param array $nums
     * @param int $target
     * @return array
     */
    public function twoSum(array $nums, int $target): array
    {
        $arr = [];

        foreach ($nums as $key => $num) {
            if (isset($arr[$target - $num])) {
                return [$arr[$target - $num], $key];
            }

            $arr[$num] = $key;
        }

        return [];
    }
}
