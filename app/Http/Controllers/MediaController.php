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
        exec( 'vlc -I http ' . $request->file . ' > /dev/null &' );
        //$command = "http://localhost:8080/requests/status.xml?command=in_play&input=" . urlencode( $request->file );
        //return "wget --user= --password=waxytv " . $command;
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

    public function kill()
    {
        shell_exec( "killall vlc" );
    }

    public function initPlayer()
    {
        shell_exec( "cvlc" );
    }

}
