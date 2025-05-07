<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function compact;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('User.ManageUser', compact('users'));
    
    }

    public function create()
    {
        return view('User.CreateUser');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        return redirect()->route('User.ManageUser')->with('success', 'User created successfully.');
    }
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('User.ShowUser', compact('user'));
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('User.EditUser', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'phone' => 'required|string|max:255',
            'password' => 'nullable|string|min:8',
        ]);

        $user = User::findOrFail($id);
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->phone = $request->phone;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('User.ManageUser')->with('success', 'User updated successfully.');
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('User.ManageUser')->with('success', 'User deleted successfully.');
    }
    
    

}
