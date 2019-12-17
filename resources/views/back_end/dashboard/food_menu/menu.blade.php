@extends('back_end.layouts.admin_master')

@section('menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Menu Name</th>
                        <th scope="col">Menu Type</th>
                        <th scope="col">Menu Description</th>
                        <th scope="col">Image</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_menus as $index=>$all_menu)
                        <tr style="color: #fff">
                            <th scope="row">{{ $index+1 }}</th>
                            <td>{{ $all_menu->menu_name }}</td>
                            <td>{{ $all_menu->menu_type }}</td>
                            <td>{{ $all_menu->menu_description }}</td>
                            <td><img src="{{ asset($all_menu->menu_image) }}" alt="" srcset="" height="89"></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
