<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            {{ __('Remove Menu Item') }}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Name"
                    title="Type in a name">
                <input type="text" id="myInputt" onkeyup="myFunctionn()" placeholder="Search by Name"
                    title="Type in a name">


                <table border="1" id="myTable">
                    <thead>
                        <tr class="header">
                            <th style="width:13%;">Item Image</th>

                            <th style="width:20%;">Item Name</th>
                            <th style="width:20%;">Item Quality</th>
                            <th style="width:20%;">Item Price</th>
                            <th style="width:20%;">Item Description</th>


                            <th style="width:20%;">Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($image as $item)
                            <tr align="center">
                                <td><img src="{{ URL::to($item->iteam_image) }}"></td>
                                <td>{{ $item->iteam_name }}</td>
                                <td>{{ $item->iteam_quality }}</td>
                                <td>{{ $item->iteam_price }}</td>
                                <td>{{ $item->iteam_description }}</td>





                                <td style="text-align: center;">
                                    <a href="{{ URL::to('/menu-edit/' . $item->iteam_id) }}"><button
                                            class="button button1">Edit</button><a>

                                            <a href="{{ URL::to('/menu-delete/' . $item->iteam_id) }}"><button
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
                            td = tr[i].getElementsByTagName("td")[1];

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

                    function myFunctionn() {
                        var input, filter, table, tr, td, i, txtValue;
                        input = document.getElementById("myInputt");
                        filter = input.value.toUpperCase();
                        table = document.getElementById("myTable");
                        //table = document.getElement("txtValue");
                        //tr = table.getElementsByTagName("tr");
                        tr = table.getElementsByTagName("tr");
                        for (i = 0; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td")[2];

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
