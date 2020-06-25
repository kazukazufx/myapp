<?phpskill

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $guarded = array('admin_id');
    
    public static $rules = array(
        'admin_name' => 'required',
        'email' => 'required',
        'password' => 'required',
        );
}
