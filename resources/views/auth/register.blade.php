<x-layout>

    <form action="/register" method="POST">
        @csrf

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
            <legend class="fieldset-legend">Register</legend>

            <label class="label" for="name">Name</label>
            <input class="input" name="name" id="name" placeholder="Your Name" required />

            <label class="label" for="email">Email</label>
            <input type="email" name="email" class="input" id="email" placeholder="Your Email" required />

            <label class="label" for="password">Password</label>
            <input type="password" name="password" id="password" class="input" placeholder="Password" required />

            <button class="btn btn-neutral mt-4">Register</button>
        </fieldset>
    </form>

</x-layout>
