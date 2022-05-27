<x-app-layout>
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-5 mb-4"><span class="text-muted fw-light">Dashboard /</span> Comment</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">  <div class="">{{$comment->appends(request()->all())->links()}}</div></h5>
              
                    <table class="table">
                        <thead>
                            <tr>
                            <th>ID</th>
                                <th>Product_ID</th>
                                <th>User_Id</th>
                                <th>Comment</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($comment as $row)
                                <tr>
                                    <td><strong>{{ $row->comment_id }}</strong></td>
                                    <td>{{ $row->product_id }}</td>
                                    <td>{{ $row->user_id }}</td>
                                    <td>{{$row->comment_comment}}</td>
                                    <td>{{$row->comment_date}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ asset('edit-comment/'.$row->comment_id) }}"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                <a class="dropdown-item" href="{{ asset('delete-comment/'.$row->comment_id) }}"><i
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
