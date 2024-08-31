<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Travel Information</title>
    <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}"/>

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
        <div class="form-display-flex">
            <p>Travel Information</p>
            <div>
                <a href="{{ route('application-bank') }}" class="btn btn-secondary" type="button">Application Bank</a>
            </div>

        </div>
        <hr/>

        <!-- --------------------------- form -------------------------------- -->
        <div class="form">
            <!-- --- form --- -->
            <div class="form-group">
                <label for="exampleInputEmail1">Airline's name *</label>
                <input
                    type="text"
                    class="form-control"
                    id="airlines_name"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="airlines_name"
                    class="@error('airlines_name') is-invalid @enderror"
                    value="{{ $travel_form->airlines_name }}"
                    disabled
                />
            </div>

            @error('airlines_name')
            <div class="alert alert-danger">Airline's name required</div>
            @enderror
        <!-- --- form --- -->

            <!-- --- form --- -->
            <div class="form-group">
                <label for="exampleFormControlFile1">Image of E-ticket number</label><br>
                {{--                <img src="{{asset('storage/'.$travel_form->ticket_number) }}" alt="No image"--}}
                {{--                     style="width: 250px; height: 250px">--}}

                <span
                    style="display: none">{{ $ticket_number = pathinfo(asset('storage/'.$travel_form->ticket_number),PATHINFO_EXTENSION) }}</span>

                @if($ticket_number == 'jpeg' || $ticket_number == 'jpg' || $ticket_number == 'png')

                    <img src="{{asset('storage/'.$travel_form->ticket_number) }}" alt="No image"
                         style="width: 250px; height: 250px">

                @else
                    <a href="{{ asset('storage/'.$travel_form->ticket_number) }}">View File</a><br>
                    <a href="{{ asset('storage/'.$travel_form->ticket_number) }}" download="">Download File</a>
                @endif
            </div>

            @error('airlines_name')
            <div class="alert alert-danger">E-ticket number required</div>
            @enderror
        <!-- --- form --- -->

            <!-- --- form --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >Total price of the ticket purchased (in Bangladesh Taka).
                    Please write only numbers, no text *</label
                >
                <input
                    type="text"
                    class="form-control"
                    id="ticket_purchased"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="ticket_purchased"
                    class="@error('ticket_purchased') is-invalid @enderror"
                    value="{{ $travel_form->ticket_purchased }}"
                    disabled
                />
            </div>

            @error('ticket_purchased')
            <div class="alert alert-danger">Field required</div>
            @enderror
        <!-- --- form --- -->

            <!-- --- form --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
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
                    value="{{ $travel_form->date_of_departure }}"
                    disabled
                />
            </div>

            @error('date_of_departure')
            <div class="alert alert-danger">Date of departure required</div>
            @enderror
        <!-- --- form --- -->

            <!-- --- form --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
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
                    value="{{ $travel_form->port_of_embarkation }}"
                    disabled

                />
            </div>

            @error('port_of_embarkation')
            <div class="alert alert-danger">Port of embarkation required</div>
            @enderror
        <!-- --- form --- -->

            <!-- --- form --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
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
                    value="{{ $travel_form->name_of_city }}"
                    disabled
                />
            </div>

            @error('name_of_city')
            <div class="alert alert-danger">Name of city of departure required</div>
            @enderror
        <!-- --- form --- -->

            <!-- --- form --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
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
                    value="{{ $travel_form->date_of_arrival }}"
                    disabled
                />
            </div>

            @error('date_of_arrival')
            <div class="alert alert-danger">Date of arrival required</div>
            @enderror
        <!-- --- form --- -->

            <!-- --- form --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
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
                    value="{{ $travel_form->port_of_disembarkation }}"
                    disabled
                />
            </div>

            @error('port_of_disembarkation')
            <div class="alert alert-danger">Port of disembarkation required</div>
            @enderror
        <!-- --- form --- -->

            <!-- --- form --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
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
                    value="{{ $travel_form->name_of_city_2 }}"
                    disabled
                />
            </div>

            @error('name_of_city_2')
            <div class="alert alert-danger">Name of city of arrival field required</div>
            @enderror
        <!-- --- form --- -->

            <!-- --- form --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
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
                    value="{{ $travel_form->approximate_distance }}"
                    disabled
                />
            </div>

            @error('approximate_distance')
            <div class="alert alert-danger">Approximate distance (in kilometer) between arrival airport and
                university/educational institution field required
            </div>
        @enderror
        <!-- --- form --- -->

            <!-- --- submit --- -->

            <div class="form-group submit-button-css form-button-margin-padding">
                {{--                <a href="">--}}
                {{--                    <button type="submit" class="btn btn-secondary">Prev</button>--}}
                {{--                </a>--}}

                <a href="{{ route('banking-verification',$travel_form->user_id) }}">
                    <button type="submit" class="btn btn-primary">Next</button>
                </a>
            </div>
            <!-- --- submit --- -->
        </div>
        <!-- ------------------------------------------------------- end - form -->
    </div>
</div>
</body>

<script>
    function exportPdf() {
        window.print();
    }
</script>

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
