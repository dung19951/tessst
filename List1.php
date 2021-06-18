<?php


class List1
{
    public static  $path = 'data2.json';

    public static function loadData()
    {
        $dataJson = file_get_contents(self::$path);
        $data = json_decode($dataJson);
        return self::convertUser($data);

    }

    public static function saveData($data)
    {
        $dataJson = json_encode($data);
        file_put_contents(self::$path, $dataJson);
    }

    public static function convertUser($data)
    {
        $users = [];
        foreach ($data as $item) {
            $user = new User($item->name, $item->pass);
            array_push($users, $user);
        }
        return $users;

    }

    public static function addUser1($user)
    {
        $users = self::loadData();
        array_push($users, $user);
        self::saveData($users);
    }
}