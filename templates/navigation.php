<div class="task-nav">
    <? $structureLesson = getStructureLesson(); ?>
    <? if (!empty($structureLesson)): ?>
    <? foreach ($structureLesson as $lessonNum => $lesson): ?>
    <div class="lesson-nav">
        <a href="#lesson-<?= $lessonNum ?>" class="lesson-link"><?= normalizeString($lesson['title']) ?></a>
        <? if (!empty($lesson['tasks'])): ?>
            <ul class="task-list">
        <? foreach ($lesson['tasks'] as $task): ?>
                <li>
                    <a href="#task-<?= $task['id'] ?>">Задача <?= $task['local'] ?></a>
                </li>
            <? endforeach; ?>
            </ul>
        <? endif; ?>
    </div>
    <? endforeach; ?>
    <? else: ?>
    <p>Нет доступных уроков</p>
    <? endif; ?>
</div>