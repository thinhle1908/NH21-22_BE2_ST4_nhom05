<x-app-layout>
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-5 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">  <div class="">{{$products->appends(request()->all())->links()}}</div></h5>
              
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Manufacture</th>
                                <th>Protype</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Feature</th>
                                <th>Created_at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($products as $row)
                                <tr>
                                    <td><strong>{{ $row->id }}</strong></td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->manufacture->manu_name }}</td>
                                    <td>{{ $row->protype->type_name }}</td>
                                    <td>{{ $row->price }}$</td>
                                    <td>
                                        <img height="100px" width="100px" src="../images/product-details/{{ $row->image }}" />
                                    </td>
                                    <td>{{ substr($row->description,0,100)}}...</td>
                                    <td>{{$row->feature}}</td>
                                    <td>{{$row->created_at}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                <a class="dropdown-item" href="{{ asset('delete-product/'.$row->id) }}"><i
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
