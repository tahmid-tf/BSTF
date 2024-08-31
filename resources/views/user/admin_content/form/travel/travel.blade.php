<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Travel Information</title>
    <link rel="stylesheet" href="assets/css/form.css"/>
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    />
</head>
<body id="body">
<div class="container">
    <div>
        <div class="form-heading">
            <p>BSTF Application Form</p>
        </div>
    </div>
    <div class="form-part">
        <div style="display: flex; justify-content: center">
            <img src="{{ asset('assets/images/travel.png') }}" alt="" class="img-fluid" unselectable="on">
        </div>
        <br>

        {{-- ------------------------------- form tab system ----------------------------- --}}

        <x-form-tab></x-form-tab>

        {{-- -------------------------------- form tab system -------------------------- --}}

        <div class="form-display-flex">
            <p>Travel Information</p>
            <div>
                <button class="btn btn-secondary savedState" type="button" onclick="saveDraft()">Save Data</button>
                <a class="btn btn-secondary" type="button" style="color: white" href="{{ route('home') }}">Return to dashboard</a>
            </div>

        </div>
        <hr/>

        <!-- --------------------------- form -------------------------------- -->
        <div class="form">
            <form action="{{ route('travel-form.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- --- form --- -->
                <div class="form-group">
                    <label for="">Airline's name *</label>
                    <input
                        type="text"
                        class="form-control"
                        id="airlines_name"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="airlines_name"
                        class="@error('airlines_name') is-invalid @enderror"
                    />
                </div>

                @error('airlines_name')
                <div class="alert alert-danger">Airline's name required</div>
                @enderror
            <!-- --- form --- -->

                <!-- --- form --- -->
                <div class="form-group">
                    <label for="">E-ticket info in image/PDF *</label>
                    <input
                        type="file"
                        class="form-control"
                        id="ticket_number_image"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="ticket_number"
                        class="@error('ticket_number') is-invalid @enderror"
                    />
                </div>

                @error('ticket_number')
                <div class="alert alert-danger">E-ticket number required</div>
                @enderror
            <!-- --- form --- -->

                <!-- ---------------- ticket number text form ----------------------- -->
                <div class="form-group">
                    <label for="">E-ticket number (text format) *</label>
                    <input
                        type="text"
                        class="form-control"
                        id="ticket_number"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="ticket_number_text"
                        class="@error('ticket_number_text') is-invalid @enderror"
                    />
                </div>

                @error('ticket_number_text')
                <div class="alert alert-danger">E-ticket number required</div>
                @enderror
            <!-- -------------------- ticket number text form ------------------------ -->

                <!-- --- form --- -->
                <div class="form-group">
                    <label for=""
                    >Total price of the ticket purchased (in Bangladesh Taka).
                        Please write only numbers, no text *</label
                    >
                    <input
                        type="number"
                        class="form-control"
                        id="ticket_purchased"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="ticket_purchased"
                        class="@error('ticket_purchased') is-invalid @enderror"
                    />
                </div>

                @error('ticket_purchased')
                <div class="alert alert-danger">Field required</div>
                @enderror
            <!-- --- form --- -->

                <!-- --- form --- -->
                <div class="form-group">
                    <label for=""
                    >Date of departure from Bangladesh *</label
                    >
                    <input
                        type="date"
                        class="form-control"
                        id="date_of_departure"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="date_of_departure"
                        class="@error('date_of_departure') is-invalid @enderror"
                    />
                </div>

                @error('date_of_departure')
                <div class="alert alert-danger">Date of departure required</div>
                @enderror
            <!-- --- form --- -->

                <!-- --- form --- -->
                <div class="form-group">
                    <label for=""
                    >Port of embarkation (name of airport) *</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="port_of_embarkation"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="port_of_embarkation"
                        class="@error('port_of_embarkation') is-invalid @enderror"

                    />
                </div>

                @error('port_of_embarkation')
                <div class="alert alert-danger">Port of embarkation required</div>
                @enderror
            <!-- --- form --- -->

                <!-- --- form --- -->
                <div class="form-group">
                    <label for=""
                    >Name of city of departure (name of city in which departure
                        airport is located) *</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="name_of_city"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="name_of_city"
                        class="@error('name_of_city') is-invalid @enderror"
                    />
                </div>

                @error('name_of_city')
                <div class="alert alert-danger">Name of city of departure required</div>
                @enderror
            <!-- --- form --- -->

                <!-- --- form --- -->
                <div class="form-group">
                    <label for=""
                    >Date of arrival in foreign country in which
                        university/educational institution is located *</label
                    >
                    <input
                        type="date"
                        class="form-control"
                        id="date_of_arrival"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="date_of_arrival"
                        class="@error('date_of_arrival') is-invalid @enderror"

                    />
                </div>

                @error('date_of_arrival')
                <div class="alert alert-danger">Date of arrival required</div>
                @enderror
            <!-- --- form --- -->

                <!-- --- form --- -->
                <div class="form-group">
                    <label for=""
                    >Port of disembarkation (name of airport) *</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="port_of_disembarkation"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="port_of_disembarkation"
                        class="@error('port_of_disembarkation') is-invalid @enderror"
                    />
                </div>

                @error('port_of_disembarkation')
                <div class="alert alert-danger">Port of disembarkation required</div>
                @enderror
            <!-- --- form --- -->

                <!-- --- form --- -->
                <div class="form-group">
                    <label for=""
                    >Name of city of arrival (in which arrival airport is located)
                        *</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="name_of_city_2"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="name_of_city_2"
                        class="@error('name_of_city_2') is-invalid @enderror"
                    />
                </div>

                @error('name_of_city_2')
                <div class="alert alert-danger">Name of city of arrival field required</div>
                @enderror
            <!-- --- form --- -->

                <!-- --- form --- -->
                <div class="form-group">
                    <label for=""
                    >Approximate distance (in kilometer) between arrival airport and
                        university/educational institution *</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="approximate_distance"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="approximate_distance"
                        class="@error('approximate_distance') is-invalid @enderror"
                    />
                </div>

                @error('approximate_distance')
                <div class="alert alert-danger">Approximate distance (in kilometer) between arrival airport and
                    university/educational institution field required
                </div>
            @enderror

                <br>
                <p>* please save data before submit</p>
            <!-- --- form --- -->

                <!-- --- submit --- -->

                <div class="form-group submit-button-css">
                    <input
                        type="submit"
                        class="btn btn-success"
                        id=""
                        aria-describedby="emailHelp"
                        value="Next"
                    />
                </div>
                <!-- --- submit --- -->
            </form>
        </div>
        <!-- ------------------------------------------------------- end - form -->
    </div>
</div>
</body>

{{-- ----------------------------- checking localstorage exists or not --------------------- --}}

<script>
    // if (window.localStorage.length == 0){
    //     document.querySelector(".savedState").style.backgroundColor = "gray";
    // }else {
    //     document.querySelector(".savedState").style.backgroundColor = "green";
    //     document.querySelector(".savedState").innerHTML = "Saved";
    // }
</script>

{{-- ----------------------------- checking localstorage exists or not --------------------- --}}

<!-- ------------------------------------------------- script for auto complete -------------------------------------------------------- -->

<script>
    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function (e) {
            var a,
                b,
                i,
                val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) {
                return false;
            }
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (
                    arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()
                ) {
                    /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    /*make the matching letters bold:*/
                    b.innerHTML =
                        "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function (e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName("input")[0].value;
                        /*close the list of autocompleted values,
                      (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function (e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
            increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) {
                //up
                /*If the arrow UP key is pressed,
            decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                }
            }
        });

        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = x.length - 1;
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }

        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }

        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
      except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }

        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
    }

    // -------------------------- port of embarkation autocomplete -------------------------

    fetch(
        "https://raw.githubusercontent.com/algolia/datasets/master/airports/airports.json"
    )
        .then((response) => {
            return response.json();
        })
        .then((el) => {
            el.forEach((element) => {
                if (element.name == "Zia Intl") {
                    countries.push("Hazrat Shahjalal International Airport");
                } else {
                    countries.push(element.name);
                }
            });
        });

    /*An array containing all the country names in the world:*/
    var countries = [];

    /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
    autocomplete(document.getElementById("port_of_embarkation"), countries);
    autocomplete(document.getElementById("port_of_disembarkation"), countries);

    // -------------------------- port of embarkation autocomplete -------------------------

</script>

<!-- --------------------------------------------------------------------------------------------------- end -  script for auto complete  -->

{{-- --------------------------------------------- local storage -------------------------------------------------- --}}
<script>
    let airlines_name = document.querySelector("#airlines_name");
    let ticket_number = document.querySelector("#ticket_number");
    let ticket_purchased = document.querySelector("#ticket_purchased");
    let date_of_departure = document.querySelector("#date_of_departure");
    let port_of_embarkation = document.querySelector("#port_of_embarkation");
    let port_of_disembarkation = document.querySelector("#port_of_disembarkation");
    let name_of_city = document.querySelector("#name_of_city");
    let name_of_city_2 = document.querySelector("#name_of_city_2");
    let date_of_arrival = document.querySelector("#date_of_arrival");
    let approximate_distance = document.querySelector("#approximate_distance");

    airlines_name.value = localStorage.getItem('airlines_name');
    ticket_number.value = localStorage.getItem('ticket_number');
    ticket_purchased.value = localStorage.getItem('ticket_purchased');
    date_of_departure.value = localStorage.getItem('date_of_departure');
    port_of_embarkation.value = localStorage.getItem('port_of_embarkation');
    port_of_disembarkation.value = localStorage.getItem('port_of_disembarkation');
    name_of_city.value = localStorage.getItem('name_of_city');
    name_of_city_2.value = localStorage.getItem('name_of_city_2');
    date_of_arrival.value = localStorage.getItem('date_of_arrival');
    approximate_distance.value = localStorage.getItem('approximate_distance');

    //-------------------------- port of emberkation connected to name of city of departure ---------------------

    name_of_city.addEventListener('focus', function () {
        fetch('https://raw.githubusercontent.com/algolia/datasets/master/airports/airports.json').then(response => {
            return response.json();
        }).then(el => {
            el.forEach(data => {
               if(port_of_embarkation.value == data.name){
                    name_of_city.value = data.city;
               }else if (port_of_embarkation.value == "Hazrat Shahjalal International Airport") {
                   name_of_city.value = "Dhaka";
               }


            });
        });
    });

    //-------------------------- port of emberkation connected to name of city of departure ---------------------

    //-------------------------- port of disemberkation connected to name of city of departure ------------------

    name_of_city_2.addEventListener('focus', function () {
        fetch('https://raw.githubusercontent.com/algolia/datasets/master/airports/airports.json').then(response => {
            return response.json();
        }).then(el => {
            el.forEach(data => {
                if(port_of_disembarkation.value == data.name){
                    name_of_city_2.value = data.city;
                }else if (port_of_disembarkation.value == "Hazrat Shahjalal International Airport") {
                    name_of_city_2.value = "Dhaka";
                }


            });
        });
    });

    //-------------------------- port of disemberkation connected to name of city of departure ------------------

    function saveDraft() {

        document.querySelector(".savedState").style.backgroundColor = "green";
        document.querySelector(".savedState").innerHTML = "Saved";

        localStorage.setItem('airlines_name', airlines_name.value);
        localStorage.setItem('ticket_number', ticket_number.value);
        localStorage.setItem('ticket_purchased', ticket_purchased.value);
        localStorage.setItem('date_of_departure', date_of_departure.value);
        localStorage.setItem('port_of_embarkation', port_of_embarkation.value);
        localStorage.setItem('port_of_disembarkation', port_of_disembarkation.value);
        localStorage.setItem('name_of_city', name_of_city.value);
        localStorage.setItem('name_of_city_2', name_of_city.value);
        localStorage.setItem('date_of_arrival', date_of_arrival.value);
        localStorage.setItem('approximate_distance', approximate_distance.value);
    }

</script>
{{-- --------------------------------------------- local storage -------------------------------------------------- --}}

<script
    src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"
></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"
></script>
<script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"
></script>
</html>
