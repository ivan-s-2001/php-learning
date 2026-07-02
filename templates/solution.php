<div class="result">
    <div class="openFile">
        Чтобы открыть файл решения, откройте Git Bash и выполните следующую команду:
        <div class="gitbash">
            <span class="command-line"><span class="comment"># Перейти в корень проекта</span></span>
            <span class="command-line">cd <span class="path"><?= $_SERVER['DOCUMENT_ROOT']; ?></span></span>
            <span class="command-line"><span class="comment"># Открыть файл в PhpStorm</span></span>
            <span class="command-line"><span
                        class="command">"<?= $phpstormPath ?>"</span> <span
                        class="path">src/blocks/<?= $solution ?></span></span>
        </div>
    </div>
    <? $solution = dirname(__DIR__) . '/src/blocks/' . $solution; ?>
    <div class="resultTitle">Код решения:</div>
    <? includeTemplate('templates/code-block.php', ['code' => file_get_contents($solution)]); ?>
    <div class="resultTitle">Результат выполнения кода:</div>
    <? ob_start(); ?>
    <? include($solution); ?>
    <? $output = ob_get_clean(); ?>
    <div class="result-output-wrapper">
        <? if (trim($output) === ''): ?>
            <div class="warning">Вывод пустой или содержит пустую строку</div>
        <? else: ?>
            <div class="success">Код выполнен успешно</div>
        <? endif; ?>
        <div class="resultOutput"><?= $output ?></div>
    </div>
</div>