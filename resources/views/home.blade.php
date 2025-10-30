{{-- Dump & Die => sering dipakai untuk debugging --}}
{{-- {{ dd($title) }} --}}
<x-layout>
    {{-- Terima data dari route, lalu kirimkan ke layout.blade --}}
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Your content -->
    <p class="text-white">Welcome to my homepage!</p>
</x-layout>
