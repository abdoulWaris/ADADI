<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;
    
   
    protected $fillable = [
        'id',
        'email',
        'numero_transaction',
        'montant_payer',
        
        'statut_transaction',
        'description',
        'date_transaction',
        'user_id',
        'Token'
    ];

    public function user() 
    {
    	return $this->belongsTo(User::class, 'user_id');
    }
}
