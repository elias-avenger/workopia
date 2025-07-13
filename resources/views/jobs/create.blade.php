<x-layout>
    <h1>Create a new job</h1>
    <form method="POST" action="{{route('jobs.store')}}" enctype="multipart/form-data">
        @csrf

        <div class="my-5">
            Title: <input type="text" name="title" placeholder="Job title" value="{{old('title')}}">
            @error('title')
            <div class="text-red-500 mt-2 text-sm">{{$message}}</div>    
            @enderror
        </div>

        <div class="mb-5">
            Description: <input type="text" name="description" placeholder="Job description" value="{{old('description')}}">
            @error('description')
            <div class="text-red-500 mt-2 text-sm">{{$message}}</div>    
            @enderror
        </div>
        
        <input type="submit" name="submit">
    </form>
</x-layout>