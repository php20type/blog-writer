<?php

namespace App\Repositories;

use DB;
class TagsRepository
{
    protected $table = 'tags';

    public function getTagsSuggestion($inputs)
    {
        $query = DB::table($this->table)
            ->select('name')
            ->where('name', 'LIKE', '%' . $inputs['search'] . '%')
            ->groupBy('name')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(10)
            ->get();

        return $query;
    }
}