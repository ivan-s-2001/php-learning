<?php

class Layout
{
	private bool $lessonIsOpen = false;
	private int $lessonCounter = 1;
	private int $taskCounter = 1;
	private array $structureLesson = [];

	public function normalizeString(string $value): string
	{
		return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
	}

	public function startLesson(string $name): void
	{
		$this->endLesson();
		$lessonId = 'lesson-' . $this->lessonCounter;
		$this->structureLesson[$this->lessonCounter] = ['title' => $name, 'tasks' => []];
		$this->lessonCounter++;

		$this->includeTemplate('templates/lesson-start.php', [
			'lessonId' => $lessonId,
			'name' => $name,
		]);

		$this->lessonIsOpen = true;
	}

	public function endLesson(): void
	{
		if ($this->lessonIsOpen) {
			$this->includeTemplate('templates/lesson-end.php');
			$this->lessonIsOpen = false;
		}
	}

	public function text(string $text): void
	{
		$this->includeTemplate('templates/text.php', [
			'text' => $text,
		]);
	}

	public function codeBlock(string $code): void
	{
		$this->includeTemplate('templates/code-block.php', [
			'code' => $code,
		]);
	}

	public function task(array $data): void
	{
		$text = $data['text'] ?? '';
		$code = $data['code'] ?? '';
		$solution = $data['solution'] ?? '';
		$taskId = 'task-' . $this->taskCounter;

		$lastLessonKey = array_key_last($this->structureLesson);
		$this->structureLesson[$lastLessonKey]['tasks'][] = [
			'id' => $this->taskCounter,
			'local' => count($this->structureLesson[$lastLessonKey]['tasks']) + 1,
		];

		$taskNumberInLesson = count($this->structureLesson[$lastLessonKey]['tasks']);
		$this->taskCounter++;

		$this->includeTemplate('templates/task.php', [
			'taskId' => $taskId,
			'taskNumber' => $taskNumberInLesson,
			'text' => $text,
			'code' => $code,
			'solution' => $solution,
		]);
	}

	public function getStructureLesson(): array
	{
		return $this->structureLesson;
	}

	public function getTaskCounter(): int
	{
		return $this->taskCounter;
	}

	public function evalCode(string $code): string
	{
		ob_start();
		eval('?>' . $code);
		return trim(ob_get_clean());
	}

	public function includeTemplate(string $template, array $params = []): void
	{
		$templatePath = __DIR__ . '/../' . $template;
		if (!file_exists($templatePath)) {
			throw new Exception("Template not found: {$template}");
		}

		extract($params);
		include $templatePath;
	}
}

$layout = new Layout();