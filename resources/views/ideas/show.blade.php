<x-layout>

    <div class="card bg-neutral p-6 mt-6">



        <div class="mt-6">{{ $idea->description }}</div>

        <div>
            <div class="mt-6 ">
                <a href="/ideas/{{ $idea->id }}/edit" type="submit" class="btn btn-gost">Edit
                </a>




            </div>
        </div>
    </div>
</x-layout>
