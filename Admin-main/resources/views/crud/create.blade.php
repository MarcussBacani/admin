<x-app-layout>

    <x-slot name="title">create

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
                        <form action="{{url ('crud/create')}}" method = "POST">
                            @csrf

                            <div class="mb-3">
                                <label>name</label>
                                <input type="text" name="name" class="form-control" value="{{old('name')}}"/>
                                @error('name') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>age</label>
                                <input type="text" name="age" class="form-control" value="{{old('age')}}"/>
                                @error('age') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>address</label>
                                <input type="text" name="address" class="form-control" value="{{old('address')}}"/>
                                @error('address') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>department</label>
                                <input type="text" name="department" class="form-control" value="{{old('department')}}"/>
                                @error('department') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class ="mb-3">
                                <button type ="submit" class = "btn btn-primary">Save</button>
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