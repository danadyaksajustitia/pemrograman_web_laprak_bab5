<?php

function pangkat($x, $y) {
    if ($y == 0) {
        return 1;
    }

    return $x * pangkat($x, $y - 1);
}

echo "2 pangkat 3 = " . pangkat(2, 3) . "<br>";
echo "3 pangkat 2 = " . pangkat(3, 2) . "<br>";
echo "5 pangkat 3 = " . pangkat(5, 3) . "<br>";

?>