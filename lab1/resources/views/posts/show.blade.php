
<x-layout>
<!-- Main Content -->
<div class="flex-grow p-8">
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-4 text-center">Post Details</h1>

        <!-- Post Info -->
        <div class="bg-gray-50 p-4 rounded-lg border">
            <h2 class="text-lg font-semibold text-gray-700">Post Info</h2>
            <p class="mt-2 text-gray-600"><span class="font-bold">Title :</span> {{$post['title']}}</p>
            <p class="mt-1 text-gray-600"><span class="font-bold">Description :</span> {{$post['description']}}.</p>
        </div>

        <!-- Post Creator Info -->
        <div class="bg-gray-50 p-4 rounded-lg border mt-4">
            <h2 class="text-lg font-semibold text-gray-700">Post Creator Info</h2>
            <p class="mt-2 text-gray-600"><span class="font-bold">Name :</span> {{$post['postedBy']}}</p>
            <p class="mt-1 text-gray-600">
                <span class="font-bold">Created At :</span>
                <span class="text-blue-500">{{$post['created_at']}}</span>
            </p>
        </div>
    </div>
</div>

</x-layout>
