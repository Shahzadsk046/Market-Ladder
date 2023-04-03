@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid bg-secondary bg-opacity-25">
        <ol class="breadcrumb mb-4 py-3">
            <li class="breadcrumb-item">Pages Module</li>
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item text-muted">Create</li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-12">
                        {{-- <button class="btn btns bg-green"><i class="fas fa-plus"></i> &nbsp; New Page</button> --}}
                        <!-- Button trigger modal -->
                        <button type="button"
                                class="btn btns bg-green"
                                data-bs-toggle="modal"
                                data-bs-target="#newPageModal">
                            <i class="fas fa-plus"></i> &nbsp; New Page
                        </button>

                        <!-- Modal -->
                        <div class="modal fade"
                             id="newPageModal"
                             tabindex="-1"
                             aria-labelledby="newPageModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5"
                                            id="newPageModalLabel">What type of page would you like to create?</h1>
                                        <button type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="d-flex"
                                              role="search">
                                            <input class="form-control me-2"
                                                   type="search"
                                                   placeholder="Search"
                                                   aria-label="Search">
                                        </form>
                                        <ul class="navbar-nav me-auto m-3 mb-lg-0">
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                   aria-current="page"
                                                   href="/pages/default_page">
                                                    <h6 class="m-1 p-0">Default Page Type</h6>
                                                    <p class="text-muted">Use this type for Only Homepage.</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                   aria-current="page"
                                                   href="/pages/internal_page">
                                                    <h6 class="m-1 p-0">Internal Page Type</h6>
                                                    <p class="text-muted">Use this type for pages except Homepage.</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                   aria-current="page"
                                                   href="/pages/static_page">
                                                    <h6 class="m-1 p-0">Static Page Type</h6>
                                                    <p class="text-muted">Kindly do not use this type its Totally Static.
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    {{-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div> --}}
                                </div>
                            </div>
                        </div>
                        {{-- <button class="btn btns bg-lightblue"><i class="fas fa-table"></i> &nbsp; Table View</button> --}}
                        {{-- Have Some Conditions --}}
                        {{-- <button class="btn btns bg-green"><i class="fas fa-table"></i> &nbsp; Table View</button> --}}
                        {{-- Have Some Conditions --}}
                    </div>
                </div>
                <div class="row my-3 py-2">
                    <div class="col-12">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active"
                                   aria-current="page"
                                   href="#general">General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="#seo">SEO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="#options">Options</a>
                            </li>
                        </ul>
                        <div id="general">
                            <div class="col-12 bg-white p-3">
                                <form action="/defaultPage"
                                      method="post">
                                    <div class="form-row my-3">
                                        <div class="mb-3">
                                            <label for="defaultPageTitle"
                                                   class="form-label">Title <span style="color:red">*</span></label>
                                            <div class="form-text mb-3">Specify a short description name for this page.
                                            </div>
                                            <input type="text"
                                                   class="form-control"
                                                   name="defaultPageTitle"
                                                   id="defaultPageTitle">
                                        </div>
                                        <div class="mb-3">
                                            <label for="defaultPageSlug"
                                                   class="form-label">Slug <span style="color:red">*</span></label>
                                            <div class="form-text mb-3">The slug is used in building the page's URL.</div>
                                            <input type="text"
                                                   class="form-control"
                                                   name="defaultPageSlug"
                                                   id="defaultPageSlug">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 mt-3 mb-1 p-3 bg-white">
                            {{-- <h6 class="fw-bolder">Header Visibility</h6>
                            <p class="text-muted">Display Header ?</p> --}}
                            <label for="displayHeader"
                                   class="form-label">Header Visibility</label>
                            <div class="form-text mb-3">Display Header ?</div>
                            <div class="form-check form-switch ms-4">
                                <input class="form-check-input border-success bg-green fs-4"
                                       type="checkbox"
                                       role="switch"
                                       name="displayHeader"
                                       id="displayHeader"
                                       checked>
                            </div>
                            {{-- <hr /> --}}
                            {{-- <div class="d-flex justify-content-between">
                                <div>
                                    <button class="btn btns bg-green"
                                            id="save"
                                            onclick="saveBlock()"><i class="fa-solid fa-floppy-disk"></i>
                                        &nbsp;Save</button>
                                    <button class="btn btns bg-green"
                                            id="create"
                                            onclick="createBlock()"><i class="fa-solid fa-floppy-disk"></i> &nbsp;Save &
                                        Create</button>
                                </div>
                                <div>
                                    <button class="btn btns bg-gray"
                                            id="cancel">Cancel</button>
                                </div>
                            </div> --}}
                        {{-- </div>
                        <div class="col-12 px-3 bg-white"> --}}
                            <h6 class="fw-bolder pt-3">Header Background Image</h6>
                            <div class="bg-image-btn">
                                <span class="btn bg-lightblue btn-file">
                                    Select File<input type="file">
                                </span>
                                <button class="btn btns bg-green">Upload</button>
                                <p class="py-3">No File Selected</p>
                                <form action="/block"
                                      method="post">
                                    <div class="form-row my-3">
                                        <div class="mb-3">
                                            <label for="headerHeading"
                                                   class="form-label">Header Heading Text</label>
                                            <input type="text"
                                                   class="form-control"
                                                   name="headerHeading"
                                                   id="headerHeading">
                                        </div>
                                        <div class="mb-3">
                                            <label for="headerPara"
                                                   class="form-label">Header Paragraph Text</label>
                                            <textarea class="form-control"
                                                      name="headerPara"
                                                      id="headerPara"
                                                      style="height: 14vw; resize:none">
                                      </textarea>
                                        </div>
                                        <div class="mb-3 pb-3">
                                            <h6 class="fw-bolder">Misc Sections</h6>
                                            <button class="btn btns bg-green"
                                                    id="save"
                                                    onclick="addBlock()">Add Block</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 my-3 p-3 bg-white d-flex justify-content-between">
                            <div>
                                <button class="btn btns bg-green"
                                        id="save"
                                        onclick="saveBlock()"><i class="fa-solid fa-floppy-disk"></i> &nbsp;Save</button>
                                <button class="btn btns bg-green"
                                        id="create"
                                        onclick="createBlock()"><i class="fa-solid fa-floppy-disk"></i> &nbsp;Save &
                                    Create</button>
                            </div>
                            <div>
                                <button class="btn btns bg-gray"
                                        id="cancel">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
