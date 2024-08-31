<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Approval</title>
    <link rel="stylesheet" href="{{ asset('assets/css/remarks.css') }}"/>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
    />
</head>
<body class="bg-color">
<!-- form -->
<div>


    <div class="d-flex justify-content-center align-items-center my-5">
        <form class="form-sizing p-5 rounded-3 shadow-lg border" action="{{ route('remarks-store') }}" method="post"
              enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6 col-12">
                    <!-- ----------------- Acceptance committee ---------------------- -->

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"
                        >Acceptance committee</label
                        >
                        <div class="">
                          <textarea
                              class="form-control"
                              placeholder=""
                              id="floatingTextarea2"
                              style="height: 100px"
                              name="acceptance_committee"
                              class="@error('acceptance_committee') is-invalid @enderror"
                          ></textarea>
                        </div>
                    </div>

                    @error('acceptance_committee')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <!-- ----------------- Acceptance committee ---------------------- -->

                    <!-- ----------------- Session for scholarship ---------------------- -->

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"
                        >Session for scholarship</label
                        >
                        <div class="">
                          <textarea
                              class="form-control"
                              placeholder=""
                              id="floatingTextarea2"
                              style="height: 100px"
                              name="session_for_scholarship"
                              class="@error('session_for_scholarship') is-invalid @enderror"
                          ></textarea>
                        </div>
                    </div>

                    @error('session_for_scholarship')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <!-- ----------------- Session for scholarship ---------------------- -->

                    <!-- ------------------------- Remarks ------------------------------ -->

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"
                        >Remarks</label
                        >
                        <div class="">
                          <textarea
                              class="form-control"
                              placeholder=""
                              id="floatingTextarea2"
                              style="height: 100px"
                              name="remarks"
                              class="@error('remarks') is-invalid @enderror"
                          ></textarea>
                        </div>
                    </div>

                    @error('remarks')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <!-- ------------------------- Remarks ----------------------------- -->

                    <!-- ------------------------- Digital Signature ------------------------------ -->

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"
                        >Digital Signature</label
                        >
                        <div class="">
                            <input type="file" name="digital_signature" class="@error('digital_signature') is-invalid @enderror"
                            />
                        </div>
                    </div>

                    @error('digital_signature')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <!-- ------------------------- Digital Signature ----------------------------- -->

                    <!-- ------------------------- Authorized Personnel ------------------------------ -->

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"
                        >Authorized Personnel</label
                        >
                        <div class="">
                            <input
                                type="text"
                                class="form-control"
                                name="authorized_personnel"
                                class="@error('authorized_personnel') is-invalid @enderror"
                            />
                        </div>
                    </div>

                    @error('authorized_personnel')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <!-- ------------------------- Authorized Personnel ----------------------------- -->

                    <!-- ------------------------- Approval ------------------------------ -->

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"
                        >Approval</label
                        >
                        <select
                            class="form-select"
                            aria-label="Default select example"
                            name="status"
                        >
                            <option value="accepted">Accept</option>
                            <option value="rejected">Reject</option>
                        </select>
                    </div>

                    <!-- ------------------------- Approval ----------------------------- -->
                </div>
            </div>

            <!-- ---------------------------- submit query --------------------------------------- -->

            <div class="mb-3 mt-2">
                <div style="display: flex; justify-content: space-between">
                    <button type="submit" class="button btn2-color text-white">
                        Submit
                    </button>

                    <a href="{{ route('application-bank') }}">
                        <button type="button" class="button btn1-color text-white">
                            Back to Application Bank
                        </button>
                    </a>

                </div>
            </div>

            <!-- ---------------------------- submit query --------------------------------------- -->
        </form>
    </div>
</div>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
></script>
</body>
</html>
