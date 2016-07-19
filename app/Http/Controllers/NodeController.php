<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NodeController extends Controller
{
    public function index()
    {
    	return view('nodes.index', [
    		'nodes'	=> Nodes::all()
    	]);
    }
}
