@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><i class="fa-solid fa-chart-line"></i> {{ __('Dashboard') }}</div>

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
                        <option value="2">Super Admin</option>
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
                            @for($i=0;$i<1000;++$i)
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
                          @endfor
                        </tbody>
                    </table>
                    <textarea class="wysiwyg"></textarea>
                    <input type="file" />
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="module">
    $(document).ready(function() {
        // Select2 Multiple
        $('.select2-multiple').select2({
            theme: "bootstrap-5",
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

      document.addEventListener('DOMContentLoaded', function() {
        var calendar = new Calendar($('#calendar').get(0), {
          plugins: [dayGridPlugin, timeGridPlugin, listPlugin, bootstrap5Plugin, interactionPlugin],
          selectable: true,
          initialView: 'dayGridMonth',
          eventBorderColor: 'white',
          themeSystem: 'bootstrap5'
        });

        calendar.render();
      });

</script>
@endsection

