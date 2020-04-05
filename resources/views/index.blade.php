@extends('layouts.app')

@section('content')

<div class="card" style="margin-top: 40px;">
    <div class="card-header">
        <div class="row">
        <div class="col-10">Folder tree</div>
        <div class="col-2 text-right"><a href="#export">Export</a></div>
        </div>
    </div>
    <div class="card-body">
        <div>
        <input
            type="file"
            id="selectFiles"
            name="fileList"
            webkitdirectory
            multiple
        />
        </div>
        <div>
        <ul id="uploads"></ul>
        </div>
    </div>
</div>


@endsection
