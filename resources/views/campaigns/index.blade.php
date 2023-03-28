@extends('layout.master')

@section('content')
    <div class="wrapper">
        <form action="{{ route('campaigns.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div id="wizard">
                <!-- SECTION 1 -->
                <h4></h4>
                <section>
                    <div class="form-row">
                        <label for="">
                            Campaign Name
                        </label>
                        <input type="text" class="form-control" name="campaign_name">
                    </div>
                    <div class="form-row">
                        <label for="">
                            Client Name
                        </label>
                        <input type="text" class="form-control" name="client_name">
                    </div>
                </section>

                <!-- SECTION 2 -->
                <h4></h4>
                <section>
                    <div class="form-row">
                        <label for="">
                            Domicile
                        </label>
                        <div class="form-holder">
                            <select name="setup_domicile" id="" class="form-control">
                                <option value="jakarta" class="option">Jakarta</option>
                                <option value="bogor" class="option">Bogor</option>
                                <option value="bekasi" class="option">Bekasi</option>
                            </select>
                            <i class="zmdi zmdi-caret-down"></i>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="age">
                            Age Start
                        </label>
                        <input type="range" class="form-range" id="age" name="setup_age_start">
                    </div>
                    <div class="form-row">
                        <label for="age">
                            Age End
                        </label>
                        <input type="range" class="form-range" id="age" name="setup_age_end">
                    </div>
                    <div class="form-row">
                        <label for="">
                            Gender
                        </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="setup_gender" id="male"
                                value="male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="setup_gender" id="female"
                                value="female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="">
                            Profession
                        </label>
                        <input type="text" class="form-control" name="setup_profession">
                    </div>
                    <div class="form-row">
                        <label for="">
                            Status
                        </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="setup_martial_status" id="single"
                                value="single">
                            <label class="form-check-label" for="single">Single</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="setup_martial_status" id="married"
                                value="married">
                            <label class="form-check-label" for="married">Married</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="">
                            Age of Married
                        </label>
                        <input type="text" class="form-control" name="setup_age_married">
                    </div>
                </section>

                <!-- SECTION 3 -->
                <h4></h4>
                <section>
                    <div class="form-row">
                        <label for="">
                            Target Respondents
                        </label>
                        <input type="text" class="form-control" name="setup_total_respondent">
                    </div>
                    <button type="submit" class="btn btn-primary">Look up</button>
                    <div class="form-row">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Phone</th>
                                    <th>Domicile</th>
                                    <th>Inputed Date</th>
                                    <th>Last Campaign</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </section>

                <!-- SECTION 4 -->
                <h4></h4>
                <section>
                    <div class="form-row" style="margin-bottom: 18px">
                        <label for="">
                            Info Terkait Pesan
                        </label>
                        <textarea name="message" id="" class="form-control" placeholder="Write the details about the thread here."
                            style="height: 149px"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Blast!</button>
                </section>

            </div>
        </form>
    </div>
@endsection
