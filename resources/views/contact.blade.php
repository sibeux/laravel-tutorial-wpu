<x-layout>
    {{-- Terima data dari route, lalu kirimkan ke layout.blade --}}
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Your content -->
    <h1 class="text-white">Contact</h1>
    <ul class="text-white">
        <li>
            <a href="https://instagram.com/nasrulwahabi">Instagram</a>
        </li>
        <li>
            <a href="https://x.com/wahabinasrul">X</a>
        </li>
        <li>
            <a href="https://facebook.com/m.n.wahabi">Facebook</a>
        </li>
    </ul>
</x-layout>
