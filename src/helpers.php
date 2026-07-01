<?php

function normalizeString(string $value): string
{
	global $layout;
	return $layout->normalizeString($value);
}

function startLesson(string $name): void
{
	global $layout;
	$layout->startLesson($name);
}

function endLesson(): void
{
	global $layout;
	$layout->endLesson();
}

function text(string $text): void
{
	global $layout;
	$layout->text($text);
}

function codeBlock(string $code): void
{
	global $layout;
	$layout->codeBlock($code);
}

function task(array $data): void
{
	global $layout;
	$layout->task($data);
}

function getStructureLesson(): array
{
	global $layout;
	return $layout->getStructureLesson();
}

function getTaskCounter(): int
{
	global $layout;
	return $layout->getTaskCounter();
}

function includeTemplate(string $template, array $params = []): void
{
	global $layout;
	$layout->includeTemplate($template, $params);
}

function evalCode(string $code): string
{
	global $layout;
	return $layout->evalCode($code);
}