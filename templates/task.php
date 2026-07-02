<div class="task" id="<?= $taskId ?>">
    <h4>Задача <?= $taskNumber ?></h4>
    <p><?= $text ?></p>

    <? if (!empty($code)): ?>
        <? includeTemplate('templates/code-block.php', ['code' => $code]); ?>
    <? endif; ?>

    <? if (!empty($solution)): ?>
        <? includeTemplate('templates/solution.php', ['solution' => $solution, 'phpstormPath' => $phpstormPath]); ?>
    <? endif; ?>
</div>