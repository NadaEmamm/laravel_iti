
<x-layout>

<!-- Form Container -->
<div class="flex justify-center items-center flex-grow p-8">
    <div class="max-w-3xl w-full bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Edit Post</h1>

        <form action="/posts/{{$post['id']}}" method="POST" class="space-y-4">
            @csrf
            @method('PATCH')
            <!-- Title -->
            <div>
                <label for="title" class="block text-gray-700 font-semibold mb-1">Title</label>
                <input type="text" id="title" name="title"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" value="{{$post['title']}}">
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-gray-700 font-semibold mb-1">Description</label>
                <textarea id="description" name="description" rows="4"
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
                    {{$post['description']}}
                </textarea>
            </div>

            <!-- Post Creator -->
            <div>
                <label for="creator" class="block text-gray-700 font-semibold mb-1">Post Creator</label>
                <select id="creator" name="creator"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none value="{{$post['postedBy']}}">
                    <option selected>Mohamed</option>
                    <option>Ahmed</option>
                    <option>Ali</option>
                </select>
            </div>

            <!-- Create Button -->
            <div class="flex justify-end">
                <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold transition duration-300" >
                    Update
                </button>
            </div>
        </form>
    </div>
</div>

</x-layout>
