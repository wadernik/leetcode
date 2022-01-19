<?php
class ListNode
{
    public $val = 0;
    public $next;

    public function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution
{
    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    public static function addTwoNumbers(ListNode $l1, ListNode $l2): ListNode
    {
        $remainder = 0;
        $head = new ListNode(null);
        $current = $head;

        while (isset($l1) || isset($l2)) {
            $firstVal = $l1->val ?? 0;
            $secondVal = $l2->val ?? 0;
            $sum = $firstVal + $secondVal + $remainder;
            $remainder = intdiv($sum, 10);

            $current->next = new ListNode($sum % 10);
            $current = $current->next;

            $l1 = $l1->next ?? null;
            $l2 = $l2->next ?? null;
        }

        if ($remainder > 0) {
            $current->next = new ListNode($remainder);
        }

        return $head->next;
    }

    public static function printList(ListNode $list): void
    {
        while ($list !== null) {
            echo $list->val . " | ";
            $list = $list->next;
        }

        echo "\n";
    }

    public static function buildAndExecuteNodes(): void
    {
        $firstList = [5, 6];
        $secondList = [5, 4, 9];

        $firstListNodes = [];
        $secondListNodes = [];

        foreach ($firstList as $val) {
            $node = new ListNode($val, null);
            $firstListNodes[] = $node;
        }

        foreach ($firstListNodes as $key => $node) {
            $node->next = $firstListNodes[$key + 1] ?? null;
        }

        $node = null;

        foreach ($secondList as $val) {
            $node = new ListNode($val, null);
            $secondListNodes[] = $node;
        }

        foreach ($secondListNodes as $key => $node) {
            $node->next = $secondListNodes[$key + 1] ?? null;
        }

        $sum = self::addTwoNumbers($firstListNodes[0], $secondListNodes[0]);

        self::printList($sum);

        // print_r($sum);
    }
}

Solution::buildAndExecuteNodes();
