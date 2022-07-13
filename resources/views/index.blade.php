@extends('layout')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">PhoneBook</h3>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('create') }}">
                            <button type="button" class="btn btn-outline-dark">Create PhoneBook</button>
                        </a>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($phoneBook as $phoneB )
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $phoneB->name }}</td>
                                    <td>{{ $phoneB->email }}</td>
                                    <td>{{ $phoneB->phone }}</td>
                                    <td>{{ $phoneB->address }}</td>
                                    <td>{{ $phoneB->city }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('edit', $phoneB->id) }}">
                                                <button class="btn btn-outline-primary">edit</button>
                                            </a>

                                            <form action="{{route('delete')}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <input type="text" name="phoneB_id" value="{{ $phoneB->id }}" hidden>
                                                <button class="btn btn-outline-danger">delete</button>
                                            </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</section>
