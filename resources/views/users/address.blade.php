@include('partials.__header', [
    'title' => 'Address | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/deliveryAddress-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDYtN3BNCcHFJXpQXrNMxKxIsc9-Pdd-0&loading=async&libraries=places&callback=console.debug">
    </script>
</head>

<div id="body-container" class="container-fluid px-0">
    <div id="sidebar" class="sidebar p-2 min-vh-100 shadow">
        <x-sidebar />
    </div>
    {{-- <div id="sidebar" class="sidebar p-2 min-vh-100 offcanvas offcanvas-start" tabindex="-1"
        aria-labelledby="offcanvasExampleLabel">
        <x-sidebar />
    </div>
    <div id="sidebarProfile" class="sidebarProfile p-2 min-vh-100 shadow">
        <x-sidebarProfile/>
    </div> --}}
    <div id="content" class="content">
        <ul class="nav bg-light sticky-top head-nav shadow py-4 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                {{-- <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                    aria-controls="offcanvasExample">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button> --}}
                <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    <ul class="nav py-profile justify-content-end">
                        <li class="nav-item dropdown">
                            <a href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                class="nav-link dropdown-toggle avatar" aria-expanded="false" title="profile">
                                <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}"
                                    alt="notification" width="35" height="35" class="rounded-5"
                                    style="margin-right: 2em;">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/myprofile">Profile</a></li>
                                <li><a class="dropdown-item" href="/mypurchase">My Purchase</a></li>
                                <li><a class="dropdown-item" href="/addresses">Addresses</a></li>
                                <li><a class="dropdown-item" href="/changepassword">Change Password</a></li>
                                <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and Ratings</a></li>
                            </ul>
                        </li>
                    </ul>
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
                <h4 class="fw-bold">Address</h4>
                <p>Manage your addresses</p>
            </div>
            <button class="btn add-button" data-bs-toggle="modal" data-bs-target="#add-address"
                onclick="initAutocomplete()"><i class="fa fa-plus" aria-hidden="true"></i>Add new address</button>

            @foreach ($address as $receiver)
                <div class="del-address-container">
                    <div class="address-details">
                        <p id="post_name">{{ $receiver->name }} &ensp;&ensp;<span
                                id="post_contact">{{ $receiver->contact_number }}</span></p>
                        <p>{{ $receiver->address }}
                            {{-- <span>{{ $receiver->postal_code . ', ' . $receiver->street_building_house }}</span> --}}
                        </p>
                        @if ($receiver->default_address)
                            <p class="default-txt">Default</p>
                        @endif
                    </div>
                    <div class="button-container">
                        <button class="edit-button" id="edit-btn" onclick="edit_function({{ $receiver->id }})"
                            data-bs-toggle="modal" data-bs-target="#edit-address"><a href="#">Edit</a></button>
                        {{-- <button class="edit-button" id="edit-btn" onclick="edit_function({{ $receiver->id }})"><a
                        href="#">Edit</a></button> --}}
                        <a type="button" href="/destroyaddress/{{ $receiver->id }}/notDelivery" id="delete-btn"
                            class="delete-button">Delete</a>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- Add Address Modal -->
        <div class="modal fade" id="add-address" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="z-index: -1">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New Address</h1>
                    </div>
                    <div class="modal-body">
                        <label for="add-name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="add-name" placeholder="Aa" name="name"
                            style="margin-bottom: 20px; color: #003060;" required>
                        <label for="add-contact-number" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="add-contact-number" name="contact_number"
                            placeholder="09***" style="margin-bottom: 20px; color: #003060;" required>
                        <label for="create-address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="create-address" placeholder="Aa"
                            name="name" style="margin-bottom: 20px; color: #003060;" required>
                        <div class="form-check">
                            <input class="form-check-input default-address" type="checkbox" name="default_address"
                                value="true" id="add-default-address">
                            <label class="form-check-label" for="add-default-address"
                                style="margin-bottom: 20px; color: #E55B13; margin-left: 8px;">
                                Set as default address
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-button"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" id="save-btn" class="btn save-button">Save</button>
                    </div>
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
                    {{-- <form id="edit_form" method="POST">;
                        @csrf --}}
                    <div class="modal-body">
                        <span id="address-id" hidden></span>
                        <label for="edit-name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="edit-name" placeholder="Aa" name="name"
                            style="margin-bottom: 20px; color: #003060;" required>
                        <label for="edit-contact-number" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="edit-contact-number" name="contact_number"
                            placeholder="09***" style="margin-bottom: 20px; color: #003060;" required>
                        <label for="update-address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="update-address" placeholder="Aa"
                            name="name" style="margin-bottom: 20px; color: #003060;" required>
                        <div class="form-check">
                            <input class="form-check-input default-address" type="checkbox" name="default_address"
                                value="true" id="edit-default-address">
                            <label class="form-check-label" for="edit-default-address"
                                style="margin-bottom: 20px; color: #E55B13; margin-left: 8px;">
                                Set as default address
                            </label>
                        </div>
                        {{-- <div class="mb-3">
                                <span id="edit-id" hidden></span>
                                <label for="fullname" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="edit-fullname" placeholder="Fullname"
                                    name="name" style="margin-bottom: 20px; color: #003060;" required>
                                <label for="contact-number" class="form-label">Contact Number</label>
                                <input type="text" class="form-control" id="edit-contact-number"
                                    name="contact_number" placeholder="Contact Number"
                                    style="margin-bottom: 20px; color: #003060;" required>                                
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
                                <input class="form-check-input default-address" type="checkbox"
                                    name="default_address" value="true" id="edit-default-address">
                                <label class="form-check-label" for="edit-default-address"
                                    style="margin-bottom: 50px; color: #E55B13; margin-left: 8px;">
                                    Set as default address
                                </label>
                            </div> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-button"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" id="edit-submit-btn" class="btn save-button">Update</button>
                    </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="message" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="../assets/Book_Logo.png" class="rouxunded me-2" alt="...">
                    <strong class="me-auto"></strong>
                    <small>1 min ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                @if (session('message'))
                    <div class="toast-body fw-bold text-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
]);
{{-- <script>
    window.embeddedChatbotConfig = {
        chatbotId: "EMDpHAifRUaJ-OqaN2FNb",
        domain: "www.chatbase.co"
    }
</script>
<script src="https://www.chatbase.co/embed.min.js" chatbotId="EMDpHAifRUaJ-OqaN2FNb" domain="www.chatbase.co" defer>
</script> --}}
<script>
    const message = bootstrap.Toast.getOrCreateInstance(document.getElementById('message'));

    @if (session('message'))
        message.show()
    @endif


    // Google Maps AutoComplete   
    let save_btn = document.getElementById('save-btn');
    let edit_save_btn = document.getElementById('edit-submit-btn');
    let coordinates = {
        lat: 0,
        lng: 0
    }

    function edit_function(id) {
        var update_autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('update-address'), {
                fields: ['ALL']
            }
        );

        update_autocomplete.addListener('place_changed', () => {
            var place = update_autocomplete.getPlace();

            if (!place.geometry) {
                alert('Please select an appropriate address');
            } else {
                coordinates.lat = place.geometry.location.lat()
                coordinates.lng = place.geometry.location.lng()
                console.log(coordinates);
            }
        })

        fetch('/getaddress/' + id, {
                method: 'GET'
            })
            .then(response => response.json())
            .then(result => {
                // console.log(result);
                document.getElementById('address-id').textContent = id;
                document.getElementById('edit-name').value = result.name;
                document.getElementById('edit-contact-number').value = result.contact_number;
                document.getElementById('update-address').value = result.address;
                if (result.default_address == 1) {
                    document.getElementById('edit-default-address').checked = true;
                } else {
                    document.getElementById('edit-default-address').checked = false;
                }

                coordinates.lat = result.latitude;
                coordinates.lng = result.longitude;
            })
            .catch(error => console.error(error));
    }

    function initAutocomplete() {
        var autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('create-address'), {
                fields: ['ALL']
            }
        );

        autocomplete.addListener('place_changed', () => {
            var place = autocomplete.getPlace();

            if (!place.geometry) {
                alert('Please select an appropriate address');
            } else {
                coordinates.lat = place.geometry.location.lat()
                coordinates.lng = place.geometry.location.lng()
                console.log(coordinates);
            }
        });

        document.getElementById('add-name').value = '';
        document.getElementById('add-contact-number').value = '';
        document.getElementById('create-address').value = '';
        document.getElementById('add-default-address').checked = false;
    }

    save_btn.addEventListener('click', () => {
        var data = {
            name: document.getElementById('add-name').value,
            contact_number: document.getElementById('add-contact-number').value,
            address: document.getElementById('create-address').value,
            latitude: coordinates.lat,
            longitude: coordinates.lng,
            default_address: document.getElementById('add-default-address').checked
        }

        if ((data.latitude == 0 && data.longitude == 0) || (document.getElementById('add-name').value == "" ||
                document.getElementById('add-contact-number').value == "")) {
            // console.log('please select and appropriate address');
            alert('Please complete all the fields');
        } else {
            // console.log(data);

            fetch('/storeaddress/notDelivery', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data),
                })
                // .then(response => response.json())
                .then(data => {
                    console.log(data);
                    if (data.redirected) {
                        window.location.href = data.url;
                    }
                })
                .catch(error => console.error(error));
        }
    });

    edit_save_btn.addEventListener('click', () => {
        // console.log('test');        
        var id = document.getElementById('address-id').textContent;
        var update_data = {
            name: document.getElementById('edit-name').value,
            contact_number: document.getElementById('edit-contact-number').value,
            address: document.getElementById('update-address').value,
            latitude: coordinates.lat,
            longitude: coordinates.lng,
            default_address: document.getElementById('edit-default-address').checked
        }

        if ((update_data.latitude == 0 && update_data.longitude == 0) || (document.getElementById('edit-name')
                .value == "" ||
                document.getElementById('edit-contact-number').value == "")) {
            alert('Please complete all the fields');
        } else {
            fetch('/updateaddress/' + id + '/notDelivery', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(update_data),
                })
                // .then(response => response.json())
                .then(result => {
                    if (result.redirected) {
                        window.location.href = result.url;
                    }
                })
                .catch(error => console.error(error));
        }
    })

    // 


    // var address = document.getElementById('brgy');
    // var region = document.getElementById('region');
    // var city_municipality = document.getElementById('city_municipality')
    // var postal_code = document.getElementById('postal-code');
    // var edit_id = document.getElementById('edit-id');
    // var edit_name = document.getElementById('edit-fullname');
    // var edit_contact = document.getElementById('edit-contact-number');
    // var edit_address = document.getElementById('edit-brgy');
    // var edit_region = document.getElementById('edit-region');
    // var edit_city_municipality = document.getElementById('edit-city_municipality');
    // var edit_postal_code = document.getElementById('edit-postal-code');
    // var edit_street = document.getElementById('edit-street');
    // var edit_default = document.getElementById('edit-default-address');
    // var addressContainer = document.getElementById('brgy-autocomplete');
    // var regionContainer = document.getElementById('region-autocomplete');
    // var city_municipalityContainer = document.getElementById('city_municipality-autocomplete');
    // var postal_codeContainer = document.getElementById('postal_code-autocomplete');
    // var edit_addressContainer = document.getElementById('edit-brgy-autocomplete');
    // var edit_regionContainer = document.getElementById('edit-region-autocomplete');
    // var edit_city_municipalityContainer = document.getElementById('edit-city_municipality-autocomplete');
    // var edit_postal_codeContainer = document.getElementById('edit-postal_code-autocomplete');
    // var edit_submit_btn = document.getElementById('edit_form_submit');
    // // var delete_btn = document.getElementById('delete-btn');
    // function edit_function(event) {
    //     console.log(event);
    //     const requestOptions = {
    //         method: 'GET',
    //     };
    //     fetch('/getaddress/' + event, requestOptions)
    //         .then(response => response.json())
    //         .then(result => {
    //             // result.forEach(data => {
    //             console.log(result);
    //             edit_id.textContent = result.id;
    //             edit_name.value = result.name;
    //             edit_contact.value = result.contact_number;
    //             edit_region.value = result.region;
    //             edit_city_municipality.value = result.city_municipality;
    //             edit_address.value = result.brgy_village;
    //             edit_postal_code.value = result.postal_code;
    //             edit_street.value = result.street_building_house;
    //             if (result.default_address == "true") {
    //                 edit_default.checked = true;
    //             } else {
    //                 edit_default.checked = false;
    //             }
    //             // });
    //         })
    //         .catch(error => console.log('error', error));
    // }
    // edit_submit_btn.addEventListener('click', () => {
    //     var edit_form = document.getElementById('edit_form');
    //     edit_form.action = "/updateaddress/" + edit_id.textContent + '/notDelivery';
    //     // alert(edit_id.textContent);
    // });
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
    // address.addEventListener('input', () => {
    //     if (address.value.trim().length >= 3) {
    //         const requestOptions = {
    //             method: 'GET',
    //         };
    //         fetch("https://api.geoapify.com/v1/geocode/autocomplete?text=" + address.value.trim() +
    //                 "&apiKey=071399a5ce1a4ecc90e9d3070dd7fb1e",
    //                 requestOptions)
    //             .then(response => response.json())
    //             .then(result => {
    //                 addressContainer.innerHTML = '';
    //                 result.features.forEach(suggestion => {
    //                     const suggestionElement = document.createElement('div');
    //                     suggestionElement.textContent = suggestion.properties.name;
    //                     suggestionElement.id = 'list';
    //                     suggestionElement.addEventListener('click', () => {
    //                         address.value = suggestion.properties.name;
    //                         // postal_code.value = suggestion.properties.postcode;
    //                         addressContainer.innerHTML = '';
    //                     });
    //                     addressContainer.appendChild(suggestionElement);
    //                 });
    //             })
    //             .catch(error => console.log('error', error));
    //     } else {
    //         addressContainer.innerHTML = '';
    //     }
    // });
    // // address.addEventListener('blur', () => {
    // //     addressContainer.innerHTML = '';
    // // });
    // edit_address.addEventListener('input', () => {
    //     if (edit_address.value.trim().length >= 3) {
    //         const requestOptions = {
    //             method: 'GET',
    //         };
    //         fetch("https://api.geoapify.com/v1/geocode/autocomplete?text=" + edit_address.value.trim() +
    //                 "&apiKey=071399a5ce1a4ecc90e9d3070dd7fb1e",
    //                 requestOptions)
    //             .then(response => response.json())
    //             .then(result => {
    //                 edit_addressContainer.innerHTML = '';
    //                 result.features.forEach(suggestion => {
    //                     const suggestionElement = document.createElement('div');
    //                     suggestionElement.textContent = suggestion.properties.name;
    //                     suggestionElement.id = 'list';
    //                     suggestionElement.addEventListener('click', () => {
    //                         edit_address.value = suggestion.properties.name;
    //                         // postal_code.value = suggestion.properties.postcode;
    //                         edit_addressContainer.innerHTML = '';
    //                     });
    //                     edit_addressContainer.appendChild(suggestionElement);
    //                 });
    //             })
    //             .catch(error => console.log('error', error));
    //     } else {
    //         edit_addressContainer.innerHTML = '';
    //     }
    // });
    // // edit_address.addEventListener('blur', () => {
    // //     edit_addressContainer.innerHTML = '';
    // // });
    // region.addEventListener('input', () => {
    //     if (region.value.trim().length >= 3) {
    //         const requestOptions = {
    //             method: 'GET',
    //         };
    //         fetch("https://api.geoapify.com/v1/geocode/autocomplete?text=" + region.value.trim() +
    //                 "&apiKey=071399a5ce1a4ecc90e9d3070dd7fb1e",
    //                 requestOptions)
    //             .then(response => response.json())
    //             .then(result => {
    //                 regionContainer.innerHTML = '';
    //                 result.features.forEach(suggestion => {
    //                     const suggestionElement = document.createElement('div');
    //                     suggestionElement.textContent = suggestion.properties.region;
    //                     suggestionElement.id = 'list';
    //                     suggestionElement.addEventListener('click', () => {
    //                         region.value = suggestion.properties.region;
    //                         regionContainer.innerHTML = '';
    //                     });
    //                     regionContainer.appendChild(suggestionElement);
    //                 });
    //             })
    //             .catch(error => console.log('error', error));
    //     } else {
    //         regionContainer.innerHTML = '';
    //     }
    // });
    // // region.addEventListener('blur', () => {
    // //     regionContainer.innerHTML = '';
    // // });
    // edit_region.addEventListener('input', () => {
    //     if (edit_region.value.trim().length >= 3) {
    //         const requestOptions = {
    //             method: 'GET',
    //         };
    //         fetch("https://api.geoapify.com/v1/geocode/autocomplete?text=" + edit_region.value.trim() +
    //                 "&apiKey=071399a5ce1a4ecc90e9d3070dd7fb1e",
    //                 requestOptions)
    //             .then(response => response.json())
    //             .then(result => {
    //                 edit_regionContainer.innerHTML = '';
    //                 result.features.forEach(suggestion => {
    //                     const suggestionElement = document.createElement('div');
    //                     suggestionElement.textContent = suggestion.properties.region;
    //                     suggestionElement.id = 'list';
    //                     suggestionElement.addEventListener('click', () => {
    //                         edit_region.value = suggestion.properties.region;
    //                         edit_regionContainer.innerHTML = '';
    //                     });
    //                     edit_regionContainer.appendChild(suggestionElement);
    //                 });
    //             })
    //             .catch(error => console.log('error', error));
    //     } else {
    //         edit_regionContainer.innerHTML = '';
    //     }
    // });
    // // edit_region.addEventListener('blur', () => {
    // //     edit_regionContainer.innerHTML = '';
    // // });
    // city_municipality.addEventListener('input', () => {
    //     if (city_municipality.value.trim().length >= 3) {
    //         const requestOptions = {
    //             method: 'GET',
    //         };
    //         fetch("https://api.geoapify.com/v1/geocode/autocomplete?text=" + city_municipality.value
    //                 .trim() +
    //                 "&apiKey=071399a5ce1a4ecc90e9d3070dd7fb1e",
    //                 requestOptions)
    //             .then(response => response.json())
    //             .then(result => {
    //                 city_municipalityContainer.innerHTML = '';
    //                 result.features.forEach(suggestion => {
    //                     const suggestionElement = document.createElement('div');
    //                     suggestionElement.textContent = suggestion.properties.city;
    //                     suggestionElement.id = 'list';
    //                     suggestionElement.addEventListener('click', () => {
    //                         city_municipality.value = suggestion.properties.city;
    //                         city_municipalityContainer.innerHTML = '';
    //                     });
    //                     city_municipalityContainer.appendChild(suggestionElement);
    //                 });
    //             })
    //             .catch(error => console.log('error', error));
    //     } else {
    //         city_municipalityContainer.innerHTML = '';
    //     }
    // });
    // // city_municipality.addEventListener('blur', () => {
    // //     city_municipalityContainer.innerHTML = '';
    // // });
    // edit_city_municipality.addEventListener('input', () => {
    //     if (edit_city_municipality.value.trim().length >= 3) {
    //         const requestOptions = {
    //             method: 'GET',
    //         };
    //         fetch("https://api.geoapify.com/v1/geocode/autocomplete?text=" + edit_city_municipality.value
    //                 .trim() +
    //                 "&apiKey=071399a5ce1a4ecc90e9d3070dd7fb1e",
    //                 requestOptions)
    //             .then(response => response.json())
    //             .then(result => {
    //                 edit_city_municipalityContainer.innerHTML = '';
    //                 result.features.forEach(suggestion => {
    //                     const suggestionElement = document.createElement('div');
    //                     suggestionElement.textContent = suggestion.properties.city;
    //                     suggestionElement.id = 'list';
    //                     suggestionElement.addEventListener('click', () => {
    //                         edit_city_municipality.value = suggestion.properties.city;
    //                         edit_city_municipalityContainer.innerHTML = '';
    //                     });
    //                     edit_city_municipalityContainer.appendChild(suggestionElement);
    //                 });
    //             })
    //             .catch(error => console.log('error', error));
    //     } else {
    //         edit_city_municipalityContainer.innerHTML = '';
    //     }
    // });
    // // edit_city_municipality.addEventListener('blur', () => {
    // //     edit_city_municipalityContainer.innerHTML = '';
    // // });
    // postal_code.addEventListener('input', () => {
    //     if (postal_code.value.trim().length >= 3) {
    //         const requestOptions = {
    //             method: 'GET',
    //         };
    //         fetch("https://api.geoapify.com/v1/geocode/autocomplete?text=" + postal_code.value.trim() +
    //                 "&apiKey=071399a5ce1a4ecc90e9d3070dd7fb1e",
    //                 requestOptions)
    //             .then(response => response.json())
    //             .then(result => {
    //                 postal_codeContainer.innerHTML = '';
    //                 result.features.forEach(suggestion => {
    //                     const suggestionElement = document.createElement('div');
    //                     suggestionElement.textContent = suggestion.properties.postcode;
    //                     suggestionElement.id = 'list';
    //                     suggestionElement.addEventListener('click', () => {
    //                         postal_code.value = suggestion.properties.postcode;
    //                         postal_codeContainer.innerHTML = '';
    //                     });
    //                     postal_codeContainer.appendChild(suggestionElement);
    //                 });
    //             })
    //             .catch(error => console.log('error', error));
    //     } else {
    //         postal_codeContainer.innerHTML = '';
    //     }
    // });
    // // postal_code.addEventListener('blur', () => {
    // //     postal_codeContainer.innerHTML = '';
    // // });
    // edit_postal_code.addEventListener('input', () => {
    //     if (edit_postal_code.value.trim().length >= 3) {
    //         const requestOptions = {
    //             method: 'GET',
    //         };
    //         fetch("https://api.geoapify.com/v1/geocode/autocomplete?text=" + edit_postal_code.value.trim() +
    //                 "&apiKey=071399a5ce1a4ecc90e9d3070dd7fb1e",
    //                 requestOptions)
    //             .then(response => response.json())
    //             .then(result => {
    //                 edit_postal_codeContainer.innerHTML = '';
    //                 result.features.forEach(suggestion => {
    //                     const suggestionElement = document.createElement('div');
    //                     suggestionElement.textContent = suggestion.properties.postcode;
    //                     suggestionElement.id = 'list';
    //                     suggestionElement.addEventListener('click', () => {
    //                         edit_postal_code.value = suggestion.properties.postcode;
    //                         edit_postal_codeContainer.innerHTML = '';
    //                     });
    //                     edit_postal_codeContainer.appendChild(suggestionElement);
    //                 });
    //             })
    //             .catch(error => console.log('error', error));
    //     } else {
    //         edit_postal_codeContainer.innerHTML = '';
    //     }
    // });
    // edit_postal_code.addEventListener('blur', () => {
    //     edit_postal_codeContainer.innerHTML = '';
    // });
</script>
