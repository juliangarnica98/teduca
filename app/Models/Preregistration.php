<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preregistration extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_interest','date_interest','complete_names','full_last_names','document_types','document_number','expedition_date','place_document','contact_number','email','academic_program','academic_interest','status'
    ];
}
