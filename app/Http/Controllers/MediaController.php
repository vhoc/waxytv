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
        //shell_exec( "cvlc '". $request->file ."'" );
        $command = "wget --user= --password=waxytv http://localhost:8080/requests/status.xml?command=in_play&input=" . $request->file;
        return $command;
        //shell_exec( "wget --user= --password=waxytv http://localhost:8080/requests/status.xml?command=in_play&input=" . $request->file );
    }

    public function playlistClear()
    {
        shell_exec( "wget --user= --password=waxytv http://localhost:8080/requests/status.xml?command=pl_empty" );
    }

    public function stop()
    {
        shell_exec( "wget --user= --password=waxytv http://localhost:8080/requests/status.xml?command=pl_stop" );
    }

}
