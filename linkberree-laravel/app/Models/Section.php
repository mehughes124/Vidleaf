<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'section_type',
        'hero_copy_line_1',
        'hero_copy_line_2',
        'link_cta_copy',
        'link_url',
        'media_id',
        'order',
    ];
    

    /**
     * Get the user that owns the section.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
