<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;


class ManageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexM()
    {
        $user = User::orderBy('created_at', 'DESC')->get();

        return view('manages.indexM', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createM()
    {
        return view('manages.createM');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeM(Request $request)
    {
        // User::create($request->all());

        // return redirect()->route('admin/manages')->with('success', 'Manage added successfully');
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ])->validate();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => "0"
        ]);
        return redirect()->route('admin/manages')->with('success', 'Manage added successfully');
    }


    /**
     * Display the specified resource.
     */
    public function showM(string $id)
    {
        $user = User::findOrFail($id);

        return view('manages.showM', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editM(string $id)
    {
        $user = User::findOrFail($id);

        return view('manages.editM', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateM(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $user->update($request->all());

        return redirect()->route('admin/manages')->with('success', 'Manage updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyM(string $id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('admin/manages')->with('success', 'Manage deleted successfully');
    }
}
