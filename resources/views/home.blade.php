<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog - Topic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
	<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
		<div class="container">
			<a class="navbar-brand" href="#">Blog</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="/">Topic</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/materi">Materi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/content">Content</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/information">Information</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
    <div class="container">
			<div class="row mt-5">
				<div class="col-md-12">
					<h1>Topic</h1>
				</div>
				<div class="col-md-12 mt-4 mb-5">
					<a href="/add-topic" class="btn btn-primary">Add Topic</a>
				</div>
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th>No.</th>
								<th>Topic Title</th>
								<th>Topic Description</th>
								<th>Created At</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($topics as $topic)
							<tr>
								<td>{{$topic->id}}</td>
								<td>{{substr($topic->topic_title, 0, 15)}}...</td>
								<td>{{substr($topic->topic_description, 0, 20)}}...</td>
								<td>{{$topic->created_at->format('Y-m-d')}}</td>
								<td>
									<form action="/detail-topic-delete/{{$topic->id}}" method="POST" enctype="multipart/form-data">
										@csrf
										<a href="/detail-topic/{{$topic->id}}" class="btn btn-primary">Detail</a>
										<button type="submit" class="btn btn-danger">Delete</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  </body>
</html>
