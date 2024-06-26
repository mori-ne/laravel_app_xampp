<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Organizer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'creator',
        'creator_kana',
        'email'
    ];

    protected $table = 'organizers';

    public function getData()
    {
        $data = DB::table($this->table)->get();
        return $data;
    }
}
