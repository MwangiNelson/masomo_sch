<div class="panel selected-panel w-100">
    <div class="header">

        <h3>STUDENTS</h3>
        <!-- <button class="btn btn-outline-warning">Add student</button> -->

    </div>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th class="fonted" scope="row">#</th>
                <th class="fonted" scope="col">NAME</th>
                <th class="fonted" scope="col">EMAIL</th>
                <th class="fonted" scope="col">STUDENT ID</th>
                <th class="fonted" scope="col">OPTIONS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student_data as $item)
            <tr>
                <td scope="row">{{ $item->stud_id }}</td>
                <td>{{ $item->stud_name }}</td>
                <td>{{ $item->stud_email }}</td>
                <td>{{ $item->stud_id }}</td>
                <td>
                    <div class="options-btns">
                        <a href=""><button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button></a>
                        <a href=""><button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>