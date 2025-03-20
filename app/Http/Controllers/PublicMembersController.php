<?php

namespace App\Http\Controllers;

use App\Models\BoardMember;
use Illuminate\Http\Request;

class PublicMembersController extends Controller
{
    public function index()
    {
        $members = BoardMember::with('role')->get();
        return response()->json($members);
    }

    public function show(BoardMember $memberId)
    {
        $memberId->load('role');
     return response()->json($memberId);
    }

}
