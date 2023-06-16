<?php

namespace App\Controllers;

use App\Models\BookModel;

class Bookcontroller extends BaseController
{
    public function Addbook()
    {
        $bookModel = new BookModel();

        $data = [
            'Title' => $this->request->getPost('Title'),
            'Author' => $this->request->getPost('Author'),
            'ISBN' => $this->request->getPost('ISBN'),
            'publisher' => $this->request->getPost('publisher'),
            'edition' => $this->request->getPost('edition'),
            'Publicationdate'=> $this->request->getPost('Publicationdate'),
            'Description' => $this->request->getPost('description'),
            'BookCover' => $this->request->getPost('coverimage'),
            'availability' => $this->request->getPost('availability'),
            'Quantity' => $this->request->getPost('quantity'),
            
        ];

        // $userModel->insert($data);
        $query = $bookModel->insert($data);
        if (!$query) {
            return redirect()->back()->with('fail', 'Something went wrong');
        } else {
            return redirect()->to('dashboard')->with('success', 'You are now registered successfully');
            //lets direct user to homepage directly after the registration
            // $last_id = $userModel->insertID();
            // session()->get('loggedUser', $last_id);
            // return redirect()->to('home');
        }
    }
}
