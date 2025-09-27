<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserServicesController extends Controller
{
    public function index()
    {
        return Inertia::render('UserServices');
    }

    public function templates()
    {
        return Inertia::render('TemplateList');
    }
}
