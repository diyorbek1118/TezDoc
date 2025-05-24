<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    
    public function ariza()
{
    $text = "men bu yili haj safariga borishga sharoitim yetarli bo‘lmaganligi sababli keyingi yillarga qoldirishingizni so‘rayman";
    $name = 'Islom';
    $surname = 'Toshpo‘latov';
    $address = 'A.Ikromov ko‘chasi';
    $home_number = '12';

    return view('document_templates.arizapdf', compact('text', 'name', 'surname', 'address', 'home_number'));
}

    public function generate(){

      
        $text = "men bu yili haj safariga borishga sharoitim yetarli bo‘lmaganligi sababli keyingi yillarga qoldirishingizni so‘rayman";
        $name = 'Islom';
        $surname = 'Toshpo‘latov';
        $address = 'A.Ikromov ko‘chasi';
        $home_number = '12';
    
        $pdf=Pdf::loadView('document_templates.arizapdf',  compact('text', 'name', 'surname', 'home_number', 'address'));
        return $pdf->download('arizaTezDoc.pdf');
    }

}
