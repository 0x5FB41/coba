<a {{ $attributes->merge([
    'href' => $href,
    'class' => $active ? 'bg-gray-900 text-white px-4 py-2' : 'text-gray-300 hover:bg-gray-700 hover:text-white px-4 py-2'
]) }} class="inline-block rounded-md text-sm font-medium my-2 transition-all duration-300 ease-in-out">
{{ $slot }}
</a>
