<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';
    protected $guarded = array('id');
    public $timestamp = true;
    protected $fillable = [
        'name','email','website','logo','created_at','updated_at',
    ];

    public function employees() {
        return $this->hasmany('App\Models\Employee');
    }
}
