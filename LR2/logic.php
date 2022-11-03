<?php

$server = "127.0.0.1";
$login = "root";
$pass= "";
$name_db = "exhibition";
$linc = mysqli_connect($server,$login,$pass,$name_db);

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
    $Date_start = $linc->real_escape_string($_POST['Date_start']);
    $Date_end = $linc->real_escape_string($_POST['Date_end']);
    $HallName = $linc->real_escape_string($_POST['HallName']);
    $description = $linc->real_escape_string($_POST['description']);
    $Name = $linc->real_escape_string($_POST['Name']);
    $where = "";
    if ($Date_start) $where = addWhere($where, "`Date` >= '". $Date_start)."'";
    if ($Date_end) $where = addWhere($where, "`Date` <= '". $Date_end)."'"; 
    if ($HallName) $where = addWhere($where, "`HallName` LIKE'%". $HallName."%")."'";
    if ($description) $where = addWhere($where, "`description` LIKE'%". $description."%")."'";   
    if ($Name) $where = addWhere($where, "`Name` LIKE'%". $Name."%")."'"; 
    if ($where) $sql .= " WHERE $where";
}
$sql.=" ORDER BY Date";

?>
