<?php
$conjunto = array(1, 2, 3, 6, 5);
echo "for:";
for ($i = 0; $i < count($conjunto); $i++) {
    echo "". $conjunto[$i] ."";
}
echo "<br>[foreach]: ";
foreach ($conjunto as $dado) {
echo "$dado ";
}
