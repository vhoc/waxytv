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
        shell_exec( "sudo vlc '/home/pi/Videos/menu taco bravo.mp4'" );
    }

    public function test()
    {
        return "Test";
    }

}
