<?php

namespace App\Http\Controllers\Documents;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormDataRequest;
use App\Models\DocumentField;
use App\Models\Documents;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Request;

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
        "fields" => $fields,
        "document_id" => $documentField->document_id
    ]);
}

public function documentData(FormDataRequest $formDataRequest){
     $validated = $formDataRequest->validated();

    $doc_id = $validated['document_id'];

    $document = Documents::find($doc_id);
    
     $view ='document_template.'.$document->category->name.'.'.$document->slug;
     return view($view,[
        "fields" => $validated
    ]);
     
}


}
