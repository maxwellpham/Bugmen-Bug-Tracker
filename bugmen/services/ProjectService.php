<?php
function getFreshID()
{
    $pid = sqlQuery("SELECT MAX(id)+1 AS id FROM project");
    return $id['id'] === null ? 1 : $id['id'];
}

function getAllProjects()
{
    include ('./DBconfig.php');
    $sql = "SELECT id, pname FROM project ORDER BY id";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $row;
}

function getOneProjectByID($id)
{
    include ('./DBconfig.php');
    $sql = "SELECT p.id,
                   p.pname
                   FROM project as p
                   WHERE id = ?";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    return $row;
}

function getOneProjectByName($pname)
{
    include ('./DBconfig.php');
    $sql = "SELECT p.id,
                   p.pname
                   FROM project as p
                   WHERE pname = ?";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    return $row;
}



function insert($data)
{
    /*
    $fresh_id = $this->getFreshID();

    $sql = " INSERT INTO project SET";
    $sql .= "     id=?,";
    $sql .= "	  pname=?";

    $results = sqlInsert(
        $sql,
        array(
            $fresh_id,
            $data["pname"],
        )
    );

    if ($results) {
        return $fresh_id;
    }

    return $results;*/
}

function update($id, $data)
{
    /*$sql = " UPDATE project SET";
    $sql .= "     pname=?,";

    return sqlStatement(
        $sql,
        array(
            $data["pname"],
            $id
        )
    );*/
}
?>