<?php
require_once "tableModule.php";

class Type extends TableModule
{
	protected function getTableName(): string
	{
		return "type";
	}
}