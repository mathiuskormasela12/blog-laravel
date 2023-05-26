<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class TopicController extends Controller
{
    public function index() {
			$topics = Topic::all();

			return view('home', [
				'topics' => $topics,
			]);
		}

		public function create() {
			$data = [
				"name" => "topic"
			];

			return view('add', $data);
		}

		public function store(Request $request) {
			$topic = new Topic;
			$topic->topic_title = htmlspecialchars($request->input('topic_title'));
			$topic->topic_description = htmlspecialchars($request->input('topic_description'));
			$topic->save();

			return redirect('/');
		}

		public function detail(string $id) {
			$topic = Topic::find($id);

			return view('detail-topic', [
				'topicId' => $topic->id,
				'topic_title' => $topic->topic_title,
				'topic_description' => $topic->topic_description
			]);
		}

		public function update(Request $request, string $id) {
			$topic = Topic::find($id);
			$topic->topic_title = htmlspecialchars($request->input('topic_title'));
			$topic->topic_description = htmlspecialchars($request->input('topic_description'));
			$topic->save();

			return redirect('/');
		}

		public function remove(Request $request, string $id) {
			$topic = Topic::find($id);
			$topic->delete();

			return redirect('/');
		}
}
