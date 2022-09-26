<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordController extends Controller
{
    public function index(Request $request){
        $nama = $request->nama;

        //script phpWord
        // Creating the new document...
        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('myword.docx');

        //edit string
        $phpWord->setValues([
            'nama' => $nama,
            'alamat' => 'Jl Konoha'
        ]);

        $phpWord->saveAs('hasilEdit.docx');
    }
}
