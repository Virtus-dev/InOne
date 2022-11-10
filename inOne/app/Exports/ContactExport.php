<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\Contact;
class ContactExport implements FromCollection, WithHeadings
{

    public function collection()
    {
        //
        return Contact::all();
    }

    public function headings() : array
    {
        return [
            'id',
            'name',
            'first_last_name',
            'second_last_name',
            'phone_number',
            'email',
            'gender',
            'birth_date',
        ];
    }

}
