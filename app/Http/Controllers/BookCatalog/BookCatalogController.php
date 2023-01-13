<?php

namespace App\Http\Controllers\BookCatalog;

use App\Http\Controllers\Controller;
use Illuminate\View\Factory;
use Illuminate\View\View;

class BookCatalogController extends Controller {

    public function index(): View|Factory{
        return view('catalog.bookCatalog');
    }

    public function register():View|Factory{
        return view('register.newBook');
    }
}
