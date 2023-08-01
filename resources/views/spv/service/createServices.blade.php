<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">
@include('components/app')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            @include('components/sidebar')

            <!-- Layout container -->
            <div class="layout-page">

                @include('components/navbar')

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->

                        <div class="container-xxl flex-grow-1 container-p-y">
                            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /Services /</span>Add
                                Data</h4>
                            <!-- Striped Rows -->
                            <div class="card">
                                <div class="table-responsive text-nowrap">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="mb-0">Add Data Services</h5>
                                    </div>
                                    <div class="card-body">
                                        {{-- <form action="{{ route('service.store') }}" method="POST" onsubmit="showAddServiceConfirmationModal(event)"> --}}
                                        <form action="{{ route('service.store') }}" method="POST"
                                            onsubmit="showAddServiceConfirmationModal(event)>
                                            @csrf

                                            <div class="row">
                                            <div class="col-md-5">


                                                <select class="form-select select2" id="customer" name=""
                                                    aria-label="Default select example">
                                                    <option selected>Select Customer</option>

                                                    @foreach ($customers as $customer)
                                                        <option value={{ $customer->id }}>
                                                            {{ $customer->name }}</option>
                                                    @endforeach
                                                </select>

                                                <!-- Tombol untuk membuka modal -->

                                                <br>
                                                <a href="" data-bs-toggle="modal" data-bs-target="#addCustomers">
                                                    Add Customer
                                                </a>
                                                <br><br>
                                                <select class="form-select select2" name="vehicle_id" id="vehicle"
                                                    aria-label="Default select example">
                                                    <option selected>Select Vehicle</option>

                                                    @foreach ($vehicles as $vehicle)
                                                        <option value={{ $vehicle->id }}>
                                                            {{ $vehicle->license_plate }}</option>
                                                    @endforeach
                                                </select>

                                                <br>

                                                <!-- Tombol untuk membuka modal -->

                                                <a href="" data-bs-toggle="modal" data-bs-target="#addVehicles">
                                                    Add Vehicles
                                                </a>

                                                <input type="number" class="form-control"
                                                    value="{{ auth()->user()->id }}" id="user" name="user_id"
                                                    placeholder="Silahkan isi" readonly hidden />


                                            </div>


                                            <div class="col-md-7">

                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label"
                                                        for="basic-default-company">Service Type</label>
                                                    <div class="col-sm-9">

                                                        <select class="form-select" name="type"
                                                            id="exampleFormControlSelect1"
                                                            aria-label="Default select example">
                                                            <option selected>Silahkan Pilih</option>
                                                            <option value="ringan">Ringan</option>
                                                            <option value="berat">Berat</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label"
                                                        for="basic-default-company">KM </label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" name="kilometers"
                                                            id="basic-default-company" placeholder="Silahkan isi"
                                                            required
                                                            oninvalid="this.setCustomValidity('Harap Diisi Dahulu')"
                                                            oninput="this.setCustomValidity('')" />
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label"
                                                        for="basic-default-message">Problem</label>
                                                    <div class="col-sm-9">
                                                        <textarea type="text" class="form-control" name="problem" id="basic-default-company" placeholder="Silahkan isi"
                                                            required oninvalid="this.setCustomValidity('Harap Diisi Dahulu')" oninput="this.setCustomValidity('')"></textarea>
                                                    </div>
                                                </div>

                                            </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Simpan</button>

                                        <a href="#" onclick="window.history.back()"
                                            class="btn btn-success">Kembali</a>
                                    </div>
                                    </form>
                                    <script>
                                        function showAddServiceConfirmationModal(event) {
                                            event.preventDefault(); // Prevent form submission

                                            // Show the addService confirmation modal
                                            $('#addServiceConfirmationModal').modal('show');

                                            // AddService a click event listener to the "addService" button inside the modal
                                            $('#addServiceButton').on('click', function() {
                                                // Submit the form after the user confirms the deletion
                                                event.target.submit();

                                                // Hide the addService confirmation modal
                                                $('#addServiceConfirmationModal').modal('hide');
                                            });
                                        }
                                    </script>

                                </div>
                            </div>
                        </div>
                        <!--/ Striped Rows -->
                    </div>
                </div>
                <!-- Content wrapper -->


                <!-- Add Customer Modal -->
                <div class="modal fade" id="addCustomers" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel4">Add New Customers</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <form action="{{ route('customer.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name"
                                                id="basic-default-name" placeholder="Silahkan isi" required
                                                oninvalid="this.setCustomValidity('Harap Diisi Dahulu')"
                                                oninput="this.setCustomValidity('')" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label"
                                            for="basic-default-company">Phone</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="phone"
                                                id="basic-default-company" placeholder="Silahkan isi" required
                                                oninvalid="this.setCustomValidity('Harap Diisi Dahulu')"
                                                oninput="this.setCustomValidity('')" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label"
                                            for="basic-default-company">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email"
                                                id="basic-default-company" placeholder="Silahkan isi" required
                                                oninvalid="this.setCustomValidity('Harap Diisi Dahulu')"
                                                oninput="this.setCustomValidity('')" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="basic-default-company">Email
                                            Verifikasi</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email"
                                                id="basic-default-company" placeholder="Silahkan isi" required
                                                oninvalid="this.setCustomValidity('Harap Diisi Dahulu')"
                                                oninput="this.setCustomValidity('')" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label"
                                            for="basic-default-company">Birth</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="birth"
                                                id="basic-default-company" placeholder="Silahkan isi" required
                                                oninvalid="this.setCustomValidity('Harap Diisi Dahulu')"
                                                oninput="this.setCustomValidity('')" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label"
                                            for="basic-default-company">Gender</label>
                                        <div class="col-sm-10">

                                            <select class="form-select" name="gender" id="exampleFormControlSelect1"
                                                aria-label="Default select example">
                                                <option selected>Silahkan Pilih</option>
                                                <option value="1">Laki-Laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label"
                                            for="basic-default-company">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="address"
                                                id="basic-default-company" placeholder="Silahkan isi" required
                                                oninvalid="this.setCustomValidity('Harap Diisi Dahulu')"
                                                oninput="this.setCustomValidity('')" />
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-sm-10 jus">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <button type="button" class="btn btn-outline-secondary"
                                                data-bs-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Vehicles Modal -->
            <div class="modal fade" id="addVehicles" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel4">Add New Vehicles</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <form action="{{ route('vehicle.store') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Nama
                                        Customer</label>
                                    <div class="col-sm-10">

                                        <select class="form-control" name="customer_id"
                                            aria-label="Default select example">
                                            <option selected>Select Customer</option>

                                            @foreach ($customers as $customer)
                                                <option value={{ $customer->id }}>
                                                    {{ $customer->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-company">License
                                        Plat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="license_plate"
                                            id="basic-default-company" placeholder="Silahkan isi" required
                                            oninvalid="this.setCustomValidity('Harap Diisi Dahulu')"
                                            oninput="this.setCustomValidity('')" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-company">Brand</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="brand"
                                            id="basic-default-company" placeholder="Silahkan isi" required
                                            oninvalid="this.setCustomValidity('Harap Diisi Dahulu')"
                                            oninput="this.setCustomValidity('')" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-company">Model</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="model"
                                            id="basic-default-company" placeholder="Silahkan isi" required
                                            oninvalid="this.setCustomValidity('Harap Diisi Dahulu')"
                                            oninput="this.setCustomValidity('')" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-company">Color</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="color"
                                            id="basic-default-company" placeholder="Silahkan isi" required
                                            oninvalid="this.setCustomValidity('Harap Diisi Dahulu')"
                                            oninput="this.setCustomValidity('')" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-company">Type</label>
                                    <div class="col-sm-10">

                                        <select class="form-select" name="type" id="exampleFormControlSelect1"
                                            aria-label="Default select example">
                                            <option selected>Silahkan Pilih</option>
                                            <option value="car">Car</option>
                                            <option value="moto">Moto</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="button" class="btn btn-outline-secondary"
                                            data-bs-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Navbar -->


    </div>
    <!-- / Content -->


    @include('components/footer')

    <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <!-- Include Scripts -->
    @include('components/scp')
</body>

</html>
