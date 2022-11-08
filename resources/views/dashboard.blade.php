@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @role('super-admin|admin')
                        {{ __('You are logged in as Admin!') }}
                    @else
                        {{ __('You are logged in!') }}
                    @endrole
                    <select name="role[]" class="col-12 select2-multiple" multiple>
                        <option value="1">Admin</option>
                    </select>
                    <table class="table table-bordered" id="users_table">
                        <thead>
                             <tr>
                               <th>No</th>
                               <th>Name</th>
                               <th>Email</th>
                             </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{ 1 }}</td>
                            <td>{{ 2 }}</td>
                            <td>{{ 3 }}</td>
                          </tr>
                          <tr>
                            <td>{{ 2 }}</td>
                            <td>{{ 3 }}</td>
                            <td>{{ 1 }}</td>
                          </tr>
                          <tr>
                            <td>{{ 3 }}</td>
                            <td>{{ 1 }}</td>
                            <td>{{ 2 }}</td>
                          </tr>
                        </tbody>
                    </table>
                    <textarea class="wysiwyg"></textarea>
                    <input type="file" />
                </div>
            </div>
        </div>
    </div>
</div>

<script type="module">
    $(document).ready(function() {
        // Select2 Multiple
        $('.select2-multiple').select2({
            placeholder: "Select",
            allowClear: true
        });
        // Datatable
        $(function () {
            $('#users_table').DataTable({
                processing: true,
                serverSide: false
            });
        });
        //Ckeditor
        ClassicEditor
            .create( document.querySelector('.wysiwyg') )
            .catch( error => {
                console.error( error );
        } );
        // Get a reference to the file input element
        const inputElement = document.querySelector('input[type="file"]');

        // Create a FilePond instance
        const pond = FilePond.create(inputElement);
    });
</script>
@endsection
