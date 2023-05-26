<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
	public function index() {
		$contents = Content::all();

		return view('content', [
			'contents' => $contents,
		]);
	}

	public function create() {
		$data = [
			"name" => "content"
		];

		return view('add', $data);
	}

	public function store(Request $request) {
		$content = new Content;
		$content->content_title = htmlspecialchars($request->input('content_title'));
		$content->content_description = htmlspecialchars($request->input('content_description'));
		$content->save();

		return redirect('/content');
	}

	public function detail(string $id) {
		$content = Content::find($id);

		return view('detail-content', [
			'contentId' => $content->id,
			'content_title' => $content->content_title,
			'content_description' => $content->content_description
		]);
	}

	public function update(Request $request, string $id) {
		$content = Content::find($id);
		$content->content_title = htmlspecialchars($request->input('content_title'));
		$content->content_description = htmlspecialchars($request->input('content_description'));
		$content->save();

		return redirect('/content');
	}

	public function remove(Request $request, string $id) {
		$content = Content::find($id);
		$content->delete();

		return redirect('/content');
	}
}
