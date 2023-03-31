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
                        <button class="btn btns bg-green"><i class="fas fa-plus"></i> &nbsp; New Page</button>
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
