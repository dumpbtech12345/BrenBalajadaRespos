<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showResume()
    {
        // Assuming the ID for Bren's profile is 1 (replace with actual ID or retrieval logic as needed)
        $profile = Profile::with(['educations', 'skills', 'certifications', 'language', 'references'])->findOrFail(1);
    
        return view('arvickmercadoresume', compact('profile'));
    }
}