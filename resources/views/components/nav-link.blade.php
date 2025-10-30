<!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
{{-- Kode {attributes} => apa pun yang dimasukkan ke attribute komponen, akan masuk ke variable $attributes --}}
<a {{ $attributes }} aria-current="{{ $active ? 'page' : false }}"
    class="{{ $active ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}
    rounded-md px-3 py-2 text-sm font-medium">{{ $slot }}</a>
