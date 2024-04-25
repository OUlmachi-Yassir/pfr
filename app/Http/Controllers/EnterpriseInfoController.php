<?php

namespace App\Http\Controllers;

use App\Models\Enterprise;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class EnterpriseInfoController extends Controller
{


    public function entrepriseinfo()
    {
        return view('/enterprise-info');
    }
    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'nullable|image',
            'slogan' => 'nullable|string|max:255',
            'industrie' => 'nullable|string|max:255',
            'discreption' => 'nullable|string',
        ]);
        
        $imageName = null; 

    
    if ($request->hasFile('logo')) {
        
        $imageName = time() . '.' . $request->file('logo')->getClientOriginalExtension();
        $request->file('logo')->move(public_path('images'), $imageName);
    }

        $enterprise = new Enterprise();
        $enterprise->user_id = auth()->id(); 
        $enterprise->logo = $imageName; 
        $enterprise->slogan = $request->input('slogan');
        $enterprise->industrie = $request->input('industrie');
        $enterprise->discreption = $request->input('discreption');
        $enterprise->save(); 

        return redirect()->route('dashboard.entreprise');
    }


    public function edit()
{
    $user = auth()->user();
    $enterprise = $user->enterprise;
    return view('enterprise.edit', compact('enterprise'));
}

public function update(Request $request)
{
    
    $request->validate([
        'slogan' => 'nullable|string|max:255',
        'industrie' => 'nullable|string|max:255',
        'discreption' => 'nullable|string',
    ]);

    $user = auth()->user();
    $enterprise = $user->enterprise;

    $enterprise->update([
        'slogan' => $request->input('slogan'),
        'industrie' => $request->input('industrie'),
        'discreption' => $request->input('discreption'),
    ]);

    return redirect()->back()->with('success', 'Enterprise profile updated successfully!');
}

    
}

