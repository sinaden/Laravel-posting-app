@extends('layout.app')


@section('content')
    <div class="flex justify-center">
        <div class="w-3/12 sm:h-90 bg-white p-6 rounded-lg bg-gradient-to-t from-gray-200 to-white-100"> 
            {{-- Your Profile 
            <div class="mb-4 ">
                Name

            </div> --}}

            <div tabindex="0" aria-label="card 1" class="focus:outline-none flex sm:w-full md:w-11/12 pb-20">
            <div class="w-20 h-20 relative mr-5">
                <div class="absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/icon_and_text-SVG2.svg" alt="drawer">
                </div>
            </div>
            <div class="w-11/12">
                <h2 tabindex="0" class="focus:outline-none text-lg font-bold leading-tight text-gray-800">{{auth()->user()->name}}'s Profile</h2>
                <p tabindex="0" class="focus:outline-none text-base text-gray-600 leading-normal pt-2">A summary of user's information as well as a dashboard for changing personal details. </p>
            </div>
            </div>


            <div class="mb-4">
                <label class="sr-only">Email</label>

            </div>
        </div>
        {{-- <div class="relative sm:h-96  rounded-lg ">
      
            <!-- Background Image -->
            <img src="https://picsum.photos/seed/1840/1000/600" class="object-cover w-full h-full rounded-lg" />
            
            <!-- Content -->
            <div class="absolute w-full h-full bottom-0 bg-gradient-to-r from-fuchsia-700/30 to-violet-700 rounded-lg flex flex-col items-center justify-center text-center">
            
                <!-- Company Logo -->
                <img src="https://github.githubassets.com/images/modules/site/enterprise/launchpad/logos/logo-dowjones.svg" />
        
                <!-- Quotes -->
                <p class="text-lg px-14 text-gray-300 mt-10">
                  GitHub helps us ensure that we have our security controls baked into our pipelines all the way from the first line of code we’re writing.
                </p>
        
                <!-- Photo -->
                <img src="https://picsum.photos/50/50" class="rounded-full border-2 mt-8" />
        
                <!-- Title -->
                <p class="text-base font-bold px-14 text-gray-300 mt-3">
                  Chief Information Security Officer
                </p>
        
                <p class="text-sm font-light px-14 text-gray-300 ">
                  Dow Jones
                </p>
        
            </div>
        
          </div> --}}
        
   
   
    </div>

@endsection


