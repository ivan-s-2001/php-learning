<?

$lessonIsOpen = false;

function normalizeString(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function startLesson(string $name): void
{
    global $lessonIsOpen;

    endLesson();

    echo "\t\t\t<div class=\"lesson\">\n";
    echo "\t\t\t\t<h3>" . normalizeString($name) . "</h3>\n";

    $lessonIsOpen = true;
}

function endLesson(): void
{
    global $lessonIsOpen;

    if ($lessonIsOpen) {
        echo "\t\t\t</div>\n";
        $lessonIsOpen = false;
    }
}

function codeBlock(string $code): void
{
    echo "\t\t\t\t\t<div class=\"codePreview\">\n";
    echo highlight_string($code, true);
    echo "\n\t\t\t\t\t</div>\n";
}

function task(array $data): void
{
    $num = $data['num'] ?? 0;
    $text = $data['text'] ?? '';
    $code = $data['code'] ?? '';
    $solution = $data['solution'] ?? '';

    echo "\t\t\t\t<div class=\"task\">\n";
    echo "\t\t\t\t\t<h4>Задача " . $num . "</h4>\n";
    echo "\t\t\t\t\t<p>" . $text . "</p>\n";

    if ($code !== '') {
        codeBlock($code);
    }

    if ($solution !== '') {
        echo "\t\t\t\t<div class=\"result\">\n";
        echo "\t\t\t\t\t<div class=\"resultTitle\">Код решения:</div>\n";
        codeBlock($solution);
        echo "\t\t\t\t\t<div class=\"resultTitle\">Результат выполнения кода:</div>\n";
        echo "\t\t\t\t\t<div class=\"resultOutput\">\n";
        eval('?>' . $solution);
        echo "\n\t\t\t\t\t</div>\n";
        echo "\t\t\t\t</div>\n";
    }

    echo "\t\t\t\t</div>\n";

}
