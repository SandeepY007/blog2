@props(['name'])
<span class="text-red-500 text-sm">
    @error($name)
        {{ $message }}
    @enderror
</span>