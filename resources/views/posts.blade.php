<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Posts</title>
</head>

<body>
	<h1>Posts</h1>

	<ul>
		@foreach($posts as $post)
		<li>
			<h3><a href="{{ route('posts.show', ['post' => $post]) }}">{{ $post->title }}</a></h3>
			<p>{{ $post->body }}</p>
		</li>
		@endforeach
	</ul>
</body>

</html>