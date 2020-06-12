  <?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    use SoftDeletes;

    protected $table = 'type';

    public $timestamps = false;

    protected $fillable = [
        'type'
    ];

    public function pokemon() {
        return $this->hasMany('App\Pokemon');
    }
}
