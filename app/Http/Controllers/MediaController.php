<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{

    /**
     * play()
     * Plays a media file
     *
     * @param string $request
     */
    public function play( Request $request )
    {
        //shell_exec( "sudo reboot" );
        shell_exec( "whoami" );
    }

    public function test()
    {
        return "Test";
    }

}
