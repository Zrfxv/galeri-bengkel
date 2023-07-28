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
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /</span> Vehicles</h4>

                <!-- Striped Rows -->
                <div class="card">
                  <div class="table-responsive text-nowrap">
                    <div class="card-body">
                      <a href="{{ route('vehicle.create') }}" class="btn btn-primary">Add Data</a><p>
                      <div class="table-responsive">
                        <table id="example" class="display" style="min-width: 845px">
                          <thead>
                            <tr>
                              <th>Nama Customer</th>
                              <th>License Plat</th>
                              <th>Brand</th>
                              <th>Model</th>
                              <th>Color</th>
                              <th>Type</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody class="table-border-bottom-0">
                            @foreach ($vehicles as $vehicle)
                            <tr>
                              <td><i class="fab fa-angular fa-lg text-danger me-3"></i><strong>{{ $vehicle->customer->name }}</strong></td>
                              <td>{{ $vehicle->license_plate }}</td>
                              <td>{{ $vehicle->brand }}</td>
                              <td>{{ $vehicle->model }}</td>
                              <td>{{ $vehicle->color }}</td>
                              <td>{{ $vehicle->type }}</td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('vehicle.edit', $vehicle) }}"
                                      ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <form action="{{ route('vehicle.destroy', $vehicle) }}" method="post">
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