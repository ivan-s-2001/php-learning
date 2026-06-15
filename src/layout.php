<?

if (!function_exists('mb_strlen')) {
    function mb_strlen(string $value): int
    {
        preg_match_all('/./us', $value, $matches);

        return count($matches[0]);
    }
}

function e(string $value): string
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
    <title>' . e($name) . '</title>
    <link rel="stylesheet" href="./resources/css/app.css">
</head>
<body>
<div class="page">
    <h1>' . e($name) . '</h1>';
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
        <h2>' . e($name) . '</h2>';
}

function endLesson(): void
{
    echo '</div>';
}

function hint(string $html): void
{
    echo '<div class="hint">' . $html . '</div>';
}

function codeBlock(string $code): void
{
    echo '<pre><code>' . e($code) . '</code></pre>';
}

function task(int $num, string $html): void
{
    echo '<div class="task">
        <h3>Задача ' . $num . '</h3>
        <p>' . $html . '</p>
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
