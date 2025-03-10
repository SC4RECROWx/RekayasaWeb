<div>
<x-layout>

<x-slot:title>{{$title}}</x-slot:title>
    <form action="{{route('study.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Study<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
            value="{{old('name')}}" required>
            @error('name')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{$message}}
                </div>
        </div>
        @enderror
        
        <a class="btn btn-warning" href="{{route('study.index')}}" role="button">Back</a>
        <button type="submit" class="btn btn-primary">Save</button>

    </form>
</x-layout>

</div>
