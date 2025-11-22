<?php

namespace App\Http\Controllers\Documents;

use App\Http\Controllers\Controller;
use App\Models\DocumentField;
use App\Models\Documents;
use Illuminate\View\View;

class DocumentController extends Controller
{
    public function index(): View{

        $documen_list = Documents::all();

        return view("home.show-doc")->with(["doc_list" => $documen_list]);

    }

    public function document_fields($id): View
{
    $documentField = DocumentField::where('document_id', $id)->first();

    if (!$documentField) {
        abort(404, 'Maʼlumot topilmadi');
    }

     $fields = json_decode($documentField->ariza_data, true);
 

    return view("home.form_data", [
        "fields" => $fields
    ]);
}

}
