@include('partials.__header', [
    'title' => 'Address | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/deliveryAddress-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

{{-- <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head> --}}

<div id="body-container" class="container-fluid px-0">
    <div id="sidebar" class="sidebar p-2 min-vh-100 offcanvas offcanvas-start" tabindex="-1"
        aria-labelledby="offcanvasExampleLabel">
        <x-sidebar />
    </div>
    <div id="sidebarProfile" class="sidebarProfile p-2 min-vh-100 shadow">
        <x-sidebarProfile/>
    </div>
    <div id="content" class="border content">
        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                    aria-controls="offcanvasExample">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <a href="/" id="logo" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
                {{-- <ul class="nav nav-underline">
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/myprofile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/mypurchase">My Purchase</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/addresses">Addresses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/changepassword">Change Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/reviewsandratings">User Reviews and Ratings</a>
                    </li>
                </ul> --}}
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    <div class="input-group mt-1" style="height: 2em">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                        <input class="form-control rounded-3 search-field" type="text" placeholder="Search">
                    </div>
                    <a href="/messages"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Messages">
                            <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a>
                    <a href="/notification"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Notification">
                            <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a>
                    <a href="/myprofile"><button class="btn mx-1 p-0" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Profile">
                            <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}" alt="notification"
                                width="35" height="35" class="rounded-5" style="margin-right: 2em;">
                        </button></a>
                </div>
            </div>
        </ul>
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="address-container">
            <div class="header">
                <h4>Address</h4>
                <p>Manage your addresses</p>
            </div>
            <button class="btn add-button" data-bs-toggle="modal" data-bs-target="#add-address"><i
                    class="fa fa-plus" aria-hidden="true"></i>Add new address</button>

            @foreach ($address as $receiver)
                <div class="del-address-container">
                    <div class="address-details">
                        <p id="post_name">{{ $receiver->name }} &ensp;&ensp;<span
                                id="post_contact">{{ $receiver->contact_number }}</span></p>
                        <p>{{ $receiver->region . ', ' . $receiver->brgy_village . ', ' . $receiver->city_municipality }},
                            <span>{{ $receiver->postal_code . ', ' . $receiver->street_building_house }}</span>
                        </p>
                        @if ($receiver->default_address == 'true')
                            <p class="default-txt">Default</p>
                        @endif
                    </div>
                    <div class="button-container">
                        <button class="edit-button" id="edit-btn" onclick="edit_function({{ $receiver->id }})"
                            data-bs-toggle="modal" data-bs-target="#edit-address"><a href="#">Edit</a></button>
                        {{-- <button class="edit-button" id="edit-btn" onclick="edit_function({{ $receiver->id }})"><a
                                href="#">Edit</a></button> --}}
                        <a type="button" href="/destroyaddress/{{ $receiver->id }}" id="delete-btn" class="delete-button">Delete</a>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- Add Address Modal -->
        <div class="modal fade" id="add-address" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New Address</h1>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <form action="/storeaddress" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullname" placeholder="Fullname"
                                    name="name" style="margin-bottom: 20px; color: #003060;" required>

                                <label for="contact-number" class="form-label">Contact Number</label>
                                <input type="text" class="form-control" id="contact-number" name="contact_number"
                                    placeholder="Contact Number" style="margin-bottom: 20px; color: #003060;"
                                    required>
                                {{-- <label for="address" class="form-label">Province, City/Municipality, Barangay</label> --}}

                                <label for="region" class="form-label">Region</label>
                                <input type="text" class="form-control" id="region" name="region"
                                    placeholder="Region" style="color: #003060;" required>
                                <div id="region-autocomplete" class="autocomplete"></div>

                                <label for="city_municipality" class="form-label"
                                    style="margin-top: 20px">City/Municipality</label>
                                <input type="text" class="form-control" id="city_municipality"
                                    name="city_municipality" placeholder="City/Municipality" style="color: #003060;"
                                    required>
                                <div id="city_municipality-autocomplete" class="autocomplete"></div>

                                <label for="brgy" class="form-label"
                                    style="margin-top: 20px">Barangay/Village</label>
                                <input type="text" class="form-control" id="brgy" name="brgy_village"
                                    placeholder="Barangay/Village" style="color: #003060;" required>
                                <div id="brgy-autocomplete" class="autocomplete"></div>

                                <label for="postal-code" class="form-label" style="margin-top: 20px">Postal
                                    Code</label>
                                <input type="text" class="form-control" id="postal-code" name="postal_code"
                                    placeholder="Postal Code" style="color: #003060;" required>
                                <div id="postal_code-autocomplete" class="autocomplete"></div>

                                <label for="street" class="form-label" style="margin-top: 20px">Street Name,
                                    Building, House No.</label>
                                <input type="text" class="form-control" id="street"
                                    name="street_building_house" placeholder="Street Name, Building, House No."
                                    style="margin-bottom: 50px; color: #003060;" required>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input default-address" type="checkbox"
                                    name="default_address" value="true" id="default-address">
                                <label class="form-check-label" for="default-address"
                                    style="margin-bottom: 50px; color: #E55B13; margin-left: 8px;">
                                    Set as default address
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary close-button"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn save-button">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Address Modal -->
        <div class="modal fade" id="edit-address" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Address</h1>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <form id="edit_form" method="POST">;
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <span id="edit-id" hidden></span>
                                <label for="fullname" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="edit-fullname" placeholder="Fullname"
                                    name="name" style="margin-bottom: 20px; color: #003060;" required>
                                <label for="contact-number" class="form-label">Contact Number</label>
                                <input type="text" class="form-control" id="edit-contact-number"
                                    name="contact_number" placeholder="Contact Number"
                                    style="margin-bottom: 20px; color: #003060;" required>
                                {{-- <label for="address" class="form-label">Province, City/Municipality, Barangay</label> --}}

                                <label for="edit-region" class="form-label">Region</label>
                                <input type="text" class="form-control" id="edit-region" name="region"
                                    placeholder="Region" style="color: #003060;" required>
                                <div id="edit-region-autocomplete" class="autocomplete"></div>

                                <label for="edit-city_municipality" class="form-label"
                                    style="margin-top: 20px">City/Municipality</label>
                                <input type="text" class="form-control" id="edit-city_municipality"
                                    name="city_municipality" placeholder="City/Municipality" style="color: #003060;"
                                    required>
                                <div id="edit-city_municipality-autocomplete" class="autocomplete"></div>

                                <label for="edit-brgy" class="form-label"
                                    style="margin-top: 20px">Barangay/Village</label>
                                <input type="text" class="form-control" id="edit-brgy" name="brgy_village"
                                    placeholder="Barangay/Village" style="color: #003060;" required>
                                <div id="edit-brgy-autocomplete" class="autocomplete"></div>

                                <label for="edit-postal-code" class="form-label" style="margin-top: 20px">Postal
                                    Code</label>
                                <input type="text" class="form-control" id="edit-postal-code" name="postal_code"
                                    placeholder="Postal Code" style="color: #003060;" required>
                                <div id="edit-postal_code-autocomplete" class="autocomplete"></div>

                                <label for="street" class="form-label" style="margin-top: 20px">Street Name,
                                    Building,
                                    House No.</label>
                                <input type="text" class="form-control" id="edit-street"
                                    name="street_building_house" placeholder="Street Name, Building, House No."
                                    style="margin-bottom: 50px; color: #003060;" required>
                            </div>
                            <div class="form-check">
                                {{-- <input class="form-check-input default-address" type="checkbox" value="true"
                                    id="edit-default-address"> --}}
                                <input class="form-check-input default-address" type="checkbox"
                                    name="default_address" value="true" id="edit-default-address">
                                <label class="form-check-label" for="edit-default-address"
                                    style="margin-bottom: 50px; color: #E55B13; margin-left: 8px;">
                                    Set as default address
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary close-button"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" id="edit_form_submit"
                                class="btn save-button">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
]);

<script>
    var address = document.getElementById('brgy');
    var region = document.getElementById('region');
    var city_municipality = document.getElementById('city_municipality')
    var postal_code = document.getElementById('postal-code');

    var edit_id = document.getElementById('edit-id');
    var edit_name = document.getElementById('edit-fullname');
    var edit_contact = document.getElementById('edit-contact-number');
    var edit_address = document.getElementById('edit-brgy');
    var edit_region = document.getElementById('edit-region');
    var edit_city_municipality = document.getElementById('edit-city_municipality');
    var edit_postal_code = document.getElementById('edit-postal-code');
    var edit_street = document.getElementById('edit-street');
    var edit_default = document.getElementById('edit-default-address');

    var addressContainer = document.getElementById('brgy-autocomplete');
    var regionContainer = document.getElementById('region-autocomplete');
    var city_municipalityContainer = document.getElementById('city_municipality-autocomplete');
    var postal_codeContainer = document.getElementById('postal_code-autocomplete');

    var edit_addressContainer = document.getElementById('edit-brgy-autocomplete');
    var edit_regionContainer = document.getElementById('edit-region-autocomplete');
    var edit_city_municipalityContainer = document.getElementById('edit-city_municipality-autocomplete');
    var edit_postal_codeContainer = document.getElementById('edit-postal_code-autocomplete');

    var edit_submit_btn = document.getElementById('edit_form_submit');
    // var delete_btn = document.getElementById('delete-btn');

    function edit_function(event) {
        const requestOptions = {
            method: 'GET',
        };

        fetch('/getaddress/' + event, requestOptions)
            .then(response => response.json())
            .then(result => {
                result.forEach(data => {
                    // console.log(data);
                    edit_id.textContent = data.id;
                    edit_name.value = data.name;
                    edit_contact.value = data.contact_number;
                    edit_region.value = data.region;
                    edit_city_municipality.value = data.city_municipality;
                    edit_address.value = data.brgy_village;
                    edit_postal_code.value = data.postal_code;
                    edit_street.value = data.street_building_house;

                    if (data.default_address == "true") {
                        edit_default.checked = true;
                    } else {
                        edit_default.checked = false;
                    }
                });
            })
            .catch(error => console.log('error', error));
    }    

    edit_submit_btn.addEventListener('click', () => {
        var edit_form = document.getElementById('edit_form');
        edit_form.action = "/updateaddress/" + edit_id.textContent;
        // alert(edit_id.textContent);
    });
    // var edit_btn = document.getElementById('edit-btn');

    // edit_btn.addEventListener('click', () => {
    //     const requestOptions = {
    //         method: 'GET',
    //     };

    //     fetch('/getaddress', requestOptions)
    //     .then(response => response.json())
    //     .then(result => {
    //         console.log(result);
    //     })
    //     .catch(error => console.log('error', error));
    // });


    address.addEventListener('input', () => {
        if (address.value.trim().length >= 3) {
            const requestOptions = {
                method: 'GET',
            };

            fetch("https://api.geoapify.com/v1/geocode/autocomplete?text=" + address.value.trim() +
                    "&apiKey=071399a5ce1a4ecc90e9d3070dd7fb1e",
                    requestOptions)
                .then(response => response.json())
                .then(result => {
                    addressContainer.innerHTML = '';

                    result.features.forEach(suggestion => {
                        const suggestionElement = document.createElement('div');
                        suggestionElement.textContent = suggestion.properties.name;
                        suggestionElement.id = 'list';

                        suggestionElement.addEventListener('click', () => {
                            address.value = suggestion.properties.name;
                            // postal_code.value = suggestion.properties.postcode;
                            addressContainer.innerHTML = '';
                        });

                        addressContainer.appendChild(suggestionElement);
                    });
                })
                .catch(error => console.log('error', error));
        } else {
            addressContainer.innerHTML = '';
        }
    });

    // address.addEventListener('blur', () => {
    //     addressContainer.innerHTML = '';
    // });

    edit_address.addEventListener('input', () => {
        if (edit_address.value.trim().length >= 3) {
            const requestOptions = {
                method: 'GET',
            };

            fetch("https://api.geoapify.com/v1/geocode/autocomplete?text=" + edit_address.value.trim() +
                    "&apiKey=071399a5ce1a4ecc90e9d3070dd7fb1e",
                    requestOptions)
                .then(response => response.json())
                .then(result => {
                    edit_addressContainer.innerHTML = '';

                    result.features.forEach(suggestion => {
                        const suggestionElement = document.createElement('div');
                        suggestionElement.textContent = suggestion.properties.name;
                        suggestionElement.id = 'list';

                        suggestionElement.addEventListener('click', () => {
                            edit_address.value = suggestion.properties.name;
                            // postal_code.value = suggestion.properties.postcode;
                            edit_addressContainer.innerHTML = '';
                        });

                        edit_addressContainer.appendChild(suggestionElement);
                    });
                })
                .catch(error => console.log('error', error));
        } else {
            edit_addressContainer.innerHTML = '';
        }
    });

    // edit_address.addEventListener('blur', () => {
    //     edit_addressContainer.innerHTML = '';
    // });

    region.addEventListener('input', () => {
        if (region.value.trim().length >= 3) {
            const requestOptions = {
                method: 'GET',
            };

            fetch("https://api.geoapify.com/v1/geocode/autocomplete?text=" + region.value.trim() +
                    "&apiKey=071399a5ce1a4ecc90e9d3070dd7fb1e",
                    requestOptions)
                .then(response => response.json())
                .then(result => {
                    regionContainer.innerHTML = '';

                    result.features.forEach(suggestion => {
                        const suggestionElement = document.createElement('div');
                        suggestionElement.textContent = suggestion.properties.region;
                        suggestionElement.id = 'list';

                        suggestionElement.addEventListener('click', () => {
                            region.value = suggestion.properties.region;
                            regionContainer.innerHTML = '';
                        });

                        regionContainer.appendChild(suggestionElement);
                    });
                })
                .catch(error => console.log('error', error));
        } else {
            regionContainer.innerHTML = '';
        }
    });

    // region.addEventListener('blur', () => {
    //     regionContainer.innerHTML = '';
    // });

    edit_region.addEventListener('input', () => {
        if (edit_region.value.trim().length >= 3) {
            const requestOptions = {
                method: 'GET',
            };

            fetch("https://api.geoapify.com/v1/geocode/autocomplete?text=" + edit_region.value.trim() +
                    "&apiKey=071399a5ce1a4ecc90e9d3070dd7fb1e",
                    requestOptions)
                .then(response => response.json())
                .then(result => {
                    edit_regionContainer.innerHTML = '';

                    result.features.forEach(suggestion => {
                        const suggestionElement = document.createElement('div');
                        suggestionElement.textContent = suggestion.properties.region;
                        suggestionElement.id = 'list';

                        suggestionElement.addEventListener('click', () => {
                            edit_region.value = suggestion.properties.region;
                            edit_regionContainer.innerHTML = '';
                        });

                        edit_regionContainer.appendChild(suggestionElement);
                    });
                })
                .catch(error => console.log('error', error));
        } else {
            edit_regionContainer.innerHTML = '';
        }
    });

    // edit_region.addEventListener('blur', () => {
    //     edit_regionContainer.innerHTML = '';
    // });

    city_municipality.addEventListener('input', () => {
        if (city_municipality.value.trim().length >= 3) {
            const requestOptions = {
                method: 'GET',
            };

            fetch("https://api.geoapify.com/v1/geocode/autocomplete?text=" + city_municipality.value
                    .trim() +
                    "&apiKey=071399a5ce1a4ecc90e9d3070dd7fb1e",
                    requestOptions)
                .then(response => response.json())
                .then(result => {
                    city_municipalityContainer.innerHTML = '';

                    result.features.forEach(suggestion => {
                        const suggestionElement = document.createElement('div');
                        suggestionElement.textContent = suggestion.properties.city;
                        suggestionElement.id = 'list';

                        suggestionElement.addEventListener('click', () => {
                            city_municipality.value = suggestion.properties.city;
                            city_municipalityContainer.innerHTML = '';
                        });

                        city_municipalityContainer.appendChild(suggestionElement);
                    });
                })
                .catch(error => console.log('error', error));
        } else {
            city_municipalityContainer.innerHTML = '';
        }
    });

    // city_municipality.addEventListener('blur', () => {
    //     city_municipalityContainer.innerHTML = '';
    // });

    edit_city_municipality.addEventListener('input', () => {
        if (edit_city_municipality.value.trim().length >= 3) {
            const requestOptions = {
                method: 'GET',
            };

            fetch("https://api.geoapify.com/v1/geocode/autocomplete?text=" + edit_city_municipality.value
                    .trim() +
                    "&apiKey=071399a5ce1a4ecc90e9d3070dd7fb1e",
                    requestOptions)
                .then(response => response.json())
                .then(result => {
                    edit_city_municipalityContainer.innerHTML = '';

                    result.features.forEach(suggestion => {
                        const suggestionElement = document.createElement('div');
                        suggestionElement.textContent = suggestion.properties.city;
                        suggestionElement.id = 'list';

                        suggestionElement.addEventListener('click', () => {
                            edit_city_municipality.value = suggestion.properties.city;
                            edit_city_municipalityContainer.innerHTML = '';
                        });

                        edit_city_municipalityContainer.appendChild(suggestionElement);
                    });
                })
                .catch(error => console.log('error', error));
        } else {
            edit_city_municipalityContainer.innerHTML = '';
        }
    });

    // edit_city_municipality.addEventListener('blur', () => {
    //     edit_city_municipalityContainer.innerHTML = '';
    // });

    postal_code.addEventListener('input', () => {
        if (postal_code.value.trim().length >= 3) {
            const requestOptions = {
                method: 'GET',
            };

            fetch("https://api.geoapify.com/v1/geocode/autocomplete?text=" + postal_code.value.trim() +
                    "&apiKey=071399a5ce1a4ecc90e9d3070dd7fb1e",
                    requestOptions)
                .then(response => response.json())
                .then(result => {
                    postal_codeContainer.innerHTML = '';

                    result.features.forEach(suggestion => {
                        const suggestionElement = document.createElement('div');
                        suggestionElement.textContent = suggestion.properties.postcode;
                        suggestionElement.id = 'list';

                        suggestionElement.addEventListener('click', () => {
                            postal_code.value = suggestion.properties.postcode;
                            postal_codeContainer.innerHTML = '';
                        });
                        postal_codeContainer.appendChild(suggestionElement);
                    });
                })
                .catch(error => console.log('error', error));
        } else {
            postal_codeContainer.innerHTML = '';
        }
    });

    // postal_code.addEventListener('blur', () => {
    //     postal_codeContainer.innerHTML = '';
    // });

    edit_postal_code.addEventListener('input', () => {
        if (edit_postal_code.value.trim().length >= 3) {
            const requestOptions = {
                method: 'GET',
            };

            fetch("https://api.geoapify.com/v1/geocode/autocomplete?text=" + edit_postal_code.value.trim() +
                    "&apiKey=071399a5ce1a4ecc90e9d3070dd7fb1e",
                    requestOptions)
                .then(response => response.json())
                .then(result => {
                    edit_postal_codeContainer.innerHTML = '';

                    result.features.forEach(suggestion => {
                        const suggestionElement = document.createElement('div');
                        suggestionElement.textContent = suggestion.properties.postcode;
                        suggestionElement.id = 'list';

                        suggestionElement.addEventListener('click', () => {
                            edit_postal_code.value = suggestion.properties.postcode;
                            edit_postal_codeContainer.innerHTML = '';
                        });
                        edit_postal_codeContainer.appendChild(suggestionElement);
                    });
                })
                .catch(error => console.log('error', error));
        } else {
            edit_postal_codeContainer.innerHTML = '';
        }
    });

    // edit_postal_code.addEventListener('blur', () => {
    //     edit_postal_codeContainer.innerHTML = '';
    // });
</script>
