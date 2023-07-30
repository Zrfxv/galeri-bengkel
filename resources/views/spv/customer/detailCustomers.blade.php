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
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /Customers /</span>Detail</h4>

                
                @if(session('tambahVehi-success'))
                <script>
                    // Fungsi untuk menampilkan popup notifikasi
                    function showNotification(message) {
                        // Buat elemen div untuk popup notifikasi
                        var notificationDiv = document.createElement('div');
                        notificationDiv.className = 'notification-popup';
                        notificationDiv.innerText = message;
            
                        // Tambahkan elemen div ke dalam body
                        document.body.appendChild(notificationDiv);
            
                        // Hapus popup notifikasi setelah beberapa detik (misalnya 3 detik)
                        setTimeout(function () {
                            document.body.removeChild(notificationDiv);
                        }, 3000);
                    }
            
                    // Panggil fungsi showNotification dengan pesan notifikasi dari sesi
                    showNotification("{{ session('tambahVehi-success') }}");
                </script>
              @endif

              @if(session('hapusVehi-success'))
                <script>
                    // Fungsi untuk menampilkan popup notifikasi
                    function showNotification(message) {
                        // Buat elemen div untuk popup notifikasi
                        var notificationDiv = document.createElement('div');
                        notificationDiv.className = 'notification-popup';
                        notificationDiv.innerText = message;
            
                        // hapuskan elemen div ke dalam body
                        document.body.appendChild(notificationDiv);
            
                        // Hapus popup notifikasi setelah beberapa detik (misalnya 3 detik)
                        setTimeout(function () {
                            document.body.removeChild(notificationDiv);
                        }, 3000);
                    }
            
                    // Panggil fungsi showNotification dengan pesan notifikasi dari sesi
                    showNotification("{{ session('hapusVehi-success') }}");
                </script>
              @endif

              @if(session('tambahServ-success'))
                <script>
                    // Fungsi untuk menampilkan popup notifikasi
                    function showNotification(message) {
                        // Buat elemen div untuk popup notifikasi
                        var notificationDiv = document.createElement('div');
                        notificationDiv.className = 'notification-popup';
                        notificationDiv.innerText = message;
            
                        // Tambahkan elemen div ke dalam body
                        document.body.appendChild(notificationDiv);
            
                        // Hapus popup notifikasi setelah beberapa detik (misalnya 3 detik)
                        setTimeout(function () {
                            document.body.removeChild(notificationDiv);
                        }, 3000);
                    }
            
                    // Panggil fungsi showNotification dengan pesan notifikasi dari sesi
                    showNotification("{{ session('tambahServ-success') }}");
                </script>
              @endif

              @if(session('hapusServ-success'))
                <script>
                    // Fungsi untuk menampilkan popup notifikasi
                    function showNotification(message) {
                        // Buat elemen div untuk popup notifikasi
                        var notificationDiv = document.createElement('div');
                        notificationDiv.className = 'notification-popup';
                        notificationDiv.innerText = message;
            
                        // hapuskan elemen div ke dalam body
                        document.body.appendChild(notificationDiv);
            
                        // Hapus popup notifikasi setelah beberapa detik (misalnya 3 detik)
                        setTimeout(function () {
                            document.body.removeChild(notificationDiv);
                        }, 3000);
                    }
            
                    // Panggil fungsi showNotification dengan pesan notifikasi dari sesi
                    showNotification("{{ session('hapusServ-success') }}");
                </script>
              @endif

                <h5 class="py-3 my-4"><span class="text-muted fw-light">Customer</span> <b style="color: #696cff;">{{ $customer->name }}</b> ( <b style="color: #02bd2b;">{{ $customer->phone }}</b> )</h5>


                                <!--/ Total Revenue -->
                                <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                                  <div class="row">
                                    <div class="col-6 mb-4">
                                      <div class="card">
                                        <div class="card-body">
                                          <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                              <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
                                            </div>
                                          </div>
                                          <span class="fw-semibold d-block mb-1">Total Service</span>
                                          <h3 class="card-title mb-2">{{ count($customer->vehicles->flatMap->services) }}</h3>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                <div class="row">
                  <div class="col-xl-12">
                    <div class="nav-align-top mb-4">
                      <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                          <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-home" aria-controls="navs-top-home"
                            aria-selected="true">
                            Data Diri
                          </button>
                        </li>
                        <li class="nav-item">
                          <button
                            type="button"
                            class="nav-link"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-top-profile"
                            aria-controls="navs-top-profile"
                            aria-selected="false">
                            Data Kendaraan
                          </button>
                        </li>
                        <li class="nav-item">
                          <button
                            type="button"
                            class="nav-link"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-top-messages"
                            aria-controls="navs-top-messages"
                            aria-selected="false">
                            Riwayat Service
                          </button>
                        </li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
                          <table class="table table-bordered">
                            <tbody>
                              <tr>
                                <td>Nama</td>
                                <td>{{ $customer->name }}</td>
                              </tr>
                              <tr>
                                <td>Phone</td>
                                <td>{{ $customer->phone }}</td>
                              </tr>
                              <tr>
                                <td>Email</td>
                                <td>{{ $customer->email }}</td>
                              </tr>
                              <tr>
                                <td>Birth</td>
                                <td>{{ $customer->birth }}</td>
                              </tr>
                              <tr>
                                <td>Gender</td>
                                <td>{{ $customer->gender }}</td>
                              </tr>
                              <tr>
                                <td>Address</td>
                                <td>{{ $customer->address }}</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                          <div class="table-responsive">
                            <table class="table table-striped">
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
                              @foreach($customer->vehicles as $vehicle)
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
                                      <form action="{{ route('vehicle.destroy', $vehicle) }}" method="post" onsubmit="showDeleteVehicleConfirmationModal(event)">
                                        @csrf
                                        @method('DELETE')
                                        <button class="dropdown-item" ><i class="bx bx-trash me-1"></i> Delete</button>
                                        
                                      </form>
                                      <script>
                                        function showDeleteVehicleConfirmationModal(event) {
                                            event.preventDefault(); // Prevent form submission
                                    
                                            // Show the deleteVehicle confirmation modal
                                            $('#deleteVehicleConfirmationModal').modal('show');
                                    
                                            // Add a click event listener to the "DeleteVehicle" button inside the modal
                                            $('#deleteVehicleButton').on('click', function () {
                                                // Submit the form after the user confirms the deletion
                                                event.target.submit();
                                    
                                                // Hide the deleteVehicle confirmation modal
                                                $('#deleteVehicleConfirmationModal').modal('hide');
                                            });
                                        }
                                      </script>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              @endforeach
                            
                            </tbody>
                          </table>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="navs-top-messages" role="tabpanel">
                          <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                              <thead>
                                <tr>
                                  <th>Date</th>
                                  <th>License Plate</th>
                                  <th>Service Type</th>
                                  <th>Kilometers</th>
                                  <th>Problem</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody class="table-border-bottom-0">
                                @foreach($customer->vehicles as $vehicle)
                                @foreach($vehicle->services as $service)
                                <tr>
                                  <td><a href="{{ route('service.show', $service) }}">
                                    <i class="fab fa-angular fa-lg text-danger me-3"></i><strong>{{ $service->created_at->format('d/m/Y') }}</strong>
                                    </a>
                                  </td>
                                  <td>{{ $vehicle->license_plate }}</td>
                                  <td>{{ $service->type }}</td>
                                  <td>{{ $service->kilometers }}</td>
                                  <td>{{ $service->problem }}</td>
                                  <td>
                                    <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded "></i>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('service.edit', $service) }}"
                                          ><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <form action="{{ route('service.destroy', $service) }}" method="post" onsubmit="showDeleteServiceConfirmationModal(event)">
                                          @csrf
                                          @method('DELETE')
                                          <button class="dropdown-item"
                                            ><i class="bx bx-trash me-1"></i> Delete</button>
                                          
                                        </form>
                                          <script>deleteServiceConfirmationModal
                                            function showDeleteServiceConfirmationModal(event) {
                                                event.preventDefault(); // Prevent form submission
                                        
                                                // Show the deleteService confirmation modal
                                                $('#deleteServiceConfirmationModal').modal('show');
                                        
                                                // Add a click event listener to the "DeleteService" button inside the modal
                                                $('#deleteServiceButton').on('click', function () {
                                                    // Submit the form after the user confirms the deletion
                                                    event.target.submit();
                                        
                                                    // Hide the deleteService confirmation modal
                                                    $('#deleteServiceConfirmationModal').modal('hide');
                                                });
                                            }
                                          </script>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                    @endforeach
                                  @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Tabs -->

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