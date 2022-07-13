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
                        <form class="row g-3" method="POST" action="{{ route('editStore') }}">
                            @csrf

                            <input type="text" name="phoneB_id" hidden value="{{ $phoneBook->id }}">

                            <div class="col-md-6">
                                <label for="Name" class="form-label">Name</label>
                                <input type="text" class="form-control" required value="{{ $phoneBook->name }}"
                                    id="name" name="name" placeholder="First name" aria-label="First name">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $phoneBook->email }}"
                                    id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                                <label for="Phone" class="form-label">Phone</label>
                                <input type="number" name="phone" class="form-control" value="{{ $phoneBook->phone }}"
                                    id="phone">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" value="{{ $phoneBook->address }}"
                                    id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">City</label>
                                <input type="text" class="form-control" value="{{ $phoneBook->city }}" name="city"
                                    id="inputCity">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
