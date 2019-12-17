@extends('back_end.layouts.admin_master')

@section('add-food-menu')
    @if(session()->has('error'))
        <h3>{{ session()->get('error') }}</h3>
        @endif
    <form action="{{ route('menu.add-item') }}" method="post" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="container mt-2 px-4">
            <div class="row">
                <div class="col-lg-7">
                    <!-- Food Menu Information Card started From here -->
                    <div class="card">
                        <div class="card-header do-custom-header" style="background-color: #00796b; color: #ffeeee">
                            <h6 class="text-center text-uppercase">Food Menu Information</h6>
                        </div>
                        <div class="card-body" style="background-color: #e0e0e0">
                            <div class="form-row mb-2">

                                <!-- Food Menu Name Section -->
                                <div class="col">
                                    <small id="titleName" class="form-text text-dark mb-1">Food Menu Name
                                        <span class="text-danger">*</span></small>
                                    <input type="text" name="menu_name" class="form-control form-control-sm"
                                           id="menuName"
                                           aria-describedby="titleName" placeholder="Food Menu Name">
                                </div>

                                <!-- Food Menu Type Section started from here -->
                                <div class="col">
                                    <small id="titleName" class="form-text text-dark mb-1">Menu Type
                                        <span class="text-danger">*</span></small>
                                    <select name="menu_type" class="form-control form-control-sm"
                                            id="menuType"
                                            aria-describedby="titleName">
                                        <option value="Thai">Thai</option>
                                        <option value="Indian">Indian</option>
                                        <option value="Italian">Italian</option>
                                    </select>
                                </div>

                            </div>

                            <div class="form-row mb-2">
                                <!-- Category Name Section Started from here -->
                                <div class="col">
                                    <small id="titleName" class="form-text text-dark mb-1">Food Categories
                                        <span class="text-danger">*</span></small>
                                    <select name="menu_category" class="form-control form-control-sm"
                                            id="menuCategory"
                                            aria-describedby="titleName" onblur="setMenuCode()">
                                        <option value="Burger">Burger</option>
                                        <option value="Pasta">Pasta</option>
                                        <option value="Pasta">Pasta</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row mb-2">
                                <div class="col">
                                    <small id="titleName" class="form-text text-dark mb-1">Food Menu Code
                                        <span class="text-danger">*</span></small>
                                    <input type="text" name="menu_code" class="form-control form-control-sm"
                                           id="menuCode"
                                           aria-describedby="titleName" placeholder="BUR-AMIRI-CONX-0089" readonly>
                                </div>
                            </div>

                            <!-- Food Menu Description section started -->
                            <div class="form-row mb-2">
                                <div class="col">
                                    <small id="titleName" class="form-text text-dark mb-1">Food Menu Description
                                        <span class="text-danger">*</span></small>
                                    <textarea id="menuDescription" name="menu_description" id="" cols="30" rows="100">

                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column 7 Section end -->

                <div class="col-lg-5">

                    <!-- Food Menu Options Section Started From here -->
                    <div class="card">
                        <div class="card-header do-custom-header" style="background-color: #00796b; color: #ffeeee">
                            <h6 class="text-center text-uppercase">Food Menu Options</h6>
                        </div>
                        <div class="card-body" style="background-color: #e0e0e0">
                            <!-- Availability Status Started from here -->
                            <div class="form-row mb-2">
                                <div class="col">
                                    <small id="titleName" class="form-text text-dark mb-1">Availability Status
                                        <span class="text-danger">*</span></small>
                                    <select name="menu_availability" class="form-control form-control-sm"
                                            id="menuAvailability"
                                            aria-describedby="titleName">
                                        <option selected>-- Availability Status --</option>
                                        <option value="In Stock">In Stock</option>
                                        <option value="Limited">Limited</option>
                                        <option value="Out Stock">Out Of Stock</option>
                                        <option value="Pre Book">Pre Book</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row mb-2">

                                <!-- Product Per Unit Section Started -->
                                <div class="col-4">
                                    <small id="titleName" class="form-text text-dark mb-1">Menu Unit
                                        <span class="text-danger">*</span></small>
                                    <input type="text" name="menu_unit" class="form-control form-control-sm"
                                           aria-describedby="titleName" placeholder="Menu unit">
                                </div>
                                <div class="col">
                                    <small id="titleName" class="form-text text-dark mb-1">Estimated delivery time
                                        <span class="text-danger">*</span></small>
                                    <input type="text" name="menu_delivery_time" class="form-control form-control-sm"
                                           aria-describedby="titleName" placeholder="Estimated delivery time">
                                </div>

                            </div>

                            <div class="form-row mb-2">

                                <!-- Product Per Unit Section Started -->
                                <div class="col-4">
                                    <small id="titleName" class="form-text text-dark mb-1">Discount
                                        <span class="text-danger">*</span></small>
                                    <input type="text" name="menu_discount" class="form-control form-control-sm"
                                           aria-describedby="titleName" placeholder="50% OFF">
                                </div>
                                <div class="col">
                                    <small id="titleName" class="form-text text-dark mb-1">Delivery fee
                                        <span class="text-danger">*</span></small>
                                    <input type="text" name="menu_delivery_fee" class="form-control form-control-sm"
                                           aria-describedby="titleName" placeholder="45 taka ">
                                </div>

                            </div>


                        </div>
                    </div>
                    <!-- End Food Menu Options Card  -->


                    <!-- Product Options Images section started  -->
                    <div class="card">
                        <div class="card-header do-custom-header" style="background-color: #00796b; color: #ffeeee">
                            <h6 class="text-center text-uppercase"> Product images</h6>
                        </div>
                        <div class="card-body" style="background-color: #e0e0e0">
                            <div class="box">
                                <input type="file" name="menu_image" id="file-1" class="inputfile inputfile-1"
                                       data-multiple-caption="{count} files selected" multiple style="display: none"/>
                                <label for="file-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="13"
                                         viewBox="0 0 20 17">
                                        <i class="fas fa-cloud-upload-alt"></i>
                                    </svg>
                                    <span>Choose one Image or Multiple Images</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <input type="submit" class="btn" style="background-color:
                                #00796b; padding: 8px 21px; color: #e0e0e0; font-size: 17px"
                                   value="Submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        function setMenuCode() {

                var getMenuName = document.getElementById('menuName').value;
                var getMenuType = document.getElementById('menuType').value;
                var getMenuCategory = document.getElementById('menuCategory').value;

                var slicedMenuName = getMenuName.slice(0,4).toUpperCase();
                var slicedMenuType = getMenuType.slice(0,4).toUpperCase();
                var slicedMenuCategory = getMenuCategory.slice(0,4).toUpperCase();
                // var finalProductName = slicedProductName.toUpperCase();
                document.getElementById('menuCode').value = slicedMenuName +'-'+slicedMenuType+'-'+slicedMenuCategory;
        }
    </script>
@endsection
