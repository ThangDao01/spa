<?php

namespace App\Exports;

use App\Models\Article;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExcelExports implements FromCollection
{
    use Exportable;
    public function collection()
    {
        return Article::all();
    }
}
