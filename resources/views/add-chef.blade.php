<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            {{ __('Chef Pictures') }}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}
                <p class="alert-success"><?php
                    $exception = Session::get('exception');
                    if ($exception) {
                    echo $exception;
                    Session::put('exception', null);
                    }
                    ?>

                <form action="{{ url('/save-chef') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="container container_own">
                        <h1>Add Images</h1>
                        </br>

                        <hr>


                        <label for="file"><b>Chef Images</b></label>
                        <input type="file" placeholder=" Roll" name="chef_image" id="file" required><br></br>

                        <button type="submit" class="registerbtn">Submit</button>
                    </div>


                </form>


            </div>
        </div>
    </div>
</x-app-layout>
