<?php
for ($i = 10; $i >= 1; $i--) {
    echo "<div style='display: flex;'>";
    for ($j = 1; $j <= $i; $j++) {
        echo "<div style='width: 20px; height: 20px; border: 1px solid black; text-align: center; background-color:red'>$j</div>";
    }
    echo "</div>";
}
?>