<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ContactExport;

class ExcellController extends Controller
{
    //
    public function ContactExport()
    {

        return Excel::download(new ContactExport, 'contacts.xlsx');

    }
}
