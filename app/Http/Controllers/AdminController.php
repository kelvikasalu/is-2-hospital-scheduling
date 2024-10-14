<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Method to load the admin dashboard
    public function dashboard()
    {
        // Returns the admin dashboard view
        return view('admin.dashboard'); // Ensure this view exists
    }

    // Optionally, you can add other methods, like settings
    public function settings()
    {
        return view('admin.settings'); // Ensure this view exists as well
    }
}
