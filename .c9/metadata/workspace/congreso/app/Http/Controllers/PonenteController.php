{"filter":false,"title":"PonenteController.php","tooltip":"/congreso/app/Http/Controllers/PonenteController.php","undoManager":{"mark":29,"position":29,"stack":[[{"start":{"row":82,"column":5},"end":{"row":83,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":83,"column":0},"end":{"row":83,"column":4},"action":"insert","lines":["    "]},{"start":{"row":83,"column":4},"end":{"row":84,"column":0},"action":"insert","lines":["",""]},{"start":{"row":84,"column":0},"end":{"row":84,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":84,"column":4},"end":{"row":87,"column":5},"action":"insert","lines":["public function destroy($id)","    {","        //","    }"],"id":3}],[{"start":{"row":84,"column":20},"end":{"row":84,"column":27},"action":"remove","lines":["destroy"],"id":4},{"start":{"row":84,"column":20},"end":{"row":84,"column":21},"action":"insert","lines":["p"]},{"start":{"row":84,"column":21},"end":{"row":84,"column":22},"action":"insert","lines":["o"]},{"start":{"row":84,"column":22},"end":{"row":84,"column":23},"action":"insert","lines":["n"]},{"start":{"row":84,"column":23},"end":{"row":84,"column":24},"action":"insert","lines":["e"]},{"start":{"row":84,"column":24},"end":{"row":84,"column":25},"action":"insert","lines":["n"]},{"start":{"row":84,"column":25},"end":{"row":84,"column":26},"action":"insert","lines":["c"]},{"start":{"row":84,"column":26},"end":{"row":84,"column":27},"action":"insert","lines":["i"]},{"start":{"row":84,"column":27},"end":{"row":84,"column":28},"action":"insert","lines":["a"]}],[{"start":{"row":84,"column":28},"end":{"row":84,"column":29},"action":"insert","lines":["s"],"id":5}],[{"start":{"row":82,"column":5},"end":{"row":87,"column":5},"action":"remove","lines":["","    ","    public function ponencias($id)","    {","        //","    }"],"id":6}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":10},"action":"remove","lines":["//"],"id":7},{"start":{"row":15,"column":8},"end":{"row":16,"column":62},"action":"insert","lines":["$user = User::find($id);   ","        return view(\"User.ponente2\")->with(['user' => $user]);"]}],[{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"insert","lines":["$"],"id":8},{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"insert","lines":["i"]},{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"insert","lines":["d"]}],[{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"remove","lines":["d"],"id":9},{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"remove","lines":["i"]},{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"remove","lines":["$"]}],[{"start":{"row":15,"column":16},"end":{"row":15,"column":31},"action":"remove","lines":["User::find($id)"],"id":10},{"start":{"row":15,"column":16},"end":{"row":15,"column":17},"action":"insert","lines":["A"]},{"start":{"row":15,"column":17},"end":{"row":15,"column":18},"action":"insert","lines":["u"]}],[{"start":{"row":15,"column":16},"end":{"row":15,"column":18},"action":"remove","lines":["Au"],"id":11},{"start":{"row":15,"column":16},"end":{"row":15,"column":20},"action":"insert","lines":["Auth"]}],[{"start":{"row":15,"column":16},"end":{"row":15,"column":20},"action":"remove","lines":["Auth"],"id":12},{"start":{"row":15,"column":16},"end":{"row":15,"column":34},"action":"insert","lines":["Auth::user()->role"]}],[{"start":{"row":15,"column":30},"end":{"row":15,"column":34},"action":"remove","lines":["role"],"id":13},{"start":{"row":15,"column":30},"end":{"row":15,"column":31},"action":"insert","lines":["i"]},{"start":{"row":15,"column":31},"end":{"row":15,"column":32},"action":"insert","lines":["d"]}],[{"start":{"row":15,"column":28},"end":{"row":15,"column":32},"action":"remove","lines":["->id"],"id":14}],[{"start":{"row":15,"column":28},"end":{"row":15,"column":29},"action":"insert","lines":["-"],"id":15},{"start":{"row":15,"column":29},"end":{"row":15,"column":30},"action":"insert","lines":[">"]}],[{"start":{"row":15,"column":30},"end":{"row":15,"column":31},"action":"insert","lines":["i"],"id":16},{"start":{"row":15,"column":31},"end":{"row":15,"column":32},"action":"insert","lines":["d"]}],[{"start":{"row":4,"column":28},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":17}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":36},"action":"insert","lines":["use Illuminate\\Support\\Facades\\Auth;"],"id":18}],[{"start":{"row":16,"column":28},"end":{"row":16,"column":32},"action":"remove","lines":["->id"],"id":19}],[{"start":{"row":16,"column":30},"end":{"row":16,"column":31},"action":"remove","lines":[" "],"id":20},{"start":{"row":16,"column":29},"end":{"row":16,"column":30},"action":"remove","lines":[" "]}],[{"start":{"row":16,"column":29},"end":{"row":16,"column":30},"action":"remove","lines":[" "],"id":21},{"start":{"row":16,"column":29},"end":{"row":17,"column":0},"action":"insert","lines":["",""]},{"start":{"row":17,"column":0},"end":{"row":17,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":17,"column":8},"end":{"row":17,"column":87},"action":"insert","lines":["$ponencias = DB::table('ponencias')->where('user_id', Auth::user()->id)->get();"],"id":23}],[{"start":{"row":17,"column":62},"end":{"row":17,"column":74},"action":"remove","lines":["Auth::user()"],"id":24},{"start":{"row":17,"column":62},"end":{"row":17,"column":63},"action":"insert","lines":["$"]},{"start":{"row":17,"column":63},"end":{"row":17,"column":64},"action":"insert","lines":["u"]},{"start":{"row":17,"column":64},"end":{"row":17,"column":65},"action":"insert","lines":["s"]},{"start":{"row":17,"column":65},"end":{"row":17,"column":66},"action":"insert","lines":["e"]},{"start":{"row":17,"column":66},"end":{"row":17,"column":67},"action":"insert","lines":["r"]}],[{"start":{"row":18,"column":44},"end":{"row":18,"column":71},"action":"insert","lines":["'ponencias' => $ponencias, "],"id":25}],[{"start":{"row":6,"column":0},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":28}],[{"start":{"row":6,"column":0},"end":{"row":6,"column":34},"action":"insert","lines":["use Illuminate\\Support\\Facades\\DB;"],"id":29}],[{"start":{"row":8,"column":20},"end":{"row":8,"column":21},"action":"remove","lines":["2"],"id":30}],[{"start":{"row":8,"column":6},"end":{"row":8,"column":10},"action":"remove","lines":["User"],"id":31},{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"insert","lines":["P"]},{"start":{"row":8,"column":7},"end":{"row":8,"column":8},"action":"insert","lines":["o"]},{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"insert","lines":["n"]},{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"insert","lines":["e"]},{"start":{"row":8,"column":10},"end":{"row":8,"column":11},"action":"insert","lines":["n"]},{"start":{"row":8,"column":11},"end":{"row":8,"column":12},"action":"insert","lines":["t"]},{"start":{"row":8,"column":12},"end":{"row":8,"column":13},"action":"insert","lines":["e"]}],[{"start":{"row":19,"column":21},"end":{"row":19,"column":34},"action":"remove","lines":["User.ponente2"],"id":32},{"start":{"row":19,"column":21},"end":{"row":19,"column":22},"action":"insert","lines":["P"]},{"start":{"row":19,"column":22},"end":{"row":19,"column":23},"action":"insert","lines":["o"]},{"start":{"row":19,"column":23},"end":{"row":19,"column":24},"action":"insert","lines":["n"]},{"start":{"row":19,"column":24},"end":{"row":19,"column":25},"action":"insert","lines":["e"]},{"start":{"row":19,"column":25},"end":{"row":19,"column":26},"action":"insert","lines":["n"]},{"start":{"row":19,"column":26},"end":{"row":19,"column":27},"action":"insert","lines":["t"]},{"start":{"row":19,"column":27},"end":{"row":19,"column":28},"action":"insert","lines":["e"]}],[{"start":{"row":19,"column":28},"end":{"row":19,"column":29},"action":"insert","lines":["."],"id":33}],[{"start":{"row":19,"column":29},"end":{"row":19,"column":30},"action":"insert","lines":["i"],"id":34},{"start":{"row":19,"column":30},"end":{"row":19,"column":31},"action":"insert","lines":["n"]},{"start":{"row":19,"column":31},"end":{"row":19,"column":32},"action":"insert","lines":["d"]},{"start":{"row":19,"column":32},"end":{"row":19,"column":33},"action":"insert","lines":["e"]},{"start":{"row":19,"column":33},"end":{"row":19,"column":34},"action":"insert","lines":["x"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":16,"column":5},"end":{"row":16,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1591365995482,"hash":"6af666723e6968b3179c20d5c646c806aa2b45df"}