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
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /Services /</span>Detail</h4>

                <h5 class="py-3 my-4"><span class="text-muted fw-light">Customer</span> <b style="color: #696cff;">{{ $service->vehicle->customer->name }}</b> ( <b style="color: #02bd2b;">{{ $service->vehicle->customer->phone }}</b> )</h5>

                <!-- Striped Rows -->
                <div class="card">
                    <div class="table-responsive text-nowrap">
                        <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Detail Data Services ( <b style="color: #696cff;">{{ $service->created_at->format('d/m/Y') }}</b> )</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    </thead>
                                <tbody>
                                    <tr>
                                    <td>Nama Customer</td>
                                    <td><b>{{ $service->vehicle->customer->name }}</b></td>
                                    </tr>
                                    <tr>
                                    <td>License Plate</td>
                                    <td><b>{{ $service->vehicle->license_plate }}</b></td>
                                    </tr>
                                    <tr>
                                    <td>Service Type</td>
                                    <td><b>{{ $service->type }}</b></td>
                                    </tr>
                                    <tr>
                                    <td>Kilometers</td>
                                    <td><b>{{ $service->kilometers }}</b></td>
                                    </tr>
                                    <tr>
                                    <td>Problem</td>
                                    <td><b>{{ $service->problem }}</b></td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                  </div>
                </div><br>                                                    
                <a href="#" onclick="window.history.back()" class="btn btn-success">Back</a>
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