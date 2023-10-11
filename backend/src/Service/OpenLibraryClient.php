<?php
namespace App\Service;

use App\Model\OpenLibraryBook;

class OpenLibraryClient 
{
    public function __construct() {
       
    }

    public function getBookByIsbn(string $isbn) : ?OpenLibraryBook
    {
        return null;
    }
}