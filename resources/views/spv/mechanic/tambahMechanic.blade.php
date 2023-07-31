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
                            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /Mechanics /</span>Add
                                Data</h4>

                            <!-- Striped Rows -->
                            <div class="card">
                                <div class="table-responsive text-nowrap">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="mb-0">Add Data Mechanics</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('mechanic.store') }}" method="POST"
                                            onsubmit="showAddMechaConfirmationModal(event)">
                                            @csrf
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                    for="basic-default-name">Nama</label>
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
                                                    for="basic-default-company">Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="address"
                                                        id="basic-default-company" placeholder="Silahkan isi" required
                                                        oninvalid="this.setCustomValidity('Harap Diisi Dahulu')"
                                                        oninput="this.setCustomValidity('')" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                    for="basic-default-company">Level</label>
                                                <div class="col-sm-10">

                                                    <select class="form-select" name="level"
                                                        id="exampleFormControlSelect1"
                                                        aria-label="Default select example">
                                                        <option selected>Silahkan Pilih</option>
                                                        <option value="m">Mechanic</option>
                                                        <option value="pm">Pro Mechanic</option>
                                                        <option value="mm">Master Mechanic</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                    for="basic-default-company">Joined</label>
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control" name="joined"
                                                        id="basic-default-company" placeholder="Silahkan isi" required
                                                        oninvalid="this.setCustomValidity('Harap Diisi Dahulu')"
                                                        oninput="this.setCustomValidity('')" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">

                                                <label class="col-sm-2 col-form-label"
                                                    for="basic-default-company">Status</label>
                                                <div class="col-sm-10">

                                                    <select class="form-select" name="resign"
                                                        id="exampleFormControlSelect1"
                                                        aria-label="Default select example">
                                                        <option selected>Silahkan Pilih</option>
                                                        <option value="0">Active</option>
                                                        <option value="1">Resign</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary">Simpan</button>

                                                <a href="#" onclick="window.history.back()"
                                                    class="btn btn-success">Kembali</a>
                                            </div>
                                        </form>
                                        <script>
                                            function showAddMechaConfirmationModal(event) {
                                                event.preventDefault(); // Prevent form submission

                                                // Show the addMecha confirmation modal
                                                $('#addMechaConfirmationModal').modal('show');

                                                // AddMecha a click event listener to the "addMecha" button inside the modal
                                                $('#addMechaButton').on('click', function() {
                                                    // Submit the form after the user confirms the deletion
                                                    event.target.submit();

                                                    // Hide the addMecha confirmation modal
                                                    $('#addMechaConfirmationModal').modal('hide');
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
