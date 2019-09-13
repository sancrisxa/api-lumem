<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
	public function index()
	{
		$events = Event::all();
		return response()->json($events);
	}
	public function create(Request $request)
	{
		$event = new Event;
		$event->event= $request->event;
		$event->added_on = date('Y-m-d');
		$event->save();
		return response()->json($event);
	}
	public function show($id)
	{
		$event = Event::find($id);
		return response()->json($events);
	}
	public function update(Request $request, $id)
	{
		$event= Event::find($id);

		$event->event = $request->input('event');
		$event->save();
		return response()->json($event);
	}
	public function destroy($id)
	{
		$event = Event::find($id);
		$event->delete();
		return response()->json('product removed successfully');
	}
	public function search($term)
	{
		$result = DB::table('events')
		->where('event', 'like', "%$term%")->get();
		return response()->json($result);
    }
}
