<?php

namespace App\Exports;

use App\Models\registered;
use Maatwebsite\Excel\Concerns\FromCollection;

class RegisteredExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return registered::all();
    }
}
