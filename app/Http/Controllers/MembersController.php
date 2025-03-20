<?php

namespace App\Http\Controllers;

use App\Models\BoardMember;
use App\Models\Role;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = BoardMember::with('role')->get();
        return view('Auth.members.memberList', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $roles=Role::all();
        return view('Auth.members.createMember', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
     $data=$request->all();
    
     $newMember= new BoardMember();
     $newMember->first_name=$data['first_name'];
     $newMember->last_name=$data['last_name'];
     $newMember->role_id=$data['role_id'];
    
     if(array_key_exists('profile_img', $data)){
  
        $img_url= Storage::putFile('profile_img',$data['profile_img']);
        $newMember->profile_img=$img_url;
     };
  
     $newMember->save();
        return redirect()->route('members.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BoardMember $member)
    {      $roles=Role::all();
          $member->load('role');
        return view('Auth.members.editMember', compact('member', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BoardMember $member)
    {
        $data=$request->all();
       $member->first_name=$data['first_name'];
       $member->last_name=$data['last_name'];
       $member->role_id=$data['role_id'];
       if(array_key_exists('profile_img',$data)){
        Storage::delete($member->profile_img);
        $img_url= Storage::putFile('profile_img',$data['profile_img']);
        $member->profile_img=$img_url;
       } 
     
        $member->update();
        return redirect()->route('members.index');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
