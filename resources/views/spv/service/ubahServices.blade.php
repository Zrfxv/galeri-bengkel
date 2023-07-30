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
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /Services /</span>Edit Data</h4>

                <!-- Striped Rows -->
                <div class="card">
                  <div class="table-responsive text-nowrap">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Edit Data Services</h5>
                    </div>
                    <div class="card-body">
                      <form action="{{ route('service.update', $service) }}" method="POST" onsubmit="showEditServiceConfirmationModal(event)">
                        @csrf
                        @method('PUT')
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Customer</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="basic-default-name" value="{{ $service->user->name }}" readonly/>
                              <input type="hidden" class="form-control" name="vehicle_id" id="basic-default-name" value="{{ $service->vehicle_id }}" readonly/>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Damage Type</label>
                            <div class="col-sm-10">

                              <select class="form-select" name="type" id="exampleFormControlSelect1" aria-label="Default select example" >
                                <option value="" selected disabled>Silahkan Pilih</option>
                                <option value="ringan" @if($service->type === 'ringan') selected @endif>Ringan</option>
                                <option value="berat"@if($service->type === 'berat') selected @endif>Berat</option>
                              </select>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Kilometers</label>
                            <div class="col-sm-10">
                              <input
                                type="text"
                                class="form-control" name="kilometers"
                                id="basic-default-company"
                                value="{{ $service->kilometers }}"
                              />
                            </div>
                          </div>
                          
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Problem</label>
                            <div class="col-sm-10">
                              <textarea
                                id="basic-default-message"
                                class="form-control"
                                aria-label="Hi, Do you have a moment to talk Joe?"
                                aria-describedby="basic-icon-default-message2"
                                name="problem"
                              >{{ $service->problem }}</textarea>
                            </div>
                          </div>
                          <div class="row justify-content-end">
                            <div class="col-sm-10">
                              <button type="submit" class="btn btn-primary">Save</button>
                              <a href="#" onclick="window.history.back()" class="btn btn-success">Back</a>
                            </div>
                          </div>
                        </form>
                        <script>
                            function showEditServiceConfirmationModal(event) {
                                event.preventDefault(); // Prevent form submission
                        
                                // Show the editService confirmation modal
                                $('#editServiceConfirmationModal').modal('show');
                        
                                // Add a click event listener to the "editService" button inside the modal
                                $('#editServiceButton').on('click', function () {
                                    // Submit the form after the user confirms the deletion
                                    event.target.submit();
                        
                                    // Hide the editService confirmation modal
                                    $('#editServiceConfirmationModal').modal('hide');
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