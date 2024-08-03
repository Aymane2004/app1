<x-layout>
    <h1>test the slot var </h1>
</x-layout>
@foreach ($people as $person)
    <li>{{$person['fname']}}</li>
@endforeach
