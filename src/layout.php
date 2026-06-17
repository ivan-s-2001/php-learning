<?
function normalizeString(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function startPage(string $name): void
{
?>

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
                    <h3><?= normalizeString($name) ?></h3>
<?
}

function endLesson(): void
{
?>
    </div>
<?
}

function codeBlock(string $code): void
{
?>
                    <pre class="codePreview"><?= highlight_string($code, true) ?></pre>
<?
}

function task(int $num, string $text, string $code = ''): void
{
?>
                    <div class="task">
                        <h4>Задача <?= $num ?></h4>
                        <p><?= $text ?></p>
                        <? if ($code !== ''): ?>
                            <? codeBlock($code); ?>
                        <? endif; ?>
                    </div>
<?
}

function result(string $code): void
{
?>
                    <div class="result">
                        <div class="resultTitle">Код решения:</div>
                        <? codeBlock($code); ?>
                        <div class="resultTitle">Результат выполнения кода:</div>
                        <div class="resultOutput">
                            <? eval('?>' . $code) . PHP_EOL ?>
                        </div>
                    </div>
<?
}
?>