@extends('dashboard.layouts.app')
@section('style')
@endsection

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Add New Auditor</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                    <li class="breadcrumb-item"><a href="/backoffice/dashboard/index" class="default-color">Home</a>
                    </li>
                    <li class="breadcrumb-item active ps-0">Add New Auditor</li>
                </ol>
            </div>
        </div>
    </div>
    @if ($message = \Session::get('errors'))

        <div class="alert alert-danger alert-block">
            @foreach($message->all() as $error)
                <strong>{{ $error }}</strong><br>
            @endforeach
        </div>
    @endif
    <div class="row">
        <div class="col-xl-12 mb-30">
            @if(session()->get('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session()->get('error') }}
                </div>
            @endif
            @if(session()->get('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="card card-statistics mb-30">
                <div class="card-body">
                    <form action="{{ route('dashboard.auditor.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9 mb-30">
                                <div class="card card-statistics h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4 col-xl-12 col-xxl-4 mb-3">
                                                <label class="form-label" for="first_name">First Name*</label>
                                                <input type="text" class="form-control" name="first_name" required
                                                       value="{{old('first_name')}}">
                                                @if($errors->has('first_name'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('first_name') }}
                                                    </div>
                                                @endif
                                                <div id="first_nameError" class="invalid-feedback"></div>
                                            </div>

                                            <div class="col-sm-4 col-xl-12 col-xxl-4 mb-3">
                                                <label class="form-label" for="middle_name">Middle Name
                                                    (Optional)</label>
                                                <input type="text" class="form-control" name="middle_name"
                                                       value="{{old('middle_name')}}">
                                                @if($errors->has('middle_name'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('middle_name') }}
                                                    </div>
                                                @endif
                                                <div id="middle_nameError" class="invalid-feedback"></div>
                                            </div>

                                            <div class="col-sm-4 col-xl-12 col-xxl-4 mb-3">
                                                <label class="form-label" for="last_name">Last Name*</label>
                                                <input type="text" class="form-control" name="last_name" required
                                                       value="{{old('last_name')}}">
                                                @if($errors->has('last_name'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('last_name') }}
                                                    </div>
                                                @endif
                                                <div id="last_nameError" class="invalid-feedback"></div>
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="col-sm-4 col-xl-12 col-xxl-4 mb-3">
                                                <label class="form-label" for="slug">slug</label>
                                                <input type="text" class="form-control" name="slug" required
                                                       value="{{old('slug')}}">
                                                @if($errors->has('slug'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('slug') }}
                                                    </div>
                                                @endif
                                                <div id="slugError" class="invalid-feedback"></div>
                                            </div>

                                            <div class="col-sm-4 col-xl-12 col-xxl-4 mb-3">
                                                <label class="form-label" for="date_of_birth">Date of Birth</label>
                                                <div class="datepicker-form">
                                                    <div class="input-group date display-years" data-date-format="yyyy-mm-dd" data-date="">
                                                        <input  id="datepicker-input" name="date_of_birth" value="{{old('date_of_birth')}}" class="form-control" type="text" placeholder="">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                                @if($errors->has('date_of_birth'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('date_of_birth') }}
                                                    </div>
                                                @endif
                                                <div id="date_of_birthError" class="invalid-feedback"></div>
                                            </div>

                                            <div class="col-sm-4 col-xl-12 col-xxl-4 mb-3">
                                                <label class="form-label" for="gender">Gender*</label>
                                                <select required class="form-control form-select form-select-lg mb-15"
                                                        aria-label=".form-select-lg example" name="gender">
                                                    <option selected="">Choose...</option>
                                                    <option
                                                        value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>
                                                        Male
                                                    </option>
                                                    <option
                                                        value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>
                                                        Female
                                                    </option>
                                                </select>
                                                @if($errors->has('gender'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('gender') }}
                                                    </div>
                                                @endif
                                                <div id="genderError" class="invalid-feedback"></div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4 col-xl-12 col-xxl-3 mb-3">
                                                <label class="form-label" for="number">Number</label>
                                                <input type="text" class="form-control" name="number" value="{{old('number')}}">
                                                @if($errors->has('number'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('number') }}
                                                    </div>
                                                @endif
                                                <div id="numberError" class="invalid-feedback"></div>
                                            </div>

                                            <div class="col-sm-4 col-xl-12 col-xxl-3 mb-3">
                                                <label class="form-label" for="email">Email</label>
                                                <input type="text" class="form-control" name="email" value="{{old('email')}}">
                                                @if($errors->has('email'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('email') }}
                                                    </div>
                                                @endif
                                                <div id="emailError" class="invalid-feedback"></div>
                                            </div>

                                            <div class="col-sm-4 col-xl-12 col-xxl-3 mb-3">
                                                <label class="form-label" for="website">website</label>
                                                <input type="text" class="form-control" name="website" value="{{old('website')}}">
                                                @if($errors->has('website'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('website') }}
                                                    </div>
                                                @endif
                                                <div id="websiteError" class="invalid-feedback"></div>
                                            </div>

                                            <div class="col-sm-4 col-xl-12 col-xxl-3 mb-3">
                                                <label class="form-label" for="nationality">Nationality</label>
                                                <select required class="form-control form-select form-select-lg mb-15"
                                                        aria-label=".form-select-lg example" name="nationality">
                                                    <option selected="">Choose...</option>

                                                </select>
                                            </div>

                                        </div>


                                        <div class="mb-3">
                                            <label class="form-label" for="biography">Biography</label>
                                            <textarea id="summernote" name="biography" class="form-control"
                                                      rows="2">{{old('biography')}}</textarea>
                                            @if($errors->has('biography'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('biography') }}
                                                </div>
                                            @endif
                                            <div id="biographyError" class="invalid-feedback"></div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-30">

                                <div class="card card-statistics h-10">
                                    <div class="card-body">
                                        <h5 class="card-title">Author Status</h5>
                                        <div class="form-group mb-3">
                                            <div class="checkbox checbox-switch switch-success">
                                                <label>
                                                    <input name="status" type="checkbox" id="statusCheckbox" checked=""
                                                           value="active">
                                                    <span></span>
                                                    Active/Inactive
                                                </label>
                                                <!-- Hidden input field to store the actual status value -->
                                                <input type="hidden" name="status" id="status_hidden" value="active">
                                                @if($errors->has('status'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('status') }}
                                                    </div>
                                                @endif
                                                <div id="statusError" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics h-10">
                                    <div class="card-body">
                                        <h5 class="card-title">Featured Author</h5>
                                        <div class="form-group mb-3">
                                            <div class="checkbox checbox-switch switch-success">
                                                <label>
                                                    <input name="featured" type="checkbox" id="featuredAuthor"
                                                           checked=""
                                                           value="1">
                                                    <span></span>
                                                    Yes/No
                                                </label>
                                                <!-- Hidden input field to store the actual status value -->
                                                <input type="hidden" name="featured" id="featured_hidden" value="1">
                                                @if($errors->has('featured'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('featured') }}
                                                    </div>
                                                @endif
                                                <div id="featuredError" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card card-statistics h-10">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label d-block" for="image">Image</label>
                                            <input name="image" type="file" value="{{old('image')}}"
                                                   class="form-control" id="image">
                                            @if($errors->has('image'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('image') }}
                                                </div>
                                            @endif
                                            <div id="imageError" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics h-20">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="meta_title">Meta Title</label>
                                            <input name="meta_title" type="text" class="form-control"
                                                   value="{{old('meta_title')}}" id="meta_title"
                                                   placeholder="Meta Title">
                                            @if($errors->has('meta_title'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('meta_title') }}
                                                </div>
                                            @endif
                                            <div id="metaTitleError" class="invalid-feedback"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="meta_description">Meta Description</label>
                                            <textarea name="meta_description" class="form-control" id="meta_description"
                                                      rows="2"> {{old('meta_description')}}</textarea>
                                            @if($errors->has('meta_description'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('meta_description') }}
                                                </div>
                                            @endif
                                            <div id="metaDescriptionError" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>


                            </div>


                            <button id="submitBtn" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            // Add an event listener to update the hidden input's value when the switch is toggled
            $("#statusCheckbox").on("change", function () {
                if ($(this).prop("checked")) {
                    $("#status_hidden").val('active');
                } else {
                    $("#status_hidden").val('inactive');
                }
            });


            // Add an event listener to update the hidden input's value when the switch is toggled
            $("#featuredAuthor").on("change", function () {
                if ($(this).prop("checked")) {
                    $("#featured_hidden").val(1);
                } else {
                    $("#featured_hidden").val(0);
                }
            });
        });
    </script>



    <script>
        // JavaScript array containing all country names
        var countries = [
            "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia", "Australia",
            "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
            "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi",
            "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia",
            "Comoros", "Congo", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti",
            "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia",
            "Eswatini", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece",
            "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hungary", "Iceland", "India",
            "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya",
            "Kiribati", "Korea, North", "Korea, South", "Kosovo", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho",
            "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali",
            "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia",
            "Montenegro", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua",
            "Niger", "Nigeria", "North Macedonia", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay",
            "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia",
            "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia",
            "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Sudan",
            "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand",
            "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine",
            "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela",
            "Vietnam", "Yemen", "Zambia", "Zimbabwe"
        ];

        function generateOptions() {
            for (var i = 0; i < countries.length; i++) {
                var option = document.createElement("option");
                option.value = countries[i];
                option.text = countries[i];
                document.querySelector("select[name='nationality']").appendChild(option);
            }
        }

        generateOptions();
    </script>




@endsection


