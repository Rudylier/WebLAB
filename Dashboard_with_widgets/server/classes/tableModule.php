<?php
require_once "singleton.php";

abstract class TableModule
{
	abstract protected function getTableName(): string;

	public function read()
	{
        $name = $this->getTableName();
        $sql = "SELECT * FROM " . $name;
		$query = Singleton::prepare($sql);
		$query->execute([]);
		$result = array();
		while ($slice = $query->fetch()) {
			$result[] = $slice;
		}
		return $result;
	}

	public function max(){
        $name = $this->getTableName();
        $cost = "";
        if($name == "paintings"){
            $cost = "cost";
        }
        else if($name == "authors"){
            $cost = "income";
        }
        $query = Singleton::prepare("SELECT * FROM " . $name . " ORDER BY " . $cost . " DESC LIMIT 1");
        $query->execute([]);
        $result = array();
        while ($slice = $query->fetch()) {
            $result[] = $slice;
        }
        return $result;
    }

	public function sum(){
        $name = $this->getTableName();
        $cost = "";
        if($name == "paintings"){
            $cost = "cost";
        }
        else if($name == "authors"){
            $cost = "income";
        }
        $query = Singleton::prepare("SELECT SUM(" . $cost . ") FROM " .$name);
        $query->execute([]);
        $result = array();
        while ($slice = $query->fetch()) {
            $result[] = $slice;
        }
        return $result;
    }

	public function count(){
		$name = $this->getTableName();
        $query = Singleton::prepare("SELECT COUNT(*) FROM ". $name);
        $query->execute([]);
        $result = array();
        while ($slice = $query->fetch()) {
            $result[] = $slice;
        }
        return $result;
    }

    public function line(){
		$name = $this->getTableName();
        $query = Singleton::prepare("SELECT MONTH(register_date) AS month, COUNT(*) AS num_authors FROM authors GROUP BY MONTH(register_date);");
        $query->execute([]);
        $result = array();
        while ($slice = $query->fetch()) {
            $result[] = $slice;
        }
        return $result;
    }

    public function pie(){
        $query = Singleton::prepare("SELECT type_id, COUNT(*) as num_of_types FROM paintings GROUP BY type_id;");
        $query->execute([]);
        $result = array();
        while ($slice = $query->fetch()) {
            $result[] = $slice;
        }
        return $result;
    }
}