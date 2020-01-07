<?php

class Users
{

    public $id;
    public $username;
    public $email;
    public $password;
    public $fullname;
    protected static $dbTable = "users";
    protected static $dbTableFields = ['username', 'email', 'password', 'fullname'];


    public static function find_all_users()
    {


        return self::find_this_query("select * from `" . self::$dbTable . "`");


    }

    public static function find_users_by_id($user_id)
    {

        $result = self::find_this_query("select * from `" . self::$dbTable . "` where `id`='$user_id' ");

        return !empty($result) ? array_shift($result) : false;
    }

    public static function find_this_query($sql)
    {
        global $dataBase;
        $result_set = $dataBase->Query($sql);
        // $the_object_array[]=array();
        while ($row = mysqli_fetch_array($result_set)) {
            $the_object_array[] = self::instant($row);
        }
        return @$the_object_array;

    }

    public static function instant($the_record)
    {

        $the_object = new Users();
        foreach ($the_record as $the_attribute => $value) {
            if ($the_object->has_the_attribute($the_attribute)) {
                $the_object->$the_attribute = $value;
            }
        }

        return $the_object;
    }

    private function has_the_attribute($the_attribute)
    {
        $object_properties = get_object_vars($this);
        return array_key_exists($the_attribute, $object_properties);
    }

    public static function verifyUsers($username, $password)
    {
        global $dataBase;
        $username = $dataBase->escape_string($username);
        $password = $dataBase->escape_string($password);
        $sql = "select * from `" . self::$dbTable . "` where";
        $sql .= "`username` = '$username' AND `password` = '$password' limit 1 ";
//        die($sql);
        $resultArray = self::find_this_query($sql);

        return !empty($resultArray) ? array_shift($resultArray) : false;
    }

    public function properties()
    {
        $properties = array();
        foreach (self::$dbTableFields as $dbField) {
            if (property_exists($this, $dbField)) {
                $properties[$dbField] = $this->$dbField;

            }
        }

        return $properties;
    }

// for security (sql injection):
    public function cleanProperties()
    {
        global $dataBase;
        $cleanProperties = array();
        foreach ($this->properties() as $key => $value) {
            $cleanProperties[$key] = $dataBase->escape_string($value);
        }
        return $cleanProperties;
    }

    public function create()
    {
        global $dataBase;
        $properties = $this->cleanProperties();
//        die(var_dump($properties));
        $sql = "INSERT INTO `" . self::$dbTable . "` (`" . implode('`,`', array_keys($properties)) . "`)VALUES (";
        $sql .= "'" . implode("','", array_values($properties)) . "')";

        if ($dataBase->Query($sql)) {
            $this->id = $dataBase->the_insert_id();
//            var_dump($this->id); .......................................................
            return true;
        } else {
            return false;
        }
//        die($sql);
    }

    public function update()
    {
        $properties = $this->cleanProperties();
        $properties_pairs = array();
        foreach ($properties as $key => $value) {
            $properties_pairs[] = "`{$key}` = '{$value}' ";
        }
        global $dataBase;
        $sql = "UPDATE `" . self::$dbTable . "` SET ";
        $sql .= implode(",", $properties_pairs);
        $sql .= " WHERE `id` = " . $dataBase->escape_string($this->id);

        $dataBase->Query($sql);
        return (mysqli_affected_rows($dataBase->connection) == 1) ? true : false;
//        die($sql);
    }

    public function delete()
    {
        global $dataBase;
        $sql = "DELETE from `" . self::$dbTable . "`";
        $sql .= " WHERE `id` = " . $dataBase->escape_string($this->id);

        $dataBase->Query($sql);
        return (mysqli_affected_rows($dataBase->connection) == 1) ? true : false;

    }

    public function save()
    {
        return isset($this->id) ? $this->update() : $this->create();
    }

}


?>