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
        //shell_exec( "vlc '" + $request->file + "'" );
        //return response->json( $request );
        shell_exec( "sudo reboot" );
    }

    public function test()
    {
        return "Test";
    }

}
