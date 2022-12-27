@extends('layouts.master')

@section('content')
<style>
.button {
	background      : #005f95;
	border          : none;
	border-radius   : 3px;
	color           : white;
	display         : inline-block;
	font-size       : 19px;
	font-weight     : bolder;
	letter-spacing  : 0.02em;
	padding         : 10px 20px;
	text-align      : center;
	text-shadow     : 0px 1px 2px rgba(0, 0, 0, 0.75);
	text-decoration : none;
	text-transform  : uppercase;
	transition      : all 0.2s;
}

.btn:hover {
	background : #4499c9;
}

.btn:active {
	background : #49ADE5;
}

input[type="file"] {
	display : none;
}

#file-drag {
	border        : 2px dashed #555;
	border-radius : 7px;
	color         : #555;
	cursor        : pointer;
	display       : block;
	font-weight   : bold;
	margin        : 1em 0;
	padding       : 3em;
	text-align    : center;
	transition    : background 0.3s, color 0.3s;
}

#file-drag:hover {
	background : #ddd;
}

#file-drag:hover,
#file-drag.hover {
	border-color : #3070A5;
	border-style : solid;
	box-shadow   : inset 0 3px 4px #888;
	color        : #3070A5;
}

#file-progress {
	display : none;
	margin  : 1em auto;
	width   : 100%;
}

#file-upload-btn {
	margin : auto;
}

#file-upload-btn:hover {
	background : #4499c9;
}

#file-upload-form {
	margin : auto;	
	width  : 40%;
}

progress {
	appearance    : none;
	background    : #eee;
	border        : none;
	border-radius : 3px;
	box-shadow    : 0 2px 5px rgba(0, 0, 0, 0.25) inset;
	height        : 30px;
}

progress[value]::-webkit-progress-value {
	background :
		-webkit-linear-gradient(-45deg, 
			transparent 33%,
			rgba(0, 0, 0, .2) 33%, 
			rgba(0,0, 0, .2) 66%,
			transparent 66%),
		-webkit-linear-gradient(right,
			#005f95,
			#07294d);
	background :
		linear-gradient(-45deg, 
			transparent 33%,
			rgba(0, 0, 0, .2) 33%, 
			rgba(0,0, 0, .2) 66%,
			transparent 66%),
		linear-gradient(right,
			#005f95,
			#07294d);
	background-size : 60px 30px, 100% 100%, 100% 100%;
	border-radius   : 3px;
}

progress[value]::-moz-progress-bar {
	background :
	-moz-linear-gradient(-45deg, 
		transparent 33%,
		rgba(0, 0, 0, .2) 33%, 
		rgba(0,0, 0, .2) 66%,
		transparent 66%),
	-moz-linear-gradient(right,
		#005f95,
		#07294d);
	background :
		linear-gradient(-45deg, 
			transparent 33%,
			rgba(0, 0, 0, .2) 33%, 
			rgba(0,0, 0, .2) 66%,
			transparent 66%),
		linear-gradient(right,
			#005f95,
			#07294d);
	background-size : 60px 30px, 100% 100%, 100% 100%;
	border-radius   : 3px;
}

ul {
	list-style-type : none;
	margin          : 0;
	padding         : 0;
}    
</style>
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
    <div class="container position-relative">
        <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
            <h2>Upload Completed PDF file</h2>
            <p>Please upload completed docusign pdf file here...</p>
        </div>
        </div>
    </div>
    </div>
    <nav>
    <div class="container">
        <ol>
        <li><a href="{{route('aspect.home')}}">Home</a></li>
        <li>Candidates</li>
        <li>Driving Test Lot</li>
        <li>Upload PDF</li>
        </ol>
    </div>
    </nav>
</div>

<section>
    <div class="form-group col-lg-12">
        <!-- <h3><b>Choose PDF file</b></h3>
        <input type="file" class="form-control pdf_upload" name="pdf_upload" accept="application/pdf" id="upload-pdf"/> -->
        
        <form id="file-upload-form" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <input id="file-upload" type="file" name="fileUpload" accept="application/pdf"/>
            <label for="file-upload" id="file-drag">
                Select a file to upload
                <br />OR
                <br />Drag a file into this box
                
                <br /><br /><span id="file-upload-btn" class="button">Add a file</span>
            </label>
            
            <progress id="file-progress" value="0">
                <span>0</span>%
            </progress>
            
            <output for="file-upload" id="messages"></output>
        </form>
    </div>
    <div class="col-lg-12" style="text-align:center;">
        <button id="complete_file_upload" class="btn btn-danger btn-md">Upload PDF file <i class="fas fa-upload"></i></button>
        <input id="doc_pdf_id" value="{{$doc_id}}" hidden>
    </div> 
</section>

<script>
(function() {
	function Init() {
		var fileSelect = document.getElementById('file-upload'),
			fileDrag = document.getElementById('file-drag'),
			submitButton = document.getElementById('submit-button');

		fileSelect.addEventListener('change', fileSelectHandler, false);

		// Is XHR2 available?
		var xhr = new XMLHttpRequest();
		if (xhr.upload) 
		{
			// File Drop
			fileDrag.addEventListener('dragover', fileDragHover, false);
			fileDrag.addEventListener('dragleave', fileDragHover, false);
			fileDrag.addEventListener('drop', fileSelectHandler, false);
		}
	}

	function fileDragHover(e) {
		var fileDrag = document.getElementById('file-drag');

		e.stopPropagation();
		e.preventDefault();
		
		fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
	}

	function fileSelectHandler(e) {
		// Fetch FileList object
		var files = e.target.files || e.dataTransfer.files;

		// Cancel event and hover styling
		fileDragHover(e);

		// Process all File objects
		for (var i = 0, f; f = files[i]; i++) {
			parseFile(f);
			// uploadFile(f);
		}
	}

	function output(msg) {
		var m = document.getElementById('messages');
		m.innerHTML = msg;
	}

	function parseFile(file) {
		output(
			'<ul>'
			+	'<li>Name: <strong>' + encodeURI(file.name) + '</strong></li>'
			+	'<li>Type: <strong>' + file.type + '</strong></li>'
			+	'<li>Size: <strong>' + (file.size / (1024 * 1024)).toFixed(2) + ' MB</strong></li>'
			+ '</ul>'
		);
	}

	function setProgressMaxValue(e) {
		var pBar = document.getElementById('file-progress');

		if (e.lengthComputable) {
			pBar.max = e.total;
		}
	}

	function updateFileProgress(e) {
		var pBar = document.getElementById('file-progress');

		if (e.lengthComputable) {
			pBar.value = e.loaded;
		}
	}

	function uploadFile(file) {

		var xhr = new XMLHttpRequest(),
			fileInput = document.getElementById('class-roster-file'),
			pBar = document.getElementById('file-progress'),
			fileSizeLimit = 1024;	// In MB
		if (xhr.upload) {
			// Check if file is less than x MB
			if (file.size <= fileSizeLimit * 1024 * 1024) {
				// Progress bar
				pBar.style.display = 'inline';
				xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
				xhr.upload.addEventListener('progress', updateFileProgress, false);

				// File received / failed
				xhr.onreadystatechange = function(e) {
					if (xhr.readyState == 4) {
						// Everything is good!
						
						// progress.className = (xhr.status == 200 ? "success" : "failure");
						// document.location.reload(true);
					}
				};

				// Start upload
				xhr.open('POST', document.getElementById('file-upload-form').action, true);
				xhr.setRequestHeader('X-File-Name', file.name);
				xhr.setRequestHeader('X-File-Size', file.size);
				xhr.setRequestHeader('Content-Type', 'multipart/form-data');
				xhr.send(file);
			} else {
				output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
			}
		}
	}

	// Check for the various File API support.
	if (window.File && window.FileList && window.FileReader) {
		Init();
	} else {
		document.getElementById('file-drag').style.display = 'none';
	}
})();

function token() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
}

$('#complete_file_upload').on('click', function (e) {
    e.preventDefault();
    
    var pdf_file = $("#file-upload")[0].files[0];
    var doc_id = $("#doc_pdf_id").val();

    console.log(doc_id);
    console.log(pdf_file);

    var pdf_data = new FormData();
    pdf_data.append('id', doc_id);
    pdf_data.append('pdf', pdf_file);
    
    
    // Object.keys(image_files).forEach(key=> {
    //     doc_data.append('images[]', image_files[key]);
    // })

    token();
    
    $.ajax({
        url: "{{ route('hiring.upload_com_pdf') }}",
        type: 'POST',
        dataType: 'JSON',
        data: pdf_data,
        processData: false,
        contentType: false,
        cache:false,
        success: function (result) {
            if (result.success) {
                // refresh();
                swal(
                    'Good job!',
                    'Successfull Uploaded!',
                    'success'
                );
            }
        },
        error: function(err)
        {
            console.log(err);
        }
    });
    
});

</script>

@endsection