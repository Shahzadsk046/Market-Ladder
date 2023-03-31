@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid bg-secondary bg-opacity-25">
        <ol class="breadcrumb mb-4 py-3">
            <li class="breadcrumb-item">Blocks Module</li>
            <li class="breadcrumb-item">Areas</li>
            <li class="breadcrumb-item text-muted">Create</li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-12">
                        <a href="/new-area"
                           class="text-decoration-none"><button class="btn btns bg-green"><i class="fas fa-plus"></i> &nbsp;
                                New Area</button></a>
                    </div>
                </div>
                <div class="row my-3 py-2">
                    {{-- <div class="col-12">
                        <form class="d-none d-md-inline-block form-inline ms-auto me-0 my-2 my-md-0">
                            <div class="input-group">
                                <input class="form-control text-muted"
                                       type="text"
                                       placeholder="Search"
                                       aria-label="Search"
                                       aria-describedby="btnNavbarSearch" />
                            </div>
                        </form>
                        <button class="btn btns bg-green"><i class="fa-solid fa-filter"></i> Filter</button>
                        <button class="btn btns bg-gray">Clear</button>
                    </div> --}}
                </div>
                <div class="row my-3 py-2">
                    <div class="col-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 bg-white">
                                    <form action="/block"
                                          method="post">
                                        <div class="form-row my-3">
                                            <div class="mb-3">
                                                <label for="blockname"
                                                       class="form-label">Name <span style="color:red">*</span></label>
                                                <div id="emailHelp"
                                                     class="form-text mb-3">Specify a short easily identifiable name.</div>
                                                <input type="text"
                                                       class="form-control"
                                                       name="blockname"
                                                       id="blockname">
                                            </div>
                                            <div class="mb-3">
                                                <label for="blockslug"
                                                       class="form-label">Slug <span style="color:red">*</span></label>
                                                <div id="emailHelp"
                                                     class="form-text mb-3">The slug will be used when display blocks with the plugin.</div>
                                                <input type="text"
                                                       class="form-control"
                                                       name="blockslug"
                                                       id="blockslug">
                                            </div>
                                            <div class="mb-3">
                                                <label for="blockdesc"
                                                       class="form-label">Description</label>
                                                <div id="emailHelp"
                                                     class="form-text mb-3">Briefly describe the area and how it will be used.</div>
                                                <textarea class="form-control"
                                                       name="blockdesc"
                                                       id="blockdesc"
                                                       style="height: 14vw; resize:none"
                                                       >
                                                </textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-12 my-3 py-3 bg-white d-flex justify-content-between">
                                    <div>
                                        <button class="btn btns bg-green" id="save" onclick="saveBlock()"><i class="fa-solid fa-floppy-disk"></i> &nbsp;Save</button>
                                        <button class="btn btns bg-green" id="create" onclick="createBlock()"><i class="fa-solid fa-floppy-disk"></i> &nbsp;Save & Create</button>
                                    </div>
                                    <div>
                                        <button class="btn btns bg-gray" id="cancel">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
