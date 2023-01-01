<div class="panel w-100">
    <div class="header w-100" style="display: flex; align-items:center; justify-content:space-between; flex-direction:row;">

        <h2 class="fonted">STAFF</h2>
        <button class="btn btn-warning fonted" id="show-btn">Add staff</button>

    </div>
    <hr>
    <div class="add-staff-panel p-4" id="add-panel">
        <div class="form-container form-control w-50" style="  background-color: #ffffff !important;">
            <div class="header" style="display: flex; align-items:center; justify-content:space-between; flex-direction:row;">
                <h2 class=" fonted">ADD STAFF</h2>
                <button class="btn btn-danger close"><i class="fa-regular fa-circle-xmark"></i></button>
            </div>
            <hr>
            <form action="{{route('auth.add-staff')}}" method="POST">
                @csrf
                @if(Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif

                @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
                @endif
                <div class="staff-data w-100">
                    <div class="split-input w-100 p-0">
                        <div class="s-input w-100">
                            <label for="f_name">First Name :</label>
                            <input type="text" class="f_name form-control w-100" name="f_name" id="f_name">
                        </div>
                        <div class="s-input w-100">
                            <label for="l_name">Last Name :</label>
                            <input type="text" class="l_name form-control w-100" name="l_name" id="l_name">
                        </div>
                    </div>
                    <div class="split-input w-100 p-0">
                        <div class="split-input">
                            <div class="s-input w-100">
                                <label for="age">Age :</label>
                                <input type="number" min="0" class="age form-control w-100" name="age" id="age">
                            </div>
                            <div class="s-input w-100">
                                <label for="gender">Gender :</label>
                                <select name="gender" id="" class="w-100 form-control">
                                    <option value="Female" selected>Female</option>
                                    <option value="Male">Male</option>
                                </select>
                            </div>
                        </div>
                        <div class="s-input w-100">
                            <label for="f_name">Date Of Birth :</label>
                            <input type="date" class="dob form-control w-100" name="dob" id="dob">
                        </div>
                    </div>
                    <div class="s-input w-100">
                        <label for="email">Email address :</label>
                        <input type="email" class="email form-control w-100" name="email" id="email">
                    </div>
                    <div class="s-input w-100">
                        <label for="password">Temporary password :</label>
                        <input type="password" class="address form-control w-100" name="password" id="password">
                    </div>
                    <div class="s-input w-100">
                        <label for="phone_no">Phone number :</label>
                        <input type="number" class="phone_num form-control w-100" name="phone_num" id="phone_num">
                    </div>
                    <div class="s-input w-100">
                        <label>Submit a copy of the following documents: </label>
                    </div>
                    <div class="split-input w-100 p-0">
                        <div class="s-input w-100">
                            <label for="b_cert">CV</label>
                            <input type="file" class="b_cert form-control w-100" name="b_cert" id="b_cert">
                        </div>
                        <div class="s-input w-100">
                            <label for="passport">Passport Photo :</label>
                            <input type="file" class="passport form-control w-100" name="passport" id="passport">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary my-2 w-50 fonted" type="submit">SUBMIT</button>
            </form>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th class="fonted" scope="row">#</th>
                <th class="fonted" scope="col">NAME</th>
                <th class="fonted" scope="col">EMAIL</th>
                <th class="fonted" scope="col">STAFF ID</th>
                <th class="fonted" scope="col">OPTIONS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($staff_data as $item)
            <tr>
                <td scope="row">{{ $item->staff_id }}</td>
                <td>{{ $item->staff_name }}</td>
                <td>{{ $item->staff_email }}</td>
                <td>{{ $item->staff_id }}</td>
                <td>
                    <div class="options-btns">
                        <a href=""><button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button></a>
                        <a href="{{ url('delete-staff/'.$item->staff_id) }}"><button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>