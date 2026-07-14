<?
$str = 'The quick brown fox jumps over the lazy dog';
$words = str_word_count($str, 1);
$count = 0;
foreach ($words as $word) {
    if (strlen($word) > 3) {
        $count++;
    }
}
echo $count;
?>