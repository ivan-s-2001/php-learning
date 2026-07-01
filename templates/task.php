<div class="task" id="<?= $taskId ?>">
    <h4>Задача <?= $taskNumber ?></h4>
    <p><?= $text ?></p>

	<?php
	if (!empty($code)): ?>
		<?php
		includeTemplate('templates/code-block.php', ['code' => $code]); ?>
	<?php
	endif; ?>

	<?php
	if (!empty($solution)): ?>
		<?php
		includeTemplate('templates/solution.php', ['solution' => $solution]); ?>
	<?php
	endif; ?>
</div>