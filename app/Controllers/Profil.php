<?php

namespace App\Controllers;

use App\Models\DatabaseModel;

class Profil extends BaseController
{
    protected $Contact;

    public function __construct()
    {
        $this->Contact = new DatabaseModel;
    }

    public function index()
    {
        $data = [
            'title' => 'Kontak Saya',
            'contact' => $this->Contact->contact()
        ];

        return view('konten', $data);
    }
}

// <?php

// namespace App\Controllers;
// use App\Models\MyModel;

// class UTS extends BaseController
// {
//     protected $Skill;
    
//     public function __construct(){
//         $this->Skill = new MyModel;
//     }

//     public function index()
//     {
//         $data = [
//             'title' => 'Profil',

//             'skill' => $this->Skill->skill()
//         ];

//         return view('layout', $data);
//     }
// }
