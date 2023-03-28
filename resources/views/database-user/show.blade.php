@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-5">
            <div class="card">
                <div class="card-header">
                    <h4>User Detail</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-2">
                        <h5><i class="fa-regular fa-user mx-3"></i>Name</h5>
                        <p class="mx-5">{{ $user->respondent_name }}</p>
                    </div>
                    <div class="row mb-2">
                        <h5><i class="fa-regular fa-envelope mx-3"></i>Email</h5>
                        <p class="mx-5">{{ $user->email }}</p>
                    </div>
                    <div class="row mb-2">
                        <h5><i class="fa-regular fa-hashtag mx-3"></i>Respondent Code</h5>
                        <p class="mx-5">{{ $user->respondent_code }}</p>
                    </div>
                    <div class="row mb-2">
                        <h5><i class="fa-solid fa-phone mx-3"></i>Phone Number</h5>
                        <p class="mx-5">{{ $user->phone }}</p>
                    </div>
                    <div class="row mb-2">
                        <h5><i class="fa-solid fa-location-dot mx-3"></i>Domicile</h5>
                        <p class="mx-5">{{ $user->district }}</p>
                    </div>
                    <div class="row mb-2">
                        <h5><i class="fa-solid fa-venus-mars mx-3"></i>Gender</h5>
                        <p class="mx-5">{{ $user->gender }}</p>
                    </div>
                    <div class="row mb-2">
                        <h5><i class="fa-regular fa-circle-user mx-3"></i>Age</h5>
                        <p class="mx-5">{{ $user->age }}</p>
                    </div>
                    <div class="row mb-2">
                        <h5><i class="fa-solid fa-briefcase mx-3"></i>Profession</h5>
                        <p class="mx-5">{{ $user->occupation }}</p>
                    </div>
                    <div class="row mb-2">
                        <h5><i class="fa-regular fa-map mx-3"></i>Address</h5>
                        <p class="mx-5">{{ $user->address }}</p>
                    </div>
                    <div class="row mb-2">
                        <h5><i class="fa-solid fa-ring mx-3"></i>Status</h5>
                        <p class="mx-5">{{ $user->marital_status }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="card">
                <div class="card-header">
                    <h5>History Campaign</h5>
                </div>
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>Campaign</th>
                                <th>Status</th>
                                <th>Client</th>
                                <th>Joined Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>tes</td>
                                <td>on prog</td>
                                <th>berliana</th>
                                <th>12-12-10</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
