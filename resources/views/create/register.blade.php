<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mt-10 mx-auto border border-gray-500 p-6 rounded-xl bg-gray-100">
            <h1 class="text-center text-xl font-bold mb-6">Register</h1>
            <form action="/register" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                        class="border border-gray-400 p-2 w-full ">
                </div>
                <span class="text-red-500 text-sm">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
                    <input type="text" name="username" id="username" value="{{ old('username') }}"
                        class="border border-gray-400 p-2 w-full ">
                </div>
                <span class="text-red-500 text-sm">
                    @error('username')
                        {{ $message }}
                    @enderror
                </span>

                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="border border-gray-400 p-2 w-full">
                </div>
                <span class="text-red-500 text-sm">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="border border-gray-400 p-2 w-full ">
                </div>
                <span class="text-red-500 text-sm">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
                <div class="mb-6 p-8">
                    <input type="submit" value="submit"
                        class="border border-gray-500 rounded-xl p-2 w-full bg-blue-200">
                </div>
            </form>
        </main>
    </section>
</x-layout>
