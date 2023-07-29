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
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /</span> Customer</h4>

                <!-- Striped Rows -->
                <div class="card">
                  <div class="table-responsive text-nowrap">
                    <div class="card-body">
                      <a href="{{ route('customer.create') }}" class="btn btn-primary">Add Data</a><p>
                      <div class="table-responsive">
                        <table id="example" class="display" style="min-width: 845px">
                          <thead>
                            <tr>
                              <th>Nama</th>
                              <th>Phone</th>
                              <th>Email</th>
                              <th>Birth</th>
                              <th>Gender</th>
                              <th>Address</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody class="table-border-bottom-0">
                            @foreach ($customers as $customer)
                            <tr>
                              <td><a href="{{ route('customer.show', $customer) }}">
                                <i class="fab fa-angular fa-lg text-danger me-3"></i><strong>{{ $customer->name }}</strong>
                                </a>
                              </td>
                              <td>{{ $customer->phone }}</td>
                              <td>  {{ $customer->email }}</td>
                              <td>  {{ $customer->birth }}</td>
                              <td>  {{ $customer->gender }}</td>
                              <td>  {{ $customer->address }}</td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('customer.edit', $customer) }}"
                                      ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <form action="{{ route('customer.destroy', $customer) }}" method="post" onsubmit="showDeleteCostumerConfirmationModal(event)">
                                      @csrf
                                      @method('DELETE')
                                      <button class="dropdown-item"
                                        ><i class="bx bx-trash me-1"></i> Delete</button>
                                      
                                    </form>
                                    <script>
                                      function showDeleteCostumerConfirmationModal(event) {
                                          event.preventDefault(); // Prevent form submission
                                  
                                          // Show the deleteCostumer confirmation modal
                                          $('#deleteCostumerConfirmationModal').modal('show');
                                  
                                          // Add a click event listener to the "DeleteCostumer" button inside the modal
                                          $('#deleteCostumerButton').on('click', function () {
                                              // Submit the form after the user confirms the deletion
                                              event.target.submit();
                                  
                                              // Hide the deleteCostumer confirmation modal
                                              $('#deleteCostumerConfirmationModal').modal('hide');
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