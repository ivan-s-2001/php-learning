<div class="task-nav">
    <?php
    $structureLesson = getStructureLesson(); ?>
    <?php
    if (!empty($structureLesson)): ?>
        <?php
        foreach ($structureLesson as $lessonNum => $lesson): ?>
            <div class="lesson-nav">
                <a href="#lesson-<?= $lessonNum ?>" class="lesson-link">
                    <?= normalizeString($lesson['title']) ?>
                </a>
                <?php
                if (!empty($lesson['tasks'])): ?>
                    <ul class="task-list">
                        <?php
                        foreach ($lesson['tasks'] as $task): ?>
                            <li>
                                <a href="#task-<?= $task['id'] ?>">
                                    Задача <?= $task['local'] ?>
                                </a>
                            </li>
                        <?php
                        endforeach; ?>
                    </ul>
                <?php
                endif; ?>
            </div>
        <?php
        endforeach; ?>
    <?php
    else: ?>
        <p>Нет доступных уроков</p>
    <?php
    endif; ?>
</div>