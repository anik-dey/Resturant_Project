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
                <form action="{{ url('/update-menu', $iteam_view->iteam_id) }}" method="post"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @php echo $iteam_view->iteam_name; @endphp
                    <div class="container container_own">

                        <h1 align="center">Please fill in this form to Edit Menu.</h1></br>
                        <hr>
                        <table align="center">

                            <tr>
                                <td>Iteam Name</td>

                                <td></td>
                                <td><input type="text" value={{ $iteam_view->iteam_name }} name="iteam_name"></td>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td></td>
                                <td><input type="number" min="0.00" max="10000.00" step="1.0"
                                        value={{ $iteam_view->iteam_price }} name="iteam_price" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Quality</td>
                                <td></td>
                                <td><select name="iteam_quality" id="quality_id">
                                        <option value={{ $iteam_view->iteam_quality }}>
                                            {{ $iteam_view->iteam_quality }}</option>
                                        <option value="Starters">Starters</option>
                                        <option value="Salad">Salad</option>
                                        <option value="Specialty">Specialty</option>

                                    </select></td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td></td>
                                <td><input type="file" name="iteam_image">
                                </td>
                            </tr>

                            <tr>
                                <td>Description</td>

                                <td></td>
                                <td><textarea id="" rows="5" cols="50" maxlength="100" name="iteam_description"
                                        required>{{ $iteam_view->iteam_description }}</textarea>
                                </td>
                            </tr>

                        </table>
                        <p align="right">
                            <button type="submit" class="registerbtn">Save Menu</button>
                        </p>
                    </div>


                </form>


            </div>
        </div>
    </div>
</x-app-layout>
