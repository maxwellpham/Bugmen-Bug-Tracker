<?php
class ProjectService
{
	public function getFreshID()
    {
        $pid = sqlQuery("SELECT MAX(id)+1 AS id FROM bug");
        return $id['id'] === null ? 1 : $id['id'];
    }
	
	public function getAllBugs()
    {
        $sql = "SELECT b.id,
					   p.pname
                       FROM bug as b
                       ORDER BY p.id";

        $statementResults = sqlStatement($sql);

        $results = array();
        while ($row = sqlFetchArray($statementResults)) {
            array_push($results, $row);
        }
        return $results;
    }
	
	public function getOneProjects($id)
    {
		$sql = "SELECT b.id,
					   b.pname
                       FROM bug as b
					   WHERE id = ?";

        return sqlQuery($sql, $id);
    }
	
	public function insert($data)
    {
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

        return $results;
    }

    public function update($id, $data)
    {
        $sql = " UPDATE project SET";
        $sql .= "     pname=?,";

        return sqlStatement(
            $sql,
            array(
                $data["pname"],
                $id
            )
        );
    }
}