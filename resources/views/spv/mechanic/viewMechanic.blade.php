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
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /</span> Mechanics</h4>

                @if(session('tambahMecha-success'))
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
                    showNotification("{{ session('tambahMecha-success') }}");
                </script>
              @endif

              @if(session('hapusMecha-success'))
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
                    showNotification("{{ session('hapusMecha-success') }}");
                </script>
              @endif

                <!-- Striped Rows -->
                <div class="card">
                  <div class="table-responsive text-nowrap">
                    <div class="card-body">
                      <a href="{{ route('mechanic.create') }}" class="btn btn-primary">Add Data</a><p>
                      <div class="table-responsive">
                        <table id="example" class="display" style="min-width: 845px">
                          <thead>
                            <tr>
                              <th>Nama</th>
                              <th>Phone</th>
                              <th>Address</th>
                              <th>Level</th>
                              <th>Joined</th>
                              <th>Resign</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody class="table-border-bottom-0">
                            @foreach ($mechanics as $mecha)
                            <tr>
                              <td><i class="fab fa-angular fa-lg text-danger me-3"></i><strong>{{ $mecha->name }}</strong></td>
                              <td>{{ $mecha->phone }}</td>
                              <td>  {{ $mecha->address }}</td>
                              <td>  {{ $mecha->level }}</td>
                              <td>  {{ $mecha->joined }}</td>
                              <td>  {{ $mecha->resign }}</td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('mechanic.edit', $mecha) }}"
                                      ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <form action="{{ route('mechanic.destroy', $mecha) }}" method="post" onsubmit="showDeleteMechaConfirmationModal(event)">
                                      @csrf
                                      @method('DELETE')
                                      <button class="dropdown-item"
                                        ><i class="bx bx-trash me-1"></i> Delete</button>
                                      
                                    </form>
                                    <script>
                                      function showDeleteMechaConfirmationModal(event) {
                                          event.preventDefault(); // Prevent form submission
                                  
                                          // Show the deleteMecha confirmation modal
                                          $('#deleteMechaConfirmationModal').modal('show');
                                  
                                          // Add a click event listener to the "DeleteMecha" button inside the modal
                                          $('#deleteMechaButton').on('click', function () {
                                              // Submit the form after the user confirms the deletion
                                              event.target.submit();
                                  
                                              // Hide the deleteMecha confirmation modal
                                              $('#deleteMechaConfirmationModal').modal('hide');
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