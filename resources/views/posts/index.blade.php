@extends('layout.app')


@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg"> 
            @auth
            <form action="{{ route('posts') }}" method="post" class="mb-4">
                @csrf
                <div class="mb-4">
                    <label for="body" class="sr-only">Body</label>
                    <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Post something!"></textarea>

                    @error('body')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Post</button>
                </div>
            </form>
        @endauth
        </div>

    </div>
@if($posts->count())
    @foreach ($posts as $post) 
    <div class="flex m-7 ">

        <div class="w-2/12">

            

        </div> 

        
        <div class="w-5/12 bg-white p-9 rounded-lg">
            <div class="ml-1">
                <span class="font-bold">{{ 
                    //auth()->user()->find($post->user_id)->name  
                    $post->user->name
                    }} </span>
                <span class="ml-10 float-right text-sm">{{ $post->created_at->diffForHumans() }}</span>

            </div>


            <div class="text-blue-300 mt-2">
                {{-- @foreach ($posts as $post) --}}
                <p>{{ $post->body }}</p>
                {{-- @endforeach --}}
            </div>

        </div>       
  
    </div>

    @endforeach
@endif 

@endsection