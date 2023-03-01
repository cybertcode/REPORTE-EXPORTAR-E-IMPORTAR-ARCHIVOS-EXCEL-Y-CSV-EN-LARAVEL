<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    // Asignación masiva
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['serie', 'correlative', 'base', 'igv', 'total', 'user_id'];
    // Relación de uno a muchos inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
