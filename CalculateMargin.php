<?php
require_once 'DB.php';

class CalculateMargin
{

    public function getSettings()
    {
        $rows = DB::getAll("SELECT name, value FROM settings");

        $settings = [];
        foreach ($rows as $row) {
            $settings[$row['name']] = $row['value'];
        }
        return $settings;
    }
}

