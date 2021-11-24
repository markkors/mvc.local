<?php


class sql_controller extends sql
{
    public function __construct()
    {

    }

    /***
     * @param string $table - de naam van de tabel
     * @param array $fields - array met veldnamen voor in het SELECT .. FROM statement
     * @param string $search_field - het zoekveld (WHERE zoekveld = ...)
     * @param string $search_value - zoekwaarde
     * @return mysqli_result
     */
    protected function read(string $table,array $fields, string $search_field = null, string $search_value = null) : mysqli_result {
        $result = null;
        array_walk($fields,function(&$v,$k) {
            $v = sprintf("`%s`",$v);

        });
        $f = join(",",$fields);

        if (!is_null($search_field) && !is_null($search_value)) {
            // WHERE included
            $sql = sprintf("SELECT %s FROM `%s` WHERE `%s` = ?",$f,$table,$search_field);
        } else {
            $sql = sprintf("SELECT %s FROM `%s`",$f,$table);
        }

        try {
            $stmt  = self::$db_connection->prepare($sql);
            if (!is_null($search_field) && !is_null($search_value)) {
                $stmt->bind_param("s",$search_value);
            }
            if($stmt->execute()) {
                $result = $stmt->get_result();
            }
        } catch (mysqli_sql_exception $ex) {
        }
        return $result;
    }
}