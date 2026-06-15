<?
function normalString(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function startPage(string $name): void
{
    echo '<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . normalString($name) . '</title>
    <link rel="stylesheet" href="./resources/css/app.css">
</head>
<body>
<div class="page">
    <h1>' . normalString($name) . '</h1>';
}

function endPage(): void
{
    echo '</div>
</body>
</html>';
}

function startLesson(string $name): void
{
    echo '<div class="lesson">
        <h2>' . $name . '</h2>';
}

function endLesson(): void
{
    echo '</div>';
}

function hint(string $html): void
{
    echo '<div class="hint">
<p>' . $html . '</p>
</div>';
}

function codeBlock(string $code): void
{
    echo '<pre><code>' . normalString($code) . '</code></pre>';
}

function task(int $num, string $task): void
{
    echo '<div class="task">
        <h3>Задача ' . $num . '</h3>
        <p>' . $task . '</p>
    </div>';
}

function startResult(): void
{
    echo '<div class="result">
        <h3>Решение</h3>';
}

function endResult(): void
{
    echo '</div>';
}
?>
