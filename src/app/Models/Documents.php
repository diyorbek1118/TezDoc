<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DocumentCategory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Documents extends Model
{

    use HasFactory;
    protected $table = 'documents';

    protected $fillable = [
        'title',       
        'description', 
        'category_id'
    ];
    
    public function category(): BelongsTo{
        return $this->belongsTo(DocumentCategory::class,'category_id');
    }
}
