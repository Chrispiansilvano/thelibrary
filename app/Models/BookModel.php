<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'books'; // Change 'users' to your database table name
    protected $primaryKey = 'Id'; // Change 'id' to your primary key column name
    protected $allowedFields = ['Title', 'Author', 'ISBN', 'publisher', 'edition', 'Publicationdate', 'Description', 'BookCover', 'availability', 'Quantity']; // List the fields that are allowed to be inserted into the database
}