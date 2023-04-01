<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
protected $table = 'customers';
// column sa table
protected $fillable = [
'first_name', 'last_name', 'phone_number', ' address'
];
}