<x-app-layout>
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-5 mb-4"><span class="text-muted fw-light">Dashboard /</span> Protype</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">  <div class="">{{$user->appends(request()->all())->links()}}</div></h5>
              
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($user as $row)
                                <tr>
                                    <td><strong>{{ $row->id }}</strong></td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->password}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ asset('edit-user/'.$row->id) }}"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                <a class="dropdown-item" href="{{ asset('delete-user/'.$row->id) }}"><i
                                                        class="bx bx-trash me-1"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                    
                                </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                
            </div>
            <!--/ Basic Bootstrap Table -->
        </div>
    </div>
</x-app-layout>
