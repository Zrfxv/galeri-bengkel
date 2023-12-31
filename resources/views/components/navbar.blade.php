<!-- Navbar -->
        
    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
            </a>
        </div>
        
        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
        
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="{{ asset('assets') }}/img/admin.png" alt class="w-px-40 h-auto rounded-circle" />
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="#">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar avatar-online">
                                <img src="{{ asset('assets') }}/img/admin.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <span class="fw-semibold d-block">{{ auth()->user()->name }}</span>
                            <small class="text-muted">{{ (auth()->user()->role === 0) ? 'Supervisor' : 'Admin' }}</small>
                        </div>
                    </a>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <a href="" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exLargeModal">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                    </a>
                </li>
                    
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                  
                <li>
                  <form action="{{ route('auth.logout') }}" method="post">
                      @csrf
                      <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal">
                          <i class="bx bx-power-off me-2"></i> Logout
                      </button>
                  </form>
                </li>
            </ul>
        </div>
    </nav>

                    @if(session('login-success'))
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
                            showNotification("{{ session('login-success') }}");
                        </script>
                    @endif

    <!-- Modal logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Logout</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  Apakah Anda yakin ingin keluar?
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                  <form action="{{ route('auth.logout') }}" method="post">
                      @csrf
                      <button type="submit" class="btn btn-danger">Logout</button>
                  </form>
              </div>
          </div>
      </div>
    </div>

<!-- Extra Large Modal -->
<div class="modal fade" id="exLargeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel4">My Profile</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"></button>
        </div>
        
        <form action="{{ route('users.update', ['user' => auth()->user()->id]) }}" method="POST" onsubmit="showProfileConfirmationModal(event)">
            @csrf
            @method('PUT')
            <div class="modal-body">
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" id="basic-default-name" value="{{ auth()->user()->name }}"/>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Username</label>
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control" name="username"
                    id="basic-default-company"
                    value="{{ auth()->user()->username }}"
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Password</label>
                <div class="col-sm-10">
                  <input
                    type="password"
                    class="form-control" name="password"
                    id="basic-default-company"
                    value="{{ auth()->user()->password }}"
                    placeholder=""
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Role</label>
                <div class="col-sm-10">
                  <select class="form-select" name="role" id="exampleFormControlSelect1" aria-label="Default select example">
                    <option>Silahkan Pilih </option>
                    <option value="0" {{ (auth()->user()->role == 0) ? 'selected' : '' }}>SPV</option>
                    <option value="1" {{ (auth()->user()->role == 1) ? 'selected' : '' }}>Admin</option>
                  </select>
                </div>
              </div>
          
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
              </button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>

          <script>
            function showProfileConfirmationModal(event) {
                event.preventDefault(); // Prevent form submission
        
                // Show the profile confirmation modal
                $('#profileConfirmationModal').modal('show');
        
                // profile a click event listener to the "profile" button inside the modal
                $('#profileButton').on('click', function () {
                    // Submit the form after the user confirms the deletion
                    event.target.submit();
        
                    // Hide the profile confirmation modal
                    $('#profileConfirmationModal').modal('hide');
                });
            }
          </script>
      </div>
    </div>
</div>
 <!-- / Navbar -->


 <!-- Profile Confirmation Modal -->
<div class="modal fade" id="profileConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="profileConfirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="profileConfirmationModalLabel">Konfirmasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              Yakin ingin merubah data ini ?
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-danger" id="profileButton">Yes</button>
          </div>
      </div>
  </div>
</div>


<!-- Modal USERS -->

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="deleteConfirmationModalLabel">Konfirmasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              Yakin ingin menghapus data ini ?
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-danger" id="deleteButton">Delete</button>
          </div>
      </div>
  </div>
</div>

<!-- Add Confirmation Modal -->
<div class="modal fade" id="addConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="addConfirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="addConfirmationModalLabel">Konfirmasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              Ingin menyimpan data ?
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary" id="addButton">Yes</button>
          </div>
      </div>
  </div>
</div>

<!-- Edit Confirmation Modal -->
<div class="modal fade" id="editConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="editConfirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editConfirmationModalLabel">Konfirmasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              Yakin ingin merubah data ini ?
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary" id="editButton">Yes</button>
          </div>
      </div>
  </div>
</div>

<!-- Modal MECHANICS -->

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteMechaConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteMechaConfirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="deleteMechaConfirmationModalLabel">Konfirmasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              Yakin ingin menghapus data ini ?
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-danger" id="deleteMechaButton">Delete</button>
          </div>
      </div>
  </div>
</div>

<!-- Add Confirmation Modal -->
<div class="modal fade" id="addMechaConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="addMechaConfirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="addMechaConfirmationModalLabel">Konfirmasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              Ingin menyimpan data ?
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary" id="addMechaButton">Yes</button>
          </div>
      </div>
  </div>
</div>

<!-- Edit Confirmation Modal -->
<div class="modal fade" id="editMechaConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="editMechaConfirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editMechaConfirmationModalLabel">Konfirmasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              Yakin ingin merubah data ini ?
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary" id="editMechaButton">Yes</button>
          </div>
      </div>
  </div>
</div>

<!-- Modal CUSTOMERS -->

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteCustomerConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteCustomerConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteCustomerConfirmationModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Yakin ingin menghapus data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="deleteCustomerButton">Delete</button>
            </div>
        </div>
    </div>
  </div>
  
  <!-- Add Confirmation Modal -->
  <div class="modal fade" id="addCustomerConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="addCustomerConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCustomerConfirmationModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Ingin menyimpan data ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="addCustomerButton">Yes</button>
            </div>
        </div>
    </div>
  </div>
  
  <!-- Edit Confirmation Modal -->
  <div class="modal fade" id="editCustomerConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="editCustomerConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCustomerConfirmationModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Yakin ingin merubah data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="editCustomerButton">Yes</button>
            </div>
        </div>
    </div>
  </div>
  
<!-- Modal VEHICLES -->

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteVehicleConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteVehicleConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteVehicleConfirmationModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Yakin ingin menghapus data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="deleteVehicleButton">Delete</button>
            </div>
        </div>
    </div>
  </div>
  
  <!-- Add Confirmation Modal -->
  <div class="modal fade" id="addVehicleConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="addVehicleConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addVehicleConfirmationModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Ingin menyimpan data ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="addVehicleButton">Yes</button>
            </div>
        </div>
    </div>
  </div>
  
  <!-- Edit Confirmation Modal -->
  <div class="modal fade" id="editVehicleConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="editVehicleConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editVehicleConfirmationModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Yakin ingin merubah data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="editVehicleButton">Yes</button>
            </div>
        </div>
    </div>
  </div>

 
<!-- Modal SERVICE -->

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteServiceConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteServiceConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteServiceConfirmationModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Yakin ingin menghapus data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="deleteServiceButton">Delete</button>
            </div>
        </div>
    </div>
  </div>
  
  <!-- Add Confirmation Modal -->
  <div class="modal fade" id="addServiceConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="addServiceConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addServiceConfirmationModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Ingin menyimpan data ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="addServiceButton">Yes</button>
            </div>
        </div>
    </div>
  </div>

  <!-- Add Confirmation Modal -->
  <div class="modal fade" id="addSConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="addSConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addSConfirmationModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Ingin menyimpan data ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="addSButton">Yes</button>
            </div>
        </div>
    </div>
  </div>
  
  <!-- Edit Confirmation Modal -->
  <div class="modal fade" id="editServiceConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="editServiceConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editServiceConfirmationModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Yakin ingin merubah data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="editServiceButton">Yes</button>
            </div>
        </div>
    </div>
  </div>


 <!-- / Navbar -->