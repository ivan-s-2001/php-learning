<?
function normalizeString(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function startPage(string $name): void
{
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= normalizeString($name) ?></title>
    <link rel="stylesheet" href="./resources/css/app.css">
</head>
<body>
<div class="page">
    <h1><?= normalizeString($name) ?></h1>
<?
}

function endPage(): void
{
?>
</div>
</body>
</html>
<?
}

function startLesson(string $name): void
{
?>
    <div class="lesson">
        <h2><?= normalizeString($name) ?></h2>
<?
}

function endLesson(): void
{
?>
    </div>
<?
}

function hint(string $hint): void
{
?>
        <div class="hint">
            <?= $hint . "\n" ?>
        </div>
<?
}

function codeBlock(string $code): void
{
?>
        <pre><code><?= normalizeString($code) ?></code>
        </pre>
<?
}

function task(int $num, string $task): void
{
?>
        <div class="task">
            <h3>Задача <?= $num ?></h3>
            <p><?= $task ?></p>
        </div>
<?
}

function startResult(): void
{
?>
        <div class="result">
            <h3>Решение</h3>
<?
}

function endResult(): void
{
?>

        </div>
<?
}
?>
