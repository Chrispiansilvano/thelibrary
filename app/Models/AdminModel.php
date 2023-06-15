<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin'; // Change 'users' to your database table name
    protected $primaryKey = 'Id'; // Change 'id' to your primary key column name
    protected $allowedFields = ['name', 'email', 'password']; // List the fields that are allowed to be inserted into the database
}