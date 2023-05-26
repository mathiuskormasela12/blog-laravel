<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class InformationController extends Controller
{
    public function index() {
		$informations = Information::all();

		return view('information', [
			'informations' => $informations,
		]);
	}

	public function create() {
		$data = [
			"name" => "information"
		];

		return view('add', $data);
	}

	public function store(Request $request) {
		$information = new Information;
		$information->information_title = htmlspecialchars($request->input('information_title'));
		$information->information_description = htmlspecialchars($request->input('information_description'));
		$information->save();

		return redirect('/information');
	}

	public function detail(string $id) {
		$information = Information::find($id);

		return view('detail-information', [
			'informationId' => $information->id,
			'information_title' => $information->information_title,
			'information_description' => $information->information_description
		]);
	}

	public function update(Request $request, string $id) {
		$information = Information::find($id);
		$information->information_title = htmlspecialchars($request->input('information_title'));
		$information->information_description = htmlspecialchars($request->input('information_description'));
		$information->save();

		return redirect('/information');
	}

	public function remove(Request $request, string $id) {
		$information = Information::find($id);
		$information->delete();

		return redirect('/information');
	}
}
