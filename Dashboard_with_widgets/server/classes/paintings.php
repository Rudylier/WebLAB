<?php
require_once "tableModule.php";

class Paintings extends TableModule
{
	protected function getTableName(): string
	{
		return "paintings";
	}
}