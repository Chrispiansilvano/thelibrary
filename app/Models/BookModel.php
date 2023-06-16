<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'books'; // Change 'users' to your database table name
    protected $primaryKey = 'Id'; // Change 'id' to your primary key column name
    protected $allowedFields = ['Title', 'Author', 'ISBN', 'publisher', 'edition', 'Publicationdate', 'Description', 'BookCover', 'availability', 'Quantity']; // List the fields that are allowed to be inserted into the database


    public function getBooksList(){
        $db = \Config\Database::connect();
        $query = $db->query('select Id, Title, Author, ISBN, publisher, edition, Publicationdate, Description, BookCover, availability, Quantity from books');
        $result = $query->getResult();
        if(count($result)>0){
            return $result;
        }else{
            return false; 
        }
    }

}