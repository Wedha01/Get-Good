<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karakters; // Ensure this matches your model name
use Illuminate\Support\Facades\File;

class charactercontroller extends Controller // Change 'charactercontroller' to 'CharacterController' for proper capitalization
{
    public function index()
    {
        return view('character.index', [
            'c' => karakters::all(),
        ]);
    }

    

    public function add(Request $request)
    {
        $characterId = $request->input('character_id');

        return redirect()->route('characters.index')->with('success', 'Character added to your account.');
    }



    public function karakter()
    {
        return view('character.karakter', [
            'c' => karakters::all(),
        ]);
    }
    public function page()
    {
        return view('character.page', [
            'c' => karakters::all(),
        ]);
    }

    public function create()
    {
        return view('character.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'file' => 'required|mimes:png,jpg',
            'description' => 'required',
            'banner' => 'required|mimes:png,jpg,webp',
            'relic' => 'required|mimes:png,jpg',
            'relicdescription'=> 'required',
            'relic2' => 'nullable|mimes:png,jpg',
            'relicdescription2pcs'=> 'required',
            'planetaryset' => 'required|mimes:png,jpg',
            'planetarysetdescription'=> 'required',
            'lightcone'=> 'required|mimes:png,jpg',
            'lightconedescription'=> 'required',
        ]);

        $filePaths = [];

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_file.' . $file->getClientOriginalExtension();
            $path = 'public/assets/img/karakters/';
            $file->move($path, $filename);
            $filePaths['file'] = $path . $filename;
        }
        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $filename = time() . '_banner.' . $file->getClientOriginalExtension();
            $path = 'public/assets/img/karakters/';
            $file->move($path, $filename);
            $filePaths['banner'] = $path . $filename;
        }

        if ($request->hasFile('relic')) {
            $file = $request->file('relic');
            $filename = time() . '_relic.' . $file->getClientOriginalExtension();
            $path = 'public/assets/img/relic/';
            $file->move($path, $filename);
            $filePaths['relic'] = $path . $filename;
        }

        if ($request->hasFile('relic2')) {
            $file = $request->file('relic2');
            $filename = time() . '_relic2.' . $file->getClientOriginalExtension();
            $path = 'public/assets/img/relic/';
            $file->move($path, $filename);
            $filePaths['relic2'] = $path . $filename;
        }

        if ($request->hasFile('planetaryset')) {
            $file = $request->file('planetaryset');
            $filename = time() . '_planetaryset.' . $file->getClientOriginalExtension();
            $path = 'public/assets/img/relic/';
            $file->move($path, $filename);
            $filePaths['planetaryset'] = $path . $filename;
        }
        if ($request->hasFile('lightcone')) {
            $file = $request->file('lightcone');
            $filename = time() . '_lightcone.' . $file->getClientOriginalExtension();
            $path = 'public/assets/img/relic/';
            $file->move($path, $filename);
            $filePaths['lightcone'] = $path . $filename;
        }

        Karakters::create([
            'file' => $filePaths['file'] ?? null,
            'description' => $request->description,
            'banner' => $filePaths['banner'] ?? null,
            'relic' => $filePaths['relic'] ?? null,
            'relicdescription'=> $request->relicdescription,
            'relic2' => $filePaths['relic2'] ?? null,
            'relicdescription2pcs'=> $request->relicdescription2pcs,
            'planetaryset' => $filePaths['planetaryset'] ?? null,
            'planetarysetdescription'=> $request->planetarysetdescription,
            'lightcone'=> $filePaths['lightcone'] ?? null,
            'lightconedescription'=> $request->lightconedescription,
        ]);

        return redirect()->route('dashboard');
    }

    public function edit(Karakters $character)
    {
        return view('character.edit', ['character' => $character]);
    }
    public function update(Request $request, Karakters $character)
    {
        $data = $request->validate([
            'file' => 'nullable|mimes:png,jpg',
            'description' => 'required',
            'banner' => 'nullable|mimes:png,jpg,webp',
            'relic' => 'nullable|mimes:png,jpg',
            'relicdescription'=> 'required',
            'relic2' => 'nullable|mimes:png,jpg',
            'relicdescription2pcs'=> 'required',
            'planetaryset' => 'nullable|mimes:png,jpg',
            'planetarysetdescription'=> 'required',
            'lightcone'=> 'nullable|mimes:png,jpg',
            'lightconedescription'=> 'required',
        ]);
    
        $filePaths = [];
        
        if ($request->hasFile('file')) {
            // Store the old file path
            $oldFilePath = $character->file;
    
            $file = $request->file('file');
            $filename = time() . '_file.' . $file->getClientOriginalExtension();
            $path = 'public/assets/img/karakters/';
            $file->move($path, $filename);
            $filePaths['file'] = $path . $filename;
    
            // Delete the old file
            if (File::exists($oldFilePath)) {
                File::delete($oldFilePath);
            }
    
            // Update the character's file path
            $character->file = $filePaths['file'];
        }
    
        if ($request->hasFile('banner')) {
            // Store the old file path
            $oldFilePath = $character->banner;
    
            $file = $request->file('banner');
            $filename = time() . '_banner.' . $file->getClientOriginalExtension();
            $path = 'public/assets/img/karakters/';
            $file->move($path, $filename);
            $filePaths['banner'] = $path . $filename;
    
            // Delete the old file
            if (File::exists($oldFilePath)) {
                File::delete($oldFilePath);
            }
    
            // Update the character's banner path
            $character->banner = $filePaths['banner'];
        }
    
        if ($request->hasFile('relic')) {
            $oldFilePath = $character->relic;
    
            $file = $request->file('relic');
            $filename = time() . '_relic.' . $file->getClientOriginalExtension();
            $path = 'public/assets/img/relic/';
            $file->move($path, $filename);
            $filePaths['relic'] = $path . $filename;
    
            // Delete the old file
            if (File::exists($oldFilePath)) {
                File::delete($oldFilePath);
            }
    
            // Update the character's relic path
            $character->relic = $filePaths['relic'];
        }
    
        if ($request->hasFile('relic2')) {
            $oldFilePath = $character->relic2;
    
            $file = $request->file('relic2');
            $filename = time() . '_relic2.' . $file->getClientOriginalExtension();
            $path = 'public/assets/img/relic/';
            $file->move($path, $filename);
            $filePaths['relic2'] = $path . $filename;
    
            // Delete the old file
            if (File::exists($oldFilePath)) {
                File::delete($oldFilePath);
            }
    
            // Update the character's relic2 path
            $character->relic2 = $filePaths['relic2'];
        }
    
        if ($request->hasFile('planetaryset')) {
            $oldFilePath = $character->planetaryset;
    
            $file = $request->file('planetaryset');
            $filename = time() . '_planetaryset.' . $file->getClientOriginalExtension();
            $path = 'public/assets/img/relic/';
            $file->move($path, $filename);
            $filePaths['planetaryset'] = $path . $filename;
    
            // Delete the old file
            if (File::exists($oldFilePath)) {
                File::delete($oldFilePath);
            }
    
            // Update the character's planetaryset path
            $character->planetaryset = $filePaths['planetaryset'];
        }
    
        if ($request->hasFile('lightcone')) {
            $oldFilePath = $character->lightcone;
    
            $file = $request->file('lightcone');
            $filename = time() . '_lightcone.' . $file->getClientOriginalExtension();
            $path = 'public/assets/img/relic/';
            $file->move($path, $filename);
            $filePaths['lightcone'] = $path . $filename;
    
            // Delete the old file
            if (File::exists($oldFilePath)) {
                File::delete($oldFilePath);
            }
    
            // Update the character's lightcone path
            $character->lightcone = $filePaths['lightcone'];
        }
    
        // Update text fields
        $character->description = $request->description;
        $character->relicdescription = $request->relicdescription;
        $character->relicdescription2pcs = $request->relicdescription2pcs;
        $character->planetarysetdescription = $request->planetarysetdescription;
        $character->lightconedescription = $request->lightconedescription;
    
        // Save the updated character
        $character->save();
    
        return redirect()->route('dashboard')->with('success', 'Character updated successfully');
    }
    public function destroy(karakters $character){
        
        $character->delete();


        return redirect(route('dashboard'))->with('success, character delete success');
    }
}
