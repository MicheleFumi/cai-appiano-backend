<?php

namespace App\Http\Controllers;

use App\Models\BoardMember;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $roles= Role::all();
       return view('Auth.roles.roleList', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('Auth.roles.createRole');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { $request->validate([
        'role' => ['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
    ]);
        $data=$request->all();
        $newRole= new Role();
        $newRole->role=$data['role'];
        $newRole->save();
        return redirect()->route('roles.index');
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
    public function edit(Role $role)
    {
        $role=Role::findOrFail($role->id);
        return view('Auth.roles.edit&DelRole',compact('role') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'role' => ['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
        ]);
    $data=$request->all();
    $role->role=$data['role'];
    $role->update();
    return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {

        BoardMember::where('role_id', $role->id)
        ->update(['role_id' => 9]); 
        $role->delete();

        return redirect()->route('roles.index');
    }
}
