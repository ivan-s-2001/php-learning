<?
$str = '<p>aaa</p>
        <b>bbb</b>
        <s>ccc</s>
        <i>ddd</i>';
echo strip_tags($str, '<b><i>');
?>