@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid bg-secondary bg-opacity-25">
        <ol class="breadcrumb mb-4 py-3">
            <li class="breadcrumb-item">Navigations Module</li>
            <li class="breadcrumb-item">Menus</li>
            <li class="breadcrumb-item text-muted">Edit</li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row my-3 py-2">
                    <div class="col-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 bg-white">
                                    <form action="/block"
                                          method="post">
                                        <div class="form-row my-3">
                                            <div class="mb-3">
                                                <label for="navName"
                                                       class="form-label">Name <span style="color:red">*</span></label>
                                                <div id="emailHelp"
                                                     class="form-text mb-3">Specify a short descriptive name for this menu.</div>
                                                <input type="text"
                                                       class="form-control"
                                                       name="navName"
                                                       id="navName" value="Footer Navigation">
                                            </div>
                                            <div class="mb-3">
                                                <label for="navSlug"
                                                       class="form-label">Slug <span style="color:red">*</span></label>
                                                <div id="emailHelp"
                                                     class="form-text mb-3">The slug is used when displaying the menu.</div>
                                                <input type="text"
                                                       class="form-control"
                                                       name="navSlug"
                                                       id="navSlug" value="footer_nav">
                                            </div>
                                            <div class="mb-3">
                                                <label for="navDesc"
                                                       class="form-label">Description</label>
                                                <div id="emailHelp"
                                                     class="form-text mb-3">Briefly describe this navigation menu.</div>
                                                <textarea class="form-control"
                                                       name="navDesc"
                                                       id="navDesc"
                                                       style="height: 14vw; resize:none"
                                                       >
                                                </textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-12 my-3 py-3 bg-white d-flex justify-content-between">
                                    <div>
                                        <button class="btn btns bg-green" id="save" onclick="updateBlock()"><i class="fa-solid fa-floppy-disk"></i> &nbsp;Update</button>
                                        <button class="btn btns bg-green" id="create" onclick="saveBlock()"><i class="fa-solid fa-floppy-disk"></i> &nbsp;Save & Exit</button>
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
