<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
        //  function
    public static function tree()
    {

        $allPostions = Employee::get();

        $rootPositions = $allPostions->whereNull('parent_id');


        self::formatTree($rootPositions, $allPostions);

        return $rootPositions;
    }

    private static function formatTree($positions, $allPostions)
    {
        foreach ($positions as $position) {

            $position->children = $allPostions->where('parent_id', $position->id)->values();

            if($position->children->isNotEmpty()) {
                self::formatTree($position->children, $allPostions);
            }

        }
    }

    public function isChild(): bool
    {

        return $this->parent_id != null;

    }
}
