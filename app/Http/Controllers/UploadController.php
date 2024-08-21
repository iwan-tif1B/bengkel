<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UploadController extends Controller
{
    /**
     * Handle the file upload request.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function upload(Request $request, $id)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'file' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('file_path');
            $table->timestamps();
        
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        
        // Handle the file upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('uploads', 'public');

            // Optionally update the database with the file path
            // $bukuTamu = BukuTamu::find($id);
            // $bukuTamu->file_path = $path;
            // $bukuTamu->save();

            return response()->json(['success' => 'File uploaded successfully!', 'path' => $path]);
        }

        return response()->json(['error' => 'No file selected'], 400);
    }
}
