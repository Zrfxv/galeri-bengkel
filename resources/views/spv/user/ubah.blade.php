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
                            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /Users /</span>Change
                                Data</h4>

                            <!-- Striped Rows -->
                            <div class="card">
                                <div class="table-responsive text-nowrap">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="mb-0">Change Data User</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('users.update', $user) }}" method="POST" onsubmit="showEditConfirmationModal(event)">
                                            @csrf
                                            @method('PUT')
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                    for="basic-default-name">Nama</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="name"
                                                        id="basic-default-name" value="{{ $user->name }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                    for="basic-default-company">Username</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="username"
                                                        id="basic-default-company" value="{{ $user->username }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                    for="basic-default-company">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" name="password"
                                                        id="basic-default-company" placeholder="" value="{{ $user->password }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                    for="basic-default-company">Role</label>
                                                <div class="col-sm-10">

                                                    <select class="form-select" name="role"
                                                        id="exampleFormControlSelect1"
                                                        aria-label="Default select example">
                                                        <option>Silahkan Pilih </option>
                                                        <option value="0"
                                                            {{ $user->role === 0 ? 'selected' : '' }}>SPV</option>
                                                        <option value="1"
                                                            {{ $user->role === 1 ? 'selected' : '' }}>Admin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                    
                                                    <a href="#" onclick="window.history.back()" class="btn btn-success">Kembali</a>
                                                </div>
                                            </div>
                                        </form>
                                        <script>
                                            function showEditConfirmationModal(event) {
                                                event.preventDefault(); // Prevent form submission
                                        
                                                // Show the edit confirmation modal
                                                $('#editConfirmationModal').modal('show');
                                        
                                                // Add a click event listener to the "edit" button inside the modal
                                                $('#editButton').on('click', function () {
                                                    // Submit the form after the user confirms the deletion
                                                    event.target.submit();
                                        
                                                    // Hide the edit confirmation modal
                                                    $('#editConfirmationModal').modal('hide');
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
