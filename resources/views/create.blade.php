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
                        <form class="row g-3" method="POST" action="{{ route('store') }}">
                            @csrf
                            <div class="col-md-6">
                                <label for="Name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                    aria-label="First name">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" name="email" placeholder="Email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                                <label for="Phone" class="form-label">Phone</label>
                                <input type="text" name="phone" placeholder="Phone" class="form-control" id="phone">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" placeholder="Address" name="address" id="inputAddress"
                                    placeholder="1234 Main St">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity"  class="form-label">City</label>
                                <input type="text" placeholder="Address" class="form-control" name="city" id="inputCity">
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
