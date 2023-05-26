<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;

class MateriController extends Controller
{
	public function index() {
		$materis = Materi::all();

		return view('materi', [
			'materis' => $materis,
		]);
	}

	public function create() {
		$data = [
			"name" => "materi"
		];

		return view('add', $data);
	}

	public function store(Request $request) {
		$materi = new Materi;
		$materi->materi_title = htmlspecialchars($request->input('materi_title'));
		$materi->materi_description = htmlspecialchars($request->input('materi_description'));
		$materi->save();

		return redirect('/materi');
	}

	public function detail(string $id) {
		$materi = Materi::find($id);

		return view('detail-materi', [
			'materiId' => $materi->id,
			'materi_title' => $materi->materi_title,
			'materi_description' => $materi->materi_description
		]);
	}

	public function update(Request $request, string $id) {
		$materi = Materi::find($id);
		$materi->materi_title = htmlspecialchars($request->input('materi_title'));
		$materi->materi_description = htmlspecialchars($request->input('materi_description'));
		$materi->save();

		return redirect('/materi');
	}

	public function remove(Request $request, string $id) {
		$materi = Materi::find($id);
		$materi->delete();

		return redirect('/materi');
	}
}
