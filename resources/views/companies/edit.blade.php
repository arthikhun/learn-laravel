<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
    <div class="contraner mt-2">
        <div class="row">
            <div class="col-lg-12">
                <h2>Edit Company</h2>
            </div>
            <div>
                <a href="{{route('companies.index')}}" class="btn btn-pimary">Back</a>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
            <form action="{{route('companies.update', $company->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="from-group my-3">
                            <strong>Company Name</strong>
                            <input type="text" name="name" value="{{$company->name}}" class="form-control" placeholder="Company Name">
                            @error('name')
                                <div class="alert alert-danger">{{$message}}</div>   
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="from-group my-3">
                            <strong>Company Email</strong>
                            <input type="email" name="email" value="{{$company->email}}" class="form-control" placeholder="Company Email">
                            @error('email')
                                <div class="alert alert-danger">{{$message}}</div>   
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="from-group my-3">
                            <strong>Company Adress</strong>
                            <input type="text" name="address" value="{{$company->address}}" class="form-control" placeholder="Company Address">
                            @error('address')
                                <div class="alert alert-danger">{{$message}}</div>   
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn mt-3 btn-primary">Summit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>