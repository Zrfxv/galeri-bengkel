
@include('components.app')


  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          @if (session()->has('login-error'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>{{ session('login-error') }}</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          @endif
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                  <img src="{{ asset('assets') }}/img/logoGB.png" alt class="w-px-200 h-auto" />
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Selamat Datang Di Galeri Bengkel</h4>
              <p class="mb-4" style="text-align: center">Silahkan Login</p>
              <form id="formAuthentication" class="mb-3" action="{{ route('auth.login') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" autofocus required oninvalid="this.setCustomValidity('Harap Username Diisi Dahulu')" 
                  oninput="this.setCustomValidity('')" />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control"  name="password" placeholder="Masukan Password" aria-describedby="password" required oninvalid="this.setCustomValidity('Harap Password Diisi Dahulu')" 
                    oninput="this.setCustomValidity('')" />
                  </div>
                </div><br>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- / Content -->
    @extends('components.scp')
  </body>
