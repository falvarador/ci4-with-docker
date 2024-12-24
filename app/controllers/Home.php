<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function db(): void
    {
        // Get the database connection
        $db = \Config\Database::connect();

        // Test database connection
        if ($db->connect()) {
            echo "Database connection successful!";
        } else {
            echo "Unable to connect to the database.";
        }
    }

    public function bulma(): string
    {
        return view('bulma');
    }
}
