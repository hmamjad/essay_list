@extends('master')

@section('main_content')
    <div class="contaner">
        <div class="row p-2">
            <div class="col-md-6">
                <h1>ADD Essay</h1>

                <!-- Add Form -->
                <form  action="{{ route('essay_add') }}" method="POST" class="shadow p-2 bg-info">
                    @csrf

                    <div class="form-group">
                        <label for="title">Title:</label><br>
                        <input type="text" id="title" name="title" required >
                    </div>

                    <div class="form-group">
                        <label for="description_1">Description 1</label>
                        <textarea name="description_1" id="description_1" cols="10" rows="1" required class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="description_2">Description 2</label>
                        <textarea name="description_2" id="description_2" cols="10" rows="1"  class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="description_3">Description 3</label>
                        <textarea name="description_3" id="description_3" cols="10" rows="1"  class="form-control"></textarea>
                    </div>


                    <button type="submit" id="submitBtn" class="btn btn-sm btn-success mt-4">ADD</button>
                </form><br><br>

            </div>

            <a href="{{ route('essay_index')}}">ADD Essay</a>
            <a href="{{ route('show_allessay')}}">show Essay</a>
            {{-- <a href="{{ route(''essay_index'')}}">ADD Essay</a> --}}


        </div>
    </div>
@endsection
