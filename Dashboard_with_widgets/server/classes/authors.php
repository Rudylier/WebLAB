<?php
require_once "tableModule.php";

class Authors extends TableModule
{
	protected function getTableName(): string
	{
		return "authors";
	}
}