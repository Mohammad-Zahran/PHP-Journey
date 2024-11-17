<?php 

class Node {
    public $data;
    public $next;

    public function __construct($key) {
        $this->data = $key;
        $this->next = null;
    }
}

function printlist($head) {
    if ($head == null) {
        echo "Empty List";
        return;
    }
    while ($head != null) {
        echo $head->data . " ";
        if ($head->next != null) {
            echo "->";
        }
        $head = $head->next;
    }
    echo "<br>";
}

function isVowel($x) {
    return in_array($x, ['a', 'e', 'i', 'o', 'u']);
}

function arrange($head) {
    $newHead = $head;
    $latestVowel = null;
    $curr = $head;

    if ($head == null) {
        return null;
    }

    if (isVowel($head->data)) {
        $latestVowel = $head;
    } else {
        while ($curr->next != null && !isVowel($curr->next->data)) {
            $curr = $curr->next;
        }

        if ($curr->next == null) {
            return $head;
        }

        $latestVowel = $newHead = $curr->next;
        $curr->next = $curr->next->next;
        $latestVowel->next = $head;
    }

    while ($curr != null && $curr->next != null) {
        if (isVowel($curr->next->data)) {
            if ($curr === $latestVowel) {
                $latestVowel = $curr = $curr->next;
            } else {

                $temp = $latestVowel->next;

                $latestVowel->next = $curr->next;

                $latestVowel = $latestVowel->next;

                $curr->next = $curr->next->next;

                $latestVowel->next = $temp;
            }
        } else {

            $curr = $curr->next;
        }
    }

    return $newHead;
}


$head = new Node('b');
$head->next = new Node('c');
$head->next->next = new Node('a');
$head->next->next->next = new Node('x');
$head->next->next->next->next = new Node('e');

echo "Original List: ";
printlist($head);

$head = arrange($head);

// Print the rearranged list
echo "Rearranged List: ";
printlist($head);
?>
