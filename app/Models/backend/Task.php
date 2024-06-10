<?php
// app\models\backend\task.php
namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'tasks';

    protected $fillable = ['name', 'user_id'];
    protected $guarded = [];
    protected $casts = [];

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }
}
