<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">  
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
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /Customers /</span>Change Data</h4>

                <!-- Striped Rows -->
                <div class="card">
                  <div class="table-responsive text-nowrap">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Change Data Customers</h5>
                      </div>
                      <div class="card-body">
                        <form action="{{ route('customer.update', $customer) }}" method="POST" onsubmit="showEditCustomerConfirmationModal(event)">
                          @csrf
                          @method('PUT')
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="name" id="basic-default-name" value="{{ $customer->name }}" />
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Phone</label>
                            <div class="col-sm-10">
                              <input
                                type="text"
                                class="form-control" name="phone"
                                id="basic-default-company"
                                value="{{ $customer->phone }}"
                              />
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Email</label>
                            <div class="col-sm-10">
                              <input
                                type="email"
                                class="form-control" name="email"
                                id="basic-default-company"
                                value="{{ $customer->email }}"
                              />
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Email Verifikasi</label>
                            <div class="col-sm-10">
                              <input
                                type="email"
                                class="form-control" name="email"
                                id="basic-default-company"
                                value="{{ $customer->email }}"
                              />
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Birth</label>
                            <div class="col-sm-10">
                              <input
                                type="date"
                                class="form-control" name="birth"
                                id="basic-default-company"
                                value="{{ $customer->birth }}"
                              />
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Gender</label>
                            <div class="col-sm-10">

                              <select class="form-select" name="gender" id="exampleFormControlSelect1" aria-label="Default select example">
                                <option selected>Silahkan Pilih</option>
                                <option value="l" @if($customer->gender === 'l') selected @endif>Laki-Laki</option>
                                <option value="p" @if($customer->gender === 'p') selected @endif>Perempuan</option>
                              </select>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Address</label>
                            <div class="col-sm-10">
                              <input
                                type="text"
                                class="form-control" name="address"
                                id="basic-default-company"
                                value="{{ $customer->address }}"
                              />
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
                            function showEditCustomerConfirmationModal(event) {
                                event.preventDefault(); // Prevent form submission
                        
                                // Show the editCustomer confirmation modal
                                $('#editCustomerConfirmationModal').modal('show');
                        
                                // Add a click event listener to the "editCustomer" button inside the modal
                                $('#editCustomerButton').on('click', function () {
                                    // Submit the form after the user confirms the deletion
                                    event.target.submit();
                        
                                    // Hide the editCustomer confirmation modal
                                    $('#editCustomerConfirmationModal').modal('hide');
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