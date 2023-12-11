@extends('master')

@section('main_content')
    <div class="contaner">
        <div class="row p-2">
            <div class="col-md-12">
                <h1>Edit Essay</h1>

                <!-- Add Form -->
                <form  action="{{ route('edit_essay_update',$Alleeditssays->id)}}" method="post" class="shadow p-2">
                    @csrf

                    <div class="form-group">
                        <input type="hidden" id="serial_old" name="serial_old" value="{{ $Alleeditssays->id}}">
                    </div>

                    <div class="form-group">
                        <label for="user">User Name</label><br>
                        <input type="text" id="user" name="user" required value="{{ $Alleeditssays->user}}">
                    </div>

                    <div class="form-group">
                        <label for="title">Title:</label><br>
                        <input type="text" id="title" name="title" required value="{{ $Alleeditssays->title}}">
                    </div>

                    <div class="form-group">
                        <label for="summernote1">Description 1</label>
                        <textarea name="description_1" id="summernote1" cols="10" rows="1" required class="form-control">{{ $Alleeditssays->description_1}}</textarea>
                        {{-- <textarea id="summernote" name="editordata"></textarea> --}}
                    </div>
                    <div class="form-group">
                        <label for="summernote">Description 2</label>
                        <textarea name="description_2" id="summernote2" cols="10" rows="1"  class="form-control">{{ $Alleeditssays->description_2}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="summernote">Description 3</label>
                        <textarea name="description_3" id="summernote3" cols="10" rows="1"  class="form-control">{{ $Alleeditssays->description_3}}</textarea>
                    </div>


                    <button type="submit" id="submitBtn" class="btn btn-sm btn-success mt-4">Update</button>
                </form><br><br>

            </div>


        </div>
    </div>
@endsection
