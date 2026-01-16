@section('page_title', 'Users')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Hi Admin Welcome Back</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Users</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <!-- Messages -->
          @include('dashboard.admin.includes.messages')

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Manage Users</h3>
              <div class="card-tools">
                <a href="{{ secure_url('/admin/user/add') }}" class="btn btn-primary">
                  <i class="fa fa-user mr-2"></i> Register new user
                </a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-9 col-sm-12"></div>

                <div class="col-md-3 col-sm-12">
                  <div class="form-group row">
                    <label for="search" class="col-sm-3 col-form-label">Search :</label>
                    <div class="col-sm-9">
                      <input class="form-control" id="search" type="search" wire:model="search"
                        placeholder="by email" />
                    </div>
                  </div>
                </div>
              </div>

              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Action / Details</th>
                  </tr>
                </thead>
                <tbody wire:loading.remove wire:target="search">
                  @forelse ($users as $user)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                      @foreach ($user->getRoles() as $role)
                      {{ $role->slug }}
                      @endforeach
                    </td>
                    <td>
                      @if ($user->status == 1)
                      <span class="badge bg-success">{{ __('Active') }}</span>
                      @else
                      <span class="badge bg-danger">{{ __('Deactive') }}</span>
                      @endif
                    </td>
                    <td style="width: 16rem">
                      <a href="{{ route('edit.users', ['id' => $user->id]) }}" class="btn btn-info btn-sm">
                        <i class="fa fa-edit mr-2"></i>Edit
                      </a>

                      <a href="{{ route('delete.users', ['id' => $user->id]) }}" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash mr-2"></i>Delete
                      </a>
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="8" class="text-center">No record found!</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>

              <!-- Loader -->
              <div class="text-center mt-2">
                <div class="spinner-border" role="status" wire:loading wire:target="search">
                  <span class="sr-only">Loading...</span>
                </div>
              </div>
              <!-- END / Loader -->
            </div>
            <!-- /.card-body -->

            <div class="card-footer clearfix">
              <!-- Pagination -->
              {{ $users->links() }}
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>