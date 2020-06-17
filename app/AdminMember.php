<?phpskill

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminMember extends Model
{
    //
    protected $guarded = array('user_id');
    
    public static $rules = array(
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'role' => 'required',
        'level' => 'required',
        );
    
    public function skill() 
    {
        return $this->hasMany('App\Skill');
    }
}
