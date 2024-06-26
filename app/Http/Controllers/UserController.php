<?php
namespace App\Http\Controllers;

use App\Models\jobe;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('edit_user', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->back()->with('success', 'User updated successfully!');
    }

    public function statistics()
    {
        $jobes = Jobe::all();
        $userCount = User::where('role', 'utilisateur')->count();
        $enterpriseCount = User::where('role', 'entreprise')->count();
        $jobCount = jobe::count();
        $users = User::whereIn('role', ['entreprise', 'freelancer', 'utilisateur'])->get();
        return view('dashboard', compact('jobes','userCount', 'enterpriseCount', 'jobCount','users'));
    }
    public function banUser(Request $request, User $user)
{
    $user->update(['banned' => 1]); 
    return response()->json(['success' => true]);
}
public function unbanUser(Request $request, User $user)
{
    $user->update(['banned' => 0]); // Set banned status to 0
    return response()->json(['success' => true]);
}
}
