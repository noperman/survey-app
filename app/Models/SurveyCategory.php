<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyCategory extends Model
{
    use HasFactory;

    public function Surveys()
    {
        return $this->hasMany('App\Models\Survey', 'categoryId');
    }
}
