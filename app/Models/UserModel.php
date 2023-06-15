<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Change 'users' to your database table name
    protected $primaryKey = 'Id'; // Change 'id' to your primary key column name
    protected $allowedFields = ['name', 'email', 'password']; // List the fields that are allowed to be inserted into the database
}