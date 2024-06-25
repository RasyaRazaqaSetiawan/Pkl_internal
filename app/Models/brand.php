<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name_brand'];
    public $timestamps=true;

    public function brand()
    {
        return $this->hasMany(brand::class, 'id_product');
    }
}
