<x-layout>

    <form method="POST" action="/ideas/{{ $idea->id }}">

        @csrf

        @method('PATCH')

        <div class="col-span-full">
            <label for="description" class="block text-sm/6 font-medium text-white">About</label>
            <div class="mt-2">
                <textarea id="description" name="description" rows="3" class="textarea w-full">{{ $idea->description }}</textarea>
            </div>
            <p class="mt-3 text-sm/6 text-gray-400">Have an idea you want to save for leater</p>
        </div>

        <div class="mt-6 flex items-center  gap-x-2">
            <button type="submit" class="btn btn-primary">Update
            </button>

            <button type="submit" form="delete-idea-form" class="btn btn-error">Delete
            </button>
        </div>
    </form>

    <div class="mt-6 text-white">

        <h2 class="font-bold">Edit Your Idea</h2>



    </div>

    <form id="delete-idea-form" method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('DELETE')
    </form>

</x-layout>
