<?php

namespace App\Http\Controllers;

use App\Http\Resources\PackageResource;
use App\Models\Package;
use Illuminate\Http\Request;
use Auth;

class PackageController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'tracking_code' => 'required',
            'cep' => 'required',
            'street' => 'required',
            'number' => 'required',
            'addition' => 'required',
            'district' => 'required',
            'state' => 'required',
            'city' => 'required',
            'status' => 'required'
        ]);

        return new PackageResource(Package::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'tracking_code' => $data['tracking_code'],
            'cep' => $data['cep'],
            'street' => $data['street'],
            'number' => $data['number'],
            'addition' => $data['addition'],
            'district' => $data['district'],
            'state' => $data['state'],
            'city' => $data['city'],
            'status' => $data['status'],
            'user_id' => Auth::id()
        ]));
    }
}
