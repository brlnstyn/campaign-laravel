<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\Models\DatabaseUser;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

class DatabaseUserController extends Controller
{
    public function index()
    {
        // dd(Uuid::generate()->string);
        $user = DatabaseUser::all();
        // dd($user);
        return view('database-user.index', [
            'user' => $user
        ]);
    }

    public function upload(Request $request)
    {
        Excel::import(new UsersImport, $request->file);
        return redirect()->back()->with('success', 'File uploaded successfully!');
    }

    public function show($id)
    {
        $user = DatabaseUser::find($id);
        return view('database-user.show', [
            'user' => $user,
        ]);
    }

    public function destroy(DatabaseUser $databaseUser)
    {
        $t = $databaseUser->delete();
        // dd($t);
        return redirect()->route('database-users.index')->with('success', 'User deleted successfully!');
    }

    public function updateStatus($id)
    {
        $user   = DatabaseUser::find($id);
        // dd($user);
        if ($user->status == "0") {
            $user->update(['status' => "1"]);
            return redirect()->route('database-users.index')->with('success', 'User has been blocked successfully!');
        } elseif ($user->status == "1") {
            $user->update(['status' => "0"]);
            return redirect()->route('database-users.index')->with('success', 'User has been actived successfully!');
        } else {
            return redirect()->route('database-users.index')->with('error', 'Something went wrong!');
        }
    }
}
