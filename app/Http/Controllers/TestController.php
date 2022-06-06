<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $students = [];

        if (($open = fopen(storage_path() . "/read-csv.csv", "r")) !== FALSE) {

            while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
                $students[] = $data;
            }

            fclose($open);
        }

        echo "<pre>";
        print_r($students);
    }
}
