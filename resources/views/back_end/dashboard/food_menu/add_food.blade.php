@extends('back_end.layouts.admin_master')

@section('add-new-food-menu')
    <div class="container">
        <div class="row">
            <h3>{{ session()->get('s') }}</h3>
            <h3>{{ session()->get('e') }}</h3>
            <div class="col-lg-12">
                <form class="needs-validation" novalidate action="{{ route('menu.process-add-item') }}" method="post" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="form">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Menu name</label>
                            <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Menu name" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                    </div>
{{--                    {{ $id = Auth::user()->id }}--}}
                    <div class="form">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Price</label>
{{--                            <input type="hidden" name="manager_id" value="">--}}
                            <input type="text" name="price" class="form-control" id="validationCustom03" placeholder="Price" required>
                            <div class="invalid-feedback">
                                Please provide a valid Price.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea name="des" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 custom-file">
                        <input type="file" name="file" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="agree" type="checkbox" value="agree" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    @endsection
