<?

function normalizeString(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function startLesson(string $name): void
{
    echo "\t\t\t<div class=\"lesson\">\n";
    echo "\t\t\t\t<h3>" . normalizeString($name) . "</h3>\n";
}

function endLesson(): void
{
    echo "\t\t\t</div>\n";
}

function codeBlock(string $code): void
{
    echo "\t\t\t\t\t<pre class=\"codePreview\">\n";
    echo highlight_string($code, true);
    echo "\t\t\t\t\t</pre>\n";
}

function task(int $num, string $text, string $code = ''): void
{
    echo "\t\t\t\t\t<div class=\"task\">\n";
    echo "\t\t\t\t\t\t<h4>Задача {$num}</h4>\n";
    echo "\t\t\t\t\t\t<p>" . $text . "</p>\n";

    if ($code !== '') {
        codeBlock($code);
    }

    echo "\t\t\t\t\t</div>\n";
}

function result(string $code): void
{
    echo "\t\t\t\t\t<div class=\"result\">\n";
    echo "\t\t\t\t\t\t<div class=\"resultTitle\">Код решения:</div>\n";
    codeBlock($code);
    echo "\t\t\t\t\t\t<div class=\"resultTitle\">Результат выполнения кода:</div>\n";
    echo "\t\t\t\t\t\t<div class=\"resultOutput\">\n";
    eval('?>' . $code);
    echo "\n\t\t\t\t\t\t</div>\n";
    echo "\t\t\t\t\t</div>\n";
}

?>