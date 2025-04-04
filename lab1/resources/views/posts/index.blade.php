
<x-layout>
<!-- Main Content -->
<div class="flex-grow p-8">
    <div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">All Blog Posts</h1>

        <div class="overflow-x-auto">
            <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
                <thead class="bg-gray-100 text-gray-700 uppercase text-sm font-bold">
                <tr>
                    @foreach($header as $field)
                        <th class="border border-gray-300 px-4 py-3 text-center">{{ $field }}</th>
                    @endforeach
                </tr>
                </thead>
                <tbody class="text-gray-800">
                @foreach($posts as $post)
                    <tr class="border border-gray-200 hover:bg-gray-50 transition">
                        <td class="px-4 py-3 text-center font-semibold">{{ $post['id'] }}</td>
                        <td class="px-4 py-3">{{ $post['title'] }}</td>
                        <td class="px-4 py-3">{{ $post['postedBy'] }}</td>
                        <td class="px-4 py-3 text-gray-600">{{ \Carbon\Carbon::parse($post['created_at'])->format('l jS \of F Y h:i A') }}</td>
                        <td class="px-4 py-3 flex justify-center space-x-2">


                            <a class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded transition duration-300" href="{{route('posts.show',$post['id'])}}">
                                View
                            </a>
                            <a class="bg-indigo-500 hover:bg-indigo-600 text-white px-3 py-1 rounded transition duration-300" href="{{route('posts.edit', $post['id'])}}">
                                Edit
                            </a>
                            <form id="delete-form-{{$post['id']}}" action="{{ route('posts.destroy', $post['id']) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>

                            <a class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded transition duration-300" onclick="event.preventDefault(); document.getElementById('delete-form-{{$post['id']}}').submit();" href="#">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6 flex justify-end">
            <a class="bg-green-500 hover:bg-green-600 text-white px-5 py-2 rounded-lg font-semibold transition duration-300"
               href="{{route('posts.create')}}">
                Create Post
            </a>
        </div>

        <!-- Pagination -->
        <div class="mt-6 flex justify-center space-x-2">
            <button class="px-4 py-2 border border-gray-300 rounded-lg bg-white hover:bg-gray-100 transition duration-300">
                Previous
            </button>
            <button class="px-4 py-2 border border-gray-300 rounded-lg bg-blue-500 text-white hover:bg-blue-600 transition duration-300">
                1
            </button>
            <button class="px-4 py-2 border border-gray-300 rounded-lg bg-white hover:bg-gray-100 transition duration-300">
                2
            </button>
            <button class="px-4 py-2 border border-gray-300 rounded-lg bg-white hover:bg-gray-100 transition duration-300">
                Next
            </button>
        </div>

    </div>
</div>

</x-layout>
