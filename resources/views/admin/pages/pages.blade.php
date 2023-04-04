@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid bg-secondary bg-opacity-25">
        <ol class="breadcrumb mb-4 py-3">
            <li class="breadcrumb-item">Pages Module</li>
            <li class="breadcrumb-item text-muted">Pages</li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-12">

                        {{-- {{$pages = Page::with('default_page')->get();

                        foreach ($pages as $page) {
                        echo $page->title;
                        foreach ($page->default_page as $def_page) {
                        echo $def_page->id;
                        }
                        }
                        }} --}}
                    </div>
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
                        <button class="btn btns bg-lightblue"><i class="fas fa-table"></i> &nbsp; Table View</button>
                        {{-- Have Some Conditions --}}
                        {{-- <button class="btn btns bg-green"><i class="fas fa-table"></i> &nbsp; Table View</button> --}}
                        {{-- Have Some Conditions --}}
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
                        <table id="example"
                               class="bg-white">
                            <thead>
                                <tr>
                                    <th><input type="checkbox"
                                               name="all_data"
                                               id="all_data"></th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($defaultpage as $page)
                                    <tr>
                                        <td>kj{{ $page['id'] }}</td>
                                        <td>{{ $page['title'] }}</td>
                                        <td>{{ $page['slug'] }}</td>
                                        <td>{{ $page['status'] }}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td><input type="checkbox"
                                               name="all_data"
                                               id="all_data"></td>
                                    <td>Home <i class="fas fa-home text-success"></i> <br> <span class="text-muted">Link
                                            (/)</span></td>
                                    <td>Default Page Type</td>
                                    <td><button class="btn btns w-fx bg-red"><i class="fas fa-pen"></i> Edit</button>
                                        <button class="btn btns w-fx bg-lightblue"><i class="fas fa-eye"></i>
                                            View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"
                                               name="all_data"
                                               id="all_data"></td>
                                    <td>404 <i class="fa-solid fa-link-simple-slash"></i> <br> <span class="text-muted">Link
                                            (/404)</span></td>
                                    <td>Default Page Type</td>
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
