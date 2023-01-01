<div class="panel w-100">
    <div class="header w-100" style="display: flex; align-items:center; justify-content:space-between; flex-direction:row;">

        <h2 class="fonted">UNITS</h2>
        <button class="btn btn-warning fonted" id="add-unit-btn">Add Units</button>

    </div>
    <hr>
    <div class="add-staff-panel p-4" id="add-unit-panel">
        <div class="form-container form-control w-50" style="  background-color: #ffffff !important;">
            <div class="header" style="display: flex; align-items:center; justify-content:space-between; flex-direction:row;">
                <h2 class=" fonted">ADD UNITS</h2>
                <button class="btn btn-danger close-unit"><i class="fa-regular fa-circle-xmark"></i></button>
            </div>
            <hr>
            <form action="{{route('auth.add-unit')}}" method="post" class="form-control w-100 py-4 ">
                @csrf
                <div class="w-100">
                    <label for="unit_name">Unit name:</label>
                    <input type="text" name="unit_name" class="form-control w-100">
                    <span class="text-danger">@error('unit_name'){{ $message }} @enderror</span>
                </div>
                <div class="w-100">
                    <label for="unit_desc">Unit description:</label>
                    <textarea class="form-control" name="unit_desc" rows="5" id="comment"></textarea>
                    <span class="text-danger">@error('unit_desc'){{ $message }} @enderror</span>
                </div>
                <div class="w-100">
                    <label for="unit_name">Unit code:</label>
                    <input type="text" name="unit_code" class="form-control w-100">
                    <span class="text-danger">@error('unit_code'){{ $message }} @enderror</span>
                </div>
                <div class="w-100">
                    <label for="unit_name">Unit chapters:</label>
                    <input type="number" name="unit_chapters" class="form-control w-100">
                    <span class="text-danger">@error('unit_chapters'){{ $message }} @enderror</span>
                </div>
                <div class="w-100">
                    <label for="unit_name">Unit lecturer:</label>
                    <input type="text" name="unit_lec" class="form-control w-100" value="1">
                </div>
                <div class="w-50 py-2">
                    <button class="btn btn-primary w-100">ADD UNIT</button>
                </div>
            </form>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th class="fonted" scope="row">#</th>
                <th class="fonted" scope="col">UNIT NAME</th>
                <th class="fonted" scope="col">UNIT DESCRIPTION</th>
                <th class="fonted" scope="col">CODE</th>
                <th class="fonted" scope="col">CHAPTERS</th>
                <th class="fonted" scope="col">OPTIONS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($unit_data as $item)
            <tr>
                <td scope="row">{{ $item->id }}</td>
                <td>{{ $item->unit_name }}</td>
                <td>{{ $item->unit_desc }}</td>
                <td>{{ $item->unit_code }}</td>
                <td>{{ $item->unit_chapters }}</td>
                <td>
                    <div class="options-btns" style="display: flex; flex-direction:row;">
                        <a href=""><button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button></a>
                        <a href=""><button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>