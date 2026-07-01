<div class="result">
    <div class="resultTitle">Код решения:</div>
    <?php
    includeTemplate('templates/code-block.php', ['code' => $solution]); ?>
    <div class="resultTitle">Результат выполнения кода:</div>
    <div class="resultOutput"><?= evalCode($solution) ?></div>
</div>