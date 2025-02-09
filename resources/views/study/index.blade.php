<x-layout>

    <x-slot:title>{{$title}}</x-slot:title>

    <div class="mb-3">
        <a class="btn btn-primary" href="{{route('study.create')}}" role="button">Create</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
        
        <ul class="list-group">
            @foreach($studies as $study)
            <li class="list-group-item">
            {{ $loop->iteration .'. '. $study->name }}
            <a href="{{route('study.edit', $study)}}">&#9999;</a>
        </li>
            @endforeach

    </ul>

</x-layout>
