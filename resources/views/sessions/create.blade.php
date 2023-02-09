<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mt-10 mx-auto border border-gray-500 p-6 rounded-xl bg-gray-100">
            <h1 class="text-center text-xl font-bold mb-6">LogIn</h1>
            <form action="login" method="POST" class="mt-10">
                @csrf
                <div class="mb-2">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="border border-gray-400 p-2 w-full">
                </div>
                @error('email')
                    <p class="text-red-500 text-sm mt-0 mb-2">{{ $message }}</p>
                @enderror

                <div class="mb-2">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="border border-gray-400 p-2 w-full ">
                </div>
                @error('password')
                    <p class="text-red-500 text-sm mt-0 mb-2">{{ $message }}</p>
                @enderror
                <div class="mb-6 p-8">
                    <input type="submit" value="LogIn"
                        class="border border-gray-500 rounded-xl p-2 w-full bg-blue-200">
                </div>
            </form>
        </main>
    </section>
</x-layout>
