{"filter":false,"title":"Visualizacione.php","tooltip":"/congreso/app/Visualizacione.php","undoManager":{"mark":5,"position":5,"stack":[[{"start":{"row":0,"column":0},"end":{"row":39,"column":0},"action":"remove","lines":["<?php","","namespace App;","","use Illuminate\\Contracts\\Auth\\MustVerifyEmail;","use Illuminate\\Foundation\\Auth\\User as Authenticatable;","use Illuminate\\Notifications\\Notifiable;","","class User extends Authenticatable","{","    use Notifiable;","","    /**","     * The attributes that are mass assignable.","     *","     * @var array","     */","    protected $fillable = [","        'name', 'email', 'password', 'role'","    ];","","    /**","     * The attributes that should be hidden for arrays.","     *","     * @var array","     */","    protected $hidden = [","        'password', 'remember_token',","    ];","","    /**","     * The attributes that should be cast to native types.","     *","     * @var array","     */","    protected $casts = [","        'email_verified_at' => 'datetime',","    ];","}",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":10,"column":0},"action":"insert","lines":["<?php","","namespace App;","","use Illuminate\\Database\\Eloquent\\Model;","","class Ponencia extends Model","{","    //","}",""]}],[{"start":{"row":6,"column":6},"end":{"row":6,"column":14},"action":"remove","lines":["Ponencia"],"id":3},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"insert","lines":["V"]},{"start":{"row":6,"column":7},"end":{"row":6,"column":8},"action":"insert","lines":["i"]},{"start":{"row":6,"column":8},"end":{"row":6,"column":9},"action":"insert","lines":["s"]},{"start":{"row":6,"column":9},"end":{"row":6,"column":10},"action":"insert","lines":["u"]},{"start":{"row":6,"column":10},"end":{"row":6,"column":11},"action":"insert","lines":["a"]},{"start":{"row":6,"column":11},"end":{"row":6,"column":12},"action":"insert","lines":["l"]},{"start":{"row":6,"column":12},"end":{"row":6,"column":13},"action":"insert","lines":["i"]},{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"insert","lines":["s"]}],[{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"remove","lines":["s"],"id":4}],[{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"insert","lines":["s"],"id":5},{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"insert","lines":["a"]}],[{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"remove","lines":["a"],"id":6},{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"remove","lines":["s"]}],[{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"insert","lines":["z"],"id":7},{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"insert","lines":["a"]},{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"insert","lines":["c"]},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"insert","lines":["i"]},{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"insert","lines":["o"]},{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"insert","lines":["n"]},{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"insert","lines":["e"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":4,"column":39},"end":{"row":4,"column":39},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1587055409860,"hash":"c661ad031ef5319f04822beff3aafe086993a3a8"}