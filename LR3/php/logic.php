<?php
require_once 'connect.php';
if(isset($_POST['reset'] ) ) {
    $_POST['Name'] = "";
    $_POST['description'] = "";
    $_POST['HallName'] = "";
    $_POST['Date_start'] = "";
    $_POST['Date_end'] = "";
}

function addWhere($where,$add,$and = true){
    if ($where) {
        if ($and) $where .= " AND $add";
        else $where .= " OR $add";
    }
    else $where = $add;
        return $where;
}
$sql = "SELECT * FROM paintings INNER JOIN hall ON hall.id = paintings.id_hall";
if (isset($_POST['filter'])) {
    $where = "";
    if ($_POST["Date_start"]) $where = addWhere($where, "`Date` >= '".htmlspecialchars($_POST["Date_start"]))."'"; 
    if ($_POST["Date_end"]) $where = addWhere($where, "`Date` <= '".htmlspecialchars($_POST["Date_end"]))."'";
    if ($_POST["HallName"])   $where = addWhere($where, "`HallName` LIKE'%".htmlspecialchars($_POST["HallName"])."%")."'";
    if ($_POST["description"])   $where = addWhere($where, "`description` LIKE'%".mysqli_real_escape_string($linc,$_POST["description"])."%")."'"; 
    if ($_POST["Name"])   $where = addWhere($where, "`Name` LIKE'%".mysqli_real_escape_string($linc,$_POST["Name"])."%")."'"; 
    if ($where) $sql .= " WHERE $where";
    $sql.=" ORDER BY Date";
}
else
    $sql.=" ORDER BY Date";


?>
