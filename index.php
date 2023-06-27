<?php

$item = 0;

for (; $item <= 10; $item ++) {
    echo  $item;
}
echo '<br>';

$post = 0;
$postsMax = 14;

while ($post <= 20) {
    echo $post * $postsMax;

    $post ++;
}

echo '<br>';

$post3 = 100;
$postsMax3 = 14;

while ($post3 > 10) {
    echo $post3 * $postsMax3;

    $post3 --;
}

echo '<br>';

$gramme = 1;

while ($gramme <= 10) {
    echo $gramme;

    $gramme += $gramme/2;
}

for ($i = 1; $i <= 15; $i ++) {
    echo 'On y arrive presque';
}

for ($i = 20; $i >= 0; $i --) {
    echo 'C\'est presque bon';
}

for ($i = 1; $i <= 100; $i+=15) {
    echo 'On tient le bon bout';
}

for ($i = 200; $i >= 0; $i-=12) {
    echo 'Enfin !!!!';
}

?>
