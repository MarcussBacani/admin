<x-app-layout>

    <x-slot name="title">crud app

    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Teachers
                            <a href="{{url('crud/create')}}"class="btn btn-primary float-end">add</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>name</th>
                                    <th>age</th>
                                    <th>address</th>
                                    <th>department</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teachers as $item)
                                <tr>
                                    <td>{{$item -> id }}</td>
                                    <td>{{$item -> Name}}</td>
                                    <td>{{$item -> age}}</td>
                                    <td>{{$item -> address}}</td>
                                    <td>{{$item -> department}}</td>
                                    <td>
                                        <a href="{{url('crud/'.$item -> id.'/edit')}}" class="btn btn-success mx-2">Edit</a>
                                    <a 
                                        href="{{url('crud/'.$item -> id.'/delete')}}" 
                                        class ="btn btn-danger mx-1"
                                        onclick ="return confirm('Are you sure?')"
                                    >
                                        Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="scripts">
    </x-slot>

</x-app-layout>