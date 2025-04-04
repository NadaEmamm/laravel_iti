<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    @vite(['resources/css/app.css'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

<!-- Navbar -->
<nav class="bg-gray-800 text-white py-4 px-8 flex justify-between items-center">
    <h1 class="text-xl font-bold">ITI Blog</h1>
    <div class="space-x-4">
        <a href="{{ route('posts.index') }}" class="hover:underline">All Posts</a>
        <a href="{{ route('posts.create') }}" class="hover:underline">Create Post</a>
    </div>
</nav>
{{ $slot }}
</body>
</html>
