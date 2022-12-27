@extends('layouts.master')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
    <div class="container position-relative">
        <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
            <h2>DataTables</h2>
            <p>This slide shows us datatable infomataion.</p>
        </div>
        </div>
    </div>
    </div>
    <nav>
    <div class="container">
        <ol>
        <li><a href="{{route('aspect.home')}}">Home</a></li>
        <li>Scheduling</li>
        <li>DataTables</li>
        </ol>
    </div>
    </nav>
</div>

<div class="panel panel-default" style="margin-top:5rem;margin-bottom:5rem;width: 90%;text-align: center;margin-left: auto;margin-right: auto;">
    <div class="panel-heading" style="background-color:#f3f6fc;color:#0d69fe;">
        <h3 class="panel-title pull-left" style="font-weight:bold;">
            Schedule table for candidates
        </h3>
        <button class="btn btn-success pull-right create"><i class="glyphicon glyphicon-plus"></i> Add</button>
        <div class="clearfix"></div>
    </div>
    <div class="table-responsive" style="margin-top:1rem;">
        <table id="schedule-table" class="table" style="width:100% !important">
            <thead>
                <td>Name</td>
                <td>Monday</td>
                <td>Tuesday</td>
                <td>Wednesday</td>
                <td>Thursday</td>
                <td>Friday</td>
                <td>Saturday</td>
                <td>Sunday</td>
                <td style="width:250px;">Actions</td>
            </thead>
        </table>
    </div>

</div>

{{-- modal for add --}}
<div id="modalAdd" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Schedule</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form id="store">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="can_name">Candidate's Name</label>
                        <input type="text" class="form-control can_name" name="can_name" placeholder="Enter candidate's name" required>
                    </div>
                    <div class="form-group">
                        <label for="mon">Monday</label>
                        <input type="text" class="form-control mon" name="mon" placeholder="Enter schedule on Monday">
                    </div>
                    <div class="form-group">
                        <label for="tue">Tuesday</label>
                        <input type="text" class="form-control tue" name="tue" placeholder="Enter schedule on Tuesday">
                    </div>
                    <div class="form-group">
                        <label for="wed">Wednesday</label>
                        <input type="text" class="form-control wed" name="wed" placeholder="Enter schedule on Wednesday">
                    </div>
                    <div class="form-group">
                        <label for="thur">Thursday</label>
                        <input type="text" class="form-control thur" name="thur" placeholder="Enter schedule on Thursday">
                    </div>
                    <div class="form-group">
                        <label for="fri">Friday</label>
                        <input type="text" class="form-control fri" name="fri" placeholder="Enter schedule on Friday">
                    </div>
                    <div class="form-group">
                        <label for="sat">Saturday</label>
                        <input type="text" class="form-control sat" name="sat" placeholder="Enter schedule on Saturday">
                    </div>
                    <div class="form-group">
                        <label for="sun">Sunday</label>
                        <input type="text" class="form-control sun" name="sun" placeholder="Enter schedule on Sunday">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="modalEdit" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Schedule</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form id="update">
                <div class="modal-body">
                    <input type="hidden" name="id" class="id">
                    <div class="form-group">
                        <label for="can_name">Candidate's Name</label>
                        <input type="text" class="form-control can_name" name="can_name" placeholder="Enter candidate's name">
                    </div>
                    <div class="form-group">
                        <label for="mon">Monday</label>
                        <input type="text" class="form-control mon" name="mon" placeholder="Enter schedule on Monday">
                    </div>
                    <div class="form-group">
                        <label for="tue">Tuesday</label>
                        <input type="text" class="form-control tue" name="tue" placeholder="Enter schedule on Tuesday">
                    </div>
                    <div class="form-group">
                        <label for="wed">Wednesday</label>
                        <input type="text" class="form-control wed" name="wed" placeholder="Enter schedule on Wednesday">
                    </div>
                    <div class="form-group">
                        <label for="thur">Thursday</label>
                        <input type="text" class="form-control thur" name="thur" placeholder="Enter schedule on Thursday">
                    </div>
                    <div class="form-group">
                        <label for="fri">Friday</label>
                        <input type="text" class="form-control fri" name="fri" placeholder="Enter schedule on Friday">
                    </div>
                    <div class="form-group">
                        <label for="sat">Saturday</label>
                        <input type="text" class="form-control sat" name="sat" placeholder="Enter schedule on Saturday">
                    </div>
                    <div class="form-group">
                        <label for="sun">Sunday</label>
                        <input type="text" class="form-control sun" name="sun" placeholder="Enter schedule on Sunday">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
jQuery(function($) {
    $('#schedule-table').DataTable({
        processing: true,
        serverside: true,
        ajax: '{{ route('schedule_data.getdata') }}',
        columns: [{
                data: 'name'
            },
            {
                data: 'monday' 
            },
            {
                data: 'tuesday'
            },
            {
                data: 'wednesday'
            },
            {
                data: 'thursday'
            },
            {
                data: 'friday'
            },
            {
                data: 'saturday'
            },
            {
                data: 'sunday'
            },
            {
                data: 'action',
                orderable: false,
                searchable: false
            }
        ]
    });

    function refresh() {
        var table = $('#schedule-table').DataTable();
        table.ajax.reload(null, false);
        console.log('refresh success');
    }

    function cleaner() {
        $('.can_name').val('');
        $('.mon').val('');
        $('.tue').val('');
        $('.wed').val('');
        $('.thur').val('');
        $('.fri').val('');
        $('.sat').val('');
        $('.sun').val('');
        console.log('cleaner success');
    }

    function token() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    }

    //create
    $(document).on('click', '.create', function (e) {
        e.preventDefault();
        cleaner();
        
        $('#modalAdd').modal('show');
    });

    //edit
    $(document).on('click', '.edit', function (e) {
        e.preventDefault();
        var id = $(this).attr('schedule_id');

        console.log(id);
        token();

        $.ajax({
            url: 'schedules/' + id + '/edit',
            method: 'GET',
            success: function (result) {

                if (result.success) {
                    let json = jQuery.parseJSON(result.data);
                    console.log(json);
                    $('.id').val(json.id);
                    $('.can_name').val(json.name);
                    $('.mon').val(json.monday);
                    $('.tue').val(json.tuesday);
                    $('.wed').val(json.wednesday);
                    $('.thur').val(json.thursday);
                    $('.fri').val(json.friday);
                    $('.sat').val(json.saturday);
                    $('.sun').val(json.sunday);

                    $('#modalEdit').modal('show');
                }

            }
        });


    });

    $(document).on('submit', '#modalAdd', function (e) {
        e.preventDefault();
        var formData = $("form#store").serializeArray();
        var form_data = new FormData();

        token();

        console.log(formData);

        form_data.append('name', formData[0].value);
        form_data.append('monday', formData[1].value);
        form_data.append('tuesday', formData[2].value);
        form_data.append('wednesday', formData[3].value);
        form_data.append('thursday', formData[4].value);
        form_data.append('friday', formData[5].value);
        form_data.append('saturday', formData[6].value);
        form_data.append('sunday', formData[7].value);
        
        $.ajax({
            url: '/schedule_add',
            method: 'POST',
            dataType: 'JSON',
            data: form_data,
            processData: false,
            contentType: false,
            cache:false,
            success: function (result) {
                console.log(result);
                if (result.success) {
                    refresh();
                    $('#modalAdd').modal('hide');
                    swal(
                        'Good job!',
                        'Successfull Saved!',
                        'success'
                    );
                }
            },
            error: function(err)
            {
                alert('err');
            }
        });
    });

    //update
    $(document).on('submit', '#modalEdit', function (e) {
        e.preventDefault();

        var formData = $("form#update").serializeArray();

        token();

        var id = formData[0].value
        var data = {
            name: formData[1].value,
            monday: formData[2].value,
            tuesday: formData[3].value,
            wednesday: formData[4].value,
            thursday: formData[5].value,
            friday: formData[6].value,
            saturday: formData[7].value,
            sunday: formData[8].value,
        };

        // console.log(id, data);

        $.ajax({
            url: '/schedule_update',
            method: 'post',
            data: {
                id: id,
                data: data},
            success: function (result) {
                if (result.success) {
                    refresh();
                    cleaner();
                    console.log('ajax call made');
                    $('#modalEdit').modal('hide');
                    swal(
                        'Updated!',
                        'Successfull Update!',
                        'success'
                    );
                    console.log('success update');
                }
                else{
                console.log('failed');
                }
            }
        });
    });

    //delete data
    $(document).on('click', '.delete', function (e) {
        e.preventDefault();
        var id = $(this).attr('schedule_id');
        console.log(id);

        swal({
            title: 'Are you sure?',
            text: "you want to remove this record?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                token();

                $.ajax({
                    url: '/schedule_delete',
                    method: 'post',
                    data: {
                        id: id
                    },
                    success: function (result) {
                        if (result.success) {
                            refresh();
                            cleaner();
                            swal(
                                'Deleted!',
                                'Successfull Deleted!',
                                'success'
                            );
                        }
                    }
                });
            }
        });

    });

    
});
</script>
@endsection