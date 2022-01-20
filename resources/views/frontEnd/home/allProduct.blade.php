@extends('frontEnd.master')

@section('title')
    All Product | CRUD
@endsection

@section('allDataBody')
    <div class="myBody">
        <div class="readTable">
            <h2 class="readTitle">Student List</h2>
            <h4 class="text-center text-success mt-2"> {{ Session::get('message') }} </h4>
            <table class="table table-hover table-striped text-center">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Depertment</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->mname }}</td>
                            <td>{{ $product->memail }}</td>
                            <td>{{ $product->mphone }}</td>
                            <th>{{ $product->gender == 1 ? 'Male' : 'Female' }}</th>
                            <td>{{ $product->mdepertment }}</td>
                            <td>
                                <a href="{{ route('editProduct', ['id' => $product->id]) }}" class="btn btn-warning"><i
                                        class="far fa-edit"></i></a>
                                <a href="{{ route('deleteProduct', ['id' => $product->id]) }}" class="btn btn-danger"><i
                                        class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- For Restore and permanent delete data --}}
        {{-- <div class="readTable">
            <h2 class="readTitle">Student List</h2>
            <h4 class="text-center text-success mt-2"> {{ Session::get('message') }} </h4>
            <table class="table table-hover table-striped text-center">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Depertment</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($resoreDatas as $resoreData)
                        <tr>
                            <td>{{ $resoreData->mname }}</td>
                            <td>{{ $resoreData->memail }}</td>
                            <td>{{ $resoreData->mphone }}</td>
                            <th>{{ $resoreData->gender == 1 ? 'Male' : 'Female' }}</th>
                            <td>{{ $resoreData->mdepertment }}</td>
                            <td>
                                <a href="{{ route('restoreProduct') }}" class="btn btn-warning"><i
                                        class="fas fa-trash-restore-alt"></i></a>
                                <a href="{{ route('deleteProduct', ['id' => $product->id]) }}" class="btn btn-danger"><i
                                        class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> --}}

    </div>
@endsection
