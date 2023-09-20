<?php

namespace App\Imports;

use App\Models\Productos;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Auth;

class ProductosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Productos([
            "nombre" => $row[0],
            "codigo" => $row[1],
            "precio" => $row[2],
            "stock" => $row[3],
            "rubro" => $row[4],
            "user_id" => Auth::user()->id
        ]);
    }
}
