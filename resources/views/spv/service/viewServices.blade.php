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
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /</span> Services</h4>

                <!-- Striped Rows -->
                <div class="card">
                  <div class="table-responsive text-nowrap">
                    <div class="card-body">
                      <a href="{{ route('service.create') }}" class="btn btn-primary">New Service</a><p>
                      <div class="table-responsive">
                        <table id="example" class="display" style="min-width: 845px">
                          <thead>
                            <tr>
                              <th>License Plat</th>
                              <th>Detail Services</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody class="table-border-bottom-0">
                            @foreach ($services as $service)
                            <tr>
                              <td><i class="fab fa-angular fa-lg text-danger me-3"></i><strong>{{ $service->vehicle->license_plate }}</strong></td>
                              <td>
                                <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Detail">
                                  Detail
                                </a>
                              </td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('service.edit', $service) }}"
                                      ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <form action="{{ route('service.destroy', $service) }}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button class="dropdown-item"
                                        ><i class="bx bx-trash me-1"></i> Delete</button>
                                      
                                    </form>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            @endforeach
                           
                          </tbody>
                        </table>

<!-- Extra Large Modal -->
<div class="modal fade" id="Detail" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel4">Detail Information Service</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">Vehicles ID</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="name" id="basic-default-name" placeholder="Silahkan isi" readonly/>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-company">User ID</label>
          <div class="col-sm-10">
            <input
              type="text"
              class="form-control" name="phone"
              id="basic-default-company"
              placeholder="Silahkan isi"
              readonly
            />
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-company">Damage Type</label>
          <div class="col-sm-10">

            <select class="form-select" name="level" id="exampleFormControlSelect1" aria-label="Default select example" readonly>
              <option selected>Silahkan Pilih</option>
              <option value="ringan">Ringan</option>
              <option value="berat">Berat</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-company">Kilometers</label>
          <div class="col-sm-10">
            <input
              type="text"
              class="form-control" name="address"
              id="basic-default-company"
              placeholder="Silahkan isi"
              readonly
            />
          </div>
        </div>
        
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-message">Problem</label>
          <div class="col-sm-10">
            <textarea
              id="basic-default-message"
              class="form-control"
              placeholder="Silahkan isi"
              aria-label="Hi, Do you have a moment to talk Joe?"
              aria-describedby="basic-icon-default-message2"
              readonly
            ></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
      </div>
    </div>
  </div>
</div>

                      </div>
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