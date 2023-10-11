<?php

namespace App\Services;

use App\Models\Cabang;

class CabangService
{

    public function getData($request)
    {
        $query = Cabang::all();

        return $query;
    }


    public function getDataById($id)
    {
        $query = Cabang::find($id);

        return $query;
    }
}
