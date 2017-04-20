<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //
    
    private $tasks;
    public function __construct(){
        $this->tasks = collect([
            ['id' => 2, 'name' => 'Learn Laravel', 'duration' => 12],
            ['id' => 3, 'name' => 'Learn RubyOnRails', 'duration' => 24]
        ])->keyBy('id');
    }
    
}
