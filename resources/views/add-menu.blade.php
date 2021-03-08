<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            {{ __('Please Add Menu') }}

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
                <form action="{{ url('/save-menu') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="container container_own">

                        <h1 align="center">Please fill in this form to Add Menu.</h1></br>
                        <hr>
                        <table align="center">

                            <tr>
                                <td>Iteam Name</td>

                                <td></td>
                                <td><input type="text" placeholder="Iteam Name" name="iteam_name" required></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td></td>
                                <td><input type="number" min="0.00" max="10000.00" step="1.0" name="iteam_price"
                                        required>
                                </td>
                            </tr>
                            <tr>
                                <td>Quality</td>
                                <td></td>
                                <td><select name="iteam_quality" id="quality_id">
                                        <option value="Starters">Starters</option>
                                        <option value="Salad">Salad</option>
                                        <option value="Specialty">Specialty</option>

                                    </select></td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td></td>
                                <td><input type="file" name="iteam_image" required></td>
                            </tr>

                            <tr>
                                <td>Description</td>

                                <td></td>
                                <td><textarea name="iteam_description" id="" rows="5" cols="50" maxlength="100"
                                        placeholder="Describe In 100 Words" required></textarea>
                                </td>
                            </tr>

                        </table>
                        <p align="right">
                            <button type="submit" class="registerbtn">Add Menu</button>
                        </p>
                    </div>


                </form>


            </div>
        </div>
    </div>
</x-app-layout>
