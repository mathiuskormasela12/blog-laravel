<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog - Add {{ucfirst($name)}}</title>
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
						<a class="nav-link" aria-current="page" href="/">Topic</a>
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
					<h1>{{ucfirst($name)}}</h1>
				</div>
				<div class="col-md-12 mt-4 mb-5">
					<form action="/add-{{$name}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">{{ucfirst($name)}} Title</label>
							<input type="text" name="{{$name}}_title" class="form-control" id="exampleFormControlInput1" placeholder="{{ucfirst($name)}} Title...">
						</div>
						<div class="mb-3">
							<label for="exampleFormControlTextarea1" class="form-label">{{ucfirst($name)}} Description</label>
							<textarea name="{{$name}}_description" class="form-control" placeholder="{{ucfirst($name)}} Description..." id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
						<div  class="mb-3">
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</form>
				</div>
			</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  </body>
</html>
