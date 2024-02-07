<x-app-layout>

    <x-slot name="title">edit

    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                @endif


                <div class="card">
                    <div class="card-header">
                        <h4>Teachers
                            <a href="{{url('crud')}}"class="btn btn-primary float-end">back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{url('crud/'.$crud->id.'/edit')}}" method = "POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label>name</label>
                                <input type="text" name="name" class="form-control" value="{{$crud -> Name}}"/>
                                @error('name') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>age</label>
                                <input type="text" name="age" class="form-control" value="{{$crud -> age}}"/>
                                @error('age') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>address</label>
                                <input type="text" name="address" class="form-control" value="{{$crud -> address}}"/>
                                @error('address') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>department</label>
                                <input type="text" name="department" class="form-control" value="{{$crud -> department}}"/>
                                @error('department') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class ="mb-3">
                                <button type ="submit" class = "btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="scripts">
    </x-slot>

</x-app-layout>