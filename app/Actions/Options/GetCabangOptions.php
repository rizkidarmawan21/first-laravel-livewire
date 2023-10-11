<?php

namespace App\Actions\Options;

use App\Models\Cabang;

class GetCabangOptions
{
    public function handle()
    {
        $query = Cabang::pluck('nama', 'id');

        return $query;
    }
}
