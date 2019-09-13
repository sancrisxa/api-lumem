<?php

namespace App\Http\Controllers;

use App\Http\Controllers\RequestGoogleApiController;

class IndexController extends Controller
{

    private $events;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(RequestGoogleApiController $events)
    {
        //
        $this->events = $events;
    }

    public function cmp($a, $b) {
        return $a->transaction_id > $b->transaction_id;
    }

    public function index()
    {
        $results = $this->events->getGuzzleRequest();

        $results = json_decode($results);
        $results = get_object_vars($results);

        usort($results, array($this,'cmp'));
        return view('index')->with('results', $results);

    }

}
