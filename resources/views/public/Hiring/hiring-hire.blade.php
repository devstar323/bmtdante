@extends('layouts.master')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
    <div class="container position-relative">
        <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
            <h2>Candidates List for BMT</h2>
            <p>Here, the hiring manager can make decision whether to agree or disagree...</p>
        </div>
        </div>
    </div>
    </div>
    <nav>
    <div class="container">
        <ol>
        <li><a href="{{route('aspect.home')}}">Home</a></li>
        <li>Candidates</li> 
        <li>Hire</li>
        </ol>
    </div>
    </nav>
</div><!-- End Breadcrumbs -->

<div class="panel panel-default" style="margin-top:5rem;margin-bottom:5rem;width: 90%;text-align: center;margin-left: auto;margin-right: auto;">
    <div class="panel-heading" style="background-color:#f3f6fc;color:#0d69fe;">
        <h3 class="panel-title pull-left" style="font-weight:bold;">
            Candidates Docusign List
        </h3>
        <div class="clearfix"></div>
    </div>
    <div class="table-responsive" style="margin-top:1rem;">
        <table id="docusign-table" class="table" style="width:100% !important">
            <thead>
                <td>Maker</td>
                <td>Name</td>
                <td>Other Name</td>
                <td>Email</td>
                <td>Address</td>
                <td>Birthday</td>
                <td>Telephone</td>
                <td>Cellphone</td>
                <td>Created Date</td>
                <td>License Show</td>
                <td>License Download</td>
                <td>PDF Show</td>
                <td>PDF Download</td>
                <td style="width:100px;">Actions</td>
            </thead>
        </table>
    </div>

</div>

<script>
var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
jQuery(function($) {
    $('#docusign-table').DataTable({
        processing: true,
        serverside: true,
        ajax: '{{ route('hiring.docusign_get') }}',
        columns: [{
                data: 'maker_name'
            },
            {
                data: 'doc_name' 
            },
            {
                data: 'doc_other_name'
            },
            {
                data: 'doc_email'
            },
            {
                data: 'doc_address'
            },
            {
                data: 'doc_birth'
            },
            {
                data: 'doc_tele'
            },
            {
                data: 'doc_cell'
            },
            {
                data: 'doc_date'
            },
            {
                data: 'license_show',
                orderable: false,
                searchable: false
            },
            {
                data: 'license_download',
                orderable: false,
                searchable: false
            },
            {
                data: 'pdf_show',
                orderable: false,
                searchable: false
            },
            {
                data: 'pdf_download',
                orderable: false,
                searchable: false
            },
            {
                data: 'action',
                orderable: false,
                searchable: false
            }
        ]
    });

    function refresh() {
        var table = $('#docusign-table').DataTable();
        table.ajax.reload(null, false);
        console.log('refresh success');
    }

    function token() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    }

    //delete data
    $(document).on('click', '.delete', function (e) {
        e.preventDefault();
        var id = $(this).attr('docu_id');
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
                    url: '/docusign_delete',
                    method: 'post',
                    data: {
                        id: id
                    },
                    success: function (result) {
                        if (result.success) {
                            refresh();
                            // cleaner();
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