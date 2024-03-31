<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materials;
use App\Models\Users;

class MaterialController extends Controller
{
    // mabuhay
    function uploadMaterial(Request $request) {
        $current_user_id = $request->input('user_id');
        
        $validated = $request->validate([
            // 'document_info' => 'required|file|mimes:application/pdf,application/msword,vnd.openxmlformats-officedocument.wordprocessingml.document|max:10240',
            'document_info' => 'required|mimes:pdf|max:10240',
            'title' => 'required|max:100',
            'category' => 'required',
            'description' => 'required|max:255',
        ]);

        // get original file contents including name
        $documentOrigName = $request->file('document_info')->getClientOriginalName();
        $documentOrigName = str_replace(' ', '_', $documentOrigName);
        
        // just get the filename
        $docFileName = pathinfo($documentOrigName, PATHINFO_FILENAME);
        // just get file name extension
        $docFileNameWithExt = $request->file('document_info')->getClientOriginalExtension();

        $docToStore = $docFileName . '_' . time() . '.' . $docFileNameWithExt;
        $request->file('document_info')->move(public_path('documents'), $docToStore);

        $adder = Materials::create([
            'user_id' => $current_user_id,
            'document_name' => $docToStore,
            'title' => $validated['title'],
            'category' => $validated['category'],
            'description' => $validated['description'],
            'slug' => '1231231'
        ]);

        if ($adder->save()) {
            return response()->json(['data' => 'Uploaded Successfully']);
        } else {
            return response()->json(['error' => 'Upload Failed']);
        }
    }    

}
