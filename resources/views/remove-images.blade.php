<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            {{ __('Remove Gallery Images What You Want') }}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Id.."
                    title="Type in a name">

                <table id="myTable">
                    <thead>
                        <tr class="header">
                            <th style="width:13%;">ID</th>

                            <th style="width:20%;">Images</th>
                            <th style="width:20%;">Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($image as $item)
                            <tr>

                                <td style="text-align: center">{{ $item->gallery_id }} </td>

                                <td><img src="{{ URL::to($item->gallery_images) }}"></td>


                                <td style="text-align: center;">

                                    <a href="{{ URL::to('/image-delete/' . $item->gallery_id) }}"><button
                                            class="button button2">Delete</button></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>

                <script>
                    function myFunction() {
                        var input, filter, table, tr, td, i, txtValue;
                        input = document.getElementById("myInput");
                        filter = input.value.toUpperCase();
                        table = document.getElementById("myTable");
                        tr = table.getElementsByTagName("tr");
                        for (i = 0; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td")[0];
                            if (td) {
                                txtValue = td.textContent || td.innerText;
                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                    tr[i].style.display = "";
                                } else {
                                    tr[i].style.display = "none";
                                }
                            }
                        }
                    }

                </script>


            </div>
        </div>
    </div>
</x-app-layout>
