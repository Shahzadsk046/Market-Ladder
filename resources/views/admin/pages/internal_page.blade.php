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
                        <ul class="nav nav-tabs"
                            role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active"
                                   data-bs-toggle="tab"
                                   href="#general">General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                   data-bs-toggle="tab"
                                   href="#seo">SEO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                   data-bs-toggle="tab"
                                   href="#options">Options</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="general"
                                 class="tab-pane active">
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
                                                <div class="form-text mb-3">The slug is used in building the page's URL.
                                                </div>
                                                <input type="text"
                                                       class="form-control"
                                                       name="defaultPageSlug"
                                                       id="defaultPageSlug">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="seo"
                                 class="tab-pane fade">
                                <div class="col-12 bg-white p-3">
                                    <form action="/defaultPage"
                                          method="post">
                                        <div class="form-row my-3">
                                            <div class="mb-3">
                                                <label for="defaultPageMetaTitle"
                                                       class="form-label">Meta Title</label>
                                                <div class="form-text mb-3">Specify the SEO title.
                                                </div>
                                                <input type="text"
                                                       class="form-control"
                                                       name="defaultPageMetaTitle"
                                                       id="defaultPageMetaTitle">
                                            </div>
                                            <div class="mb-3">
                                                <label for="defaultPageMetaDesc"
                                                       class="form-label">Meta Description</label>
                                                <div class="form-text mb-3">Specify the SEO description.
                                                </div>
                                                <input type="text"
                                                       class="form-control"
                                                       name="defaultPageMetaDesc"
                                                       id="defaultPageMetaDesc">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="options"
                                 class="tab-pane fade">
                                <div class="col-12 bg-white p-3">
                                    <form action="/defaultPage"
                                          method="post">
                                        <div class="form-row my-3">
                                            <div class="mb-3">
                                                <label for="optionEnabled"
                                                       class="form-label">Is this page enabled?</label>
                                                <div class="form-text mb-3">If disabled, you can still access a secure
                                                    preview
                                                    link in the control panel.</div>
                                                <div class="form-check form-switch ms-4">
                                                    <input class="form-check-input border-success bg-green fs-4"
                                                           type="checkbox"
                                                           role="switch"
                                                           name="optionEnabled"
                                                           id="optionEnabled"
                                                           checked>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="optionHomepage"
                                                       class="form-label">Is this the home page?</label>
                                                <div class="form-text mb-3">The home page is the default landing page for
                                                    your
                                                    website.</div>
                                                <div class="form-check form-switch ms-4">
                                                    <input class="form-check-input border-success bg-red fs-4"
                                                           type="checkbox"
                                                           role="switch"
                                                           name="optionHomepage"
                                                           id="optionHomepage">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="optionNavigation"
                                                       class="form-label">Display this page in navigation?</label>
                                                <div class="form-text mb-3">Disable to hide this page from page based
                                                    navigation <strong>structure</strong>.</div>
                                                <div class="form-check form-switch ms-4">
                                                    <input class="form-check-input border-success bg-green fs-4"
                                                           type="checkbox"
                                                           role="switch"
                                                           name="optionNavigation"
                                                           id="optionNavigation"
                                                           checked>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="optionHidden"
                                                       class="form-label">Require an exact URI match?</label>
                                                <div class="form-text mb-3">Disable to allow custom parameters following
                                                    the
                                                    URI for this page.</div>
                                                <div class="form-check form-switch ms-4">
                                                    <input class="form-check-input border-success bg-green fs-4"
                                                           type="checkbox"
                                                           role="switch"
                                                           name="optionHidden"
                                                           id="optionHidden"
                                                           checked>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="optionAllowedRules"
                                                       class="form-label">Allowed Rules</label>
                                                <div class="form-text mb-3">Specify which user roles can access this page.
                                                </div>
                                                <input type="text"
                                                       class="form-control"
                                                       name="optionAllowedRules"
                                                       id="optionAllowedRules">
                                                <small class="text-muted"
                                                       style="font-size:12px">Separate values with a comma or by pressing
                                                    'Enter'.</small>
                                            </div>
                                            <div class="mb-3">
                                                <label for="optionThemeLayout"
                                                       class="form-label">Theme Layout</label>
                                                <div class="form-text mb-3">Specify the theme layout to wrap the
                                                    <strong>page
                                                        layout</strong> with.
                                                </div>
                                                <select class="form-control"
                                                        name="optionThemeLayout"
                                                        id="optionThemeLayout">
                                                    <option value="choose">Choose an option...</option>
                                                    <option value="light">Light</option>
                                                    <option value="dark">Dark</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="optionParentPage"
                                                       class="form-label">Parent Page</label>
                                                <div class="form-text mb-3">Specify a parent page to organize it within the
                                                    parent's URI structure.
                                                </div>
                                                <button type="button"
                                                        class="btn btns bg-green"
                                                        name="optionParentPage"
                                                        id="optionParentPage"><i class="fas fa-search"></i>
                                                    Search</button>
                                                <br><br>
                                                <small class="text-muted">No results.</small>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 mb-1 p-3 bg-white">
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
                                            <h6 class="fw-bolder">Internal Sections</h6>
                                            <button class="btn btns bg-green"
                                                    id="save"
                                                    onclick="addBlock()">Add Block</button>
                                        </div>
                                        <div class="mb-3 pb-5">
                                            <h6 class="fw-bolder">Banner</h6>
                                            <div>
                                                <label>
                                                    <input type="radio"
                                                           name="banner">
                                                    None</label>
                                            </div>
                                            <div>
                                                <label>
                                                    <input type="radio"
                                                           name="banner">
                                                    Balloon
                                                    Banner</label>
                                            </div>
                                            <div>
                                                <label>
                                                    <input type="radio"
                                                           name="banner">
                                                    Green Banner </label>
                                            </div>
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
