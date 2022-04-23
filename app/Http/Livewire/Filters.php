<?php

namespace App\Http\Livewire;

use Livewire\Component;

// tools
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

class Filters extends Component
{
    public $ema;
    public $pais;
    public $estado;
    public $gender;
    public $content;
    public $type;
    public $users=[];

    public function filtr()
    {
     /*
        if ($this->type=='email') {
            #$this->ema;
            $this->pais='';
            $this->estado='';
            $this->gender='';
            $this->ema = $this->content;
        } elseif ($this->type=='pais') {
            $this->estado='';
            $this->gender='';
            $this->ema =  '';
            $this->pais = $this->content;
        }elseif ($this->type=='estado') {
            $this->gender='';
            $this->ema = '';
            $this->pais ='';
            $this->estado =  $this->content;
        }elseif ($this->type=='gender') {
            $this->estado='';
            $this->ema = '';
            $this->pais ='';
            $this->gender =  $this->content;
        }
     */
  
    $usrs = DB::table('users');
    if ($this->type=='mail') {
         $usrs->where('email',$this->content) ;

    } elseif ($this->type=='pais') {
         $usrs->where('pais',$this->content) ;
    }elseif ($this->type=='estado') {
         $usrs->where('estado',$this->content) ;
    }elseif ($this->type=='gender') {
         $usrs->where('genero',$this->content) ;
    }
    $this->users = $usrs->take(15)->get();

    }
    public function rst()
    {
        $this->users= [];
    }
    public function hydrate()
    {
        $usrs = DB::table('users');
        if ($this->type=='mail') {
             $usrs->where('email',$this->content) ;

        } elseif ($this->type=='pais') {
             $usrs->where('pais',$this->content) ;
        }elseif ($this->type=='estado') {
             $usrs->where('estado',$this->content) ;
        }elseif ($this->type=='gender') {
             $usrs->where('genero',$this->content) ;
        }
        $this->users = $usrs->take(15)->get();
    }
  
    public function render()
    {
        $usrs = DB::table('users')->paginate(15);
        return view('livewire.filters',compact('usrs'));
    }
    
}
