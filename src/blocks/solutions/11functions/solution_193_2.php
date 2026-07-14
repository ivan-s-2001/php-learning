<?
function checkNum(float $num): string
{
    return (($num >0) ? "+++" : "---");
}

echo checkNum(10) . '<br>';
echo checkNum(-10);
?>