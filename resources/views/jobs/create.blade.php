<x-layout>
    <h1>Create New Job</h1>
    <form action="/jobs" method="POST" >
        @csrf
        <div class="my-5">
            <input name="title" type="text" placeholder="title" value="{{old('title')}}" />
            @error('title')
            <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-5">
            <input name="description" type="text" placeholder="description" value="{{old('description')}}" />
            @error('description')
            <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
            @enderror
        </div>
        <button type="submit">Submit</button>
    </form>
</x-layout>
