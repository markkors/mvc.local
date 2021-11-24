<?php


class sql
{

    public static mysqli $db_connection;

    public function __construct()
    {
        $this->connect_db();
    }

    protected function connect_db() : bool
    {
        //mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);
        $retval = false;

        try {
            if(!isset(self::$db_connection)) {
                self::$db_connection = new mysqli("localhost","mvc_user","mvc_password","mvc");
            }
            $retval = true;
        } catch (mysqli_sql_exception $ex) {

        }
        return $retval;
    }




}