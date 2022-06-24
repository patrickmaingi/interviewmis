<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\succesfulpayment;
use PDF;

class PDFController extends Controller
{
    public function generatePDF(Request $request)
    {
        $items=[succesfulpayment::
         where('MpesaReceiptNumber',$request->ref)
        ->select('MpesaReceiptNumber','PhoneNumber','Amount')
        ->latest()->first()];
        $items=json_encode($items);
        $items=json_decode($items);
        $data = [
            'title' => 'Taita Taveta County Government',
            'name' => 'Parking Receipt',
            'date' => date('m/d/Y'),
            'refno' => $items[0]->MpesaReceiptNumber,
            'phoneno' => $items[0]->PhoneNumber,
            'amount' => $items[0]-> Amount
        ];
          
        $pdf = PDF::loadView('receipt', $data);
    
        return $pdf->download('ttcg.pdf');

    } 

    
}
