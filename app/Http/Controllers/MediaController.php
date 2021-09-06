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
        shell_exec( "cvlc '". $request->file ."'" );
    }

    public function stop()
    {
        shell_exec( "wget --user= --password=waxytv http://localhost:8080/requests/status.xml?command=pl_stop" );
    }

}
