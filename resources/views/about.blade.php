<x-layout>
    {{-- Terima data dari route, lalu kirimkan ke layout.blade --}}
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Your content -->
    <div>
        <p>Welcome to my About!</p>
        <p>Nama: {{ $name }}</p>
    </div>

</x-layout>
