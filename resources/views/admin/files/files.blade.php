@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid bg-secondary bg-opacity-25">
        <ol class="breadcrumb mb-4 py-3">
            <li class="breadcrumb-item">Files Module</li>
            <li class="breadcrumb-item text-muted">Files</li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-12">
                         <!-- Button trigger modal -->
                         <button type="button" class="btn btns bg-green" data-bs-toggle="modal" data-bs-target="#uploadModal">
                            <i class="fas fa-upload"></i> &nbsp; Upload
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="uploadModalLabel">What folder would you like to upload to?</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                    <ul class="navbar-nav me-auto m-3 mb-lg-0">
                                        <li class="nav-item">
                                          <a class="nav-link" aria-current="page" href="/files/images">
                                            <h6 class="m-1 p-0">Images</h6>
                                            <p class="text-muted">A folder for images</p>
                                          </a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" aria-current="page" href="/files/documents">
                                            <h6 class="m-1 p-0">Documents</h6>
                                            <p class="text-muted">A folder for documents.</p>
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
                    <nav class="navbar navbar-expand-sm bg-white">
                        <div class="container-fluid">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active"
                                       aria-current="page"
                                       href="#">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                       href="#">Newest</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                       href="#">Trash</a>
                                </li>
                        </div>
                    </nav>
                </div>
                <div class="row my-3 py-2">
                    <div class="col-12">
                        <table id="example"
                               class="bg-white">
                            <thead>
                                <tr>
                                    <th><input type="checkbox"
                                               name="all_data"
                                               id="all_data"></th>
                                    <th>Preview</th>
                                    <th>Name</th>
                                    <th>Size</th>
                                    <th>MIME Type</th>
                                    <th>Folder</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox"
                                               name="all_data"
                                               id="all_data"></td>
                                    <td><img src="images/logo.png"
                                             alt="logo"></td>
                                    <td>filename</td>
                                    <td>file size</td>
                                    <td>file type</td>
                                    <td>images</td>
                                    <td><button class="btn btns w-fx bg-red"><i class="fas fa-pen"></i> Edit</button>
                                        <button class="btn btns w-fx bg-lightblue"><i class="fas fa-eye"></i>
                                            View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><button class="btn btns bg-pink"
                                                style="width: 100px"><i class="fas fa-trash"></i> Delete</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
