@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid bg-secondary bg-opacity-25">
        <ol class="breadcrumb mb-4 py-3">
            <li class="breadcrumb-item">Navigation Module</li>
            <li class="breadcrumb-item text-muted">Menus</li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-12">
                        <a href="navigations/edit/edit-footer-nav"><button class="btn btns bg-green"><i class="fas fa-plus"></i> &nbsp; New Area</button></a>
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
                                       href="#">Trash</a>
                                </li>
                        </div>
                    </nav>
                </div>
                <div class="row my-3 py-2">
                    <div class="col-12">
                        <table id="example"
                               class="table bg-white">
                            <thead>
                                <tr>
                                    <th><input type="checkbox"
                                               name="all_data"
                                               id="all_data"></th>
                                    <th style="width: 15%">Name</th>
                                    <th style="width: 15%">Slug</th>
                                    <th style="width: 25%">Description</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width: 20px"><input type="checkbox"
                                               name="all_data"
                                               id="all_data"></td>
                                    <td>Footer Navigation</td>
                                    <td>footer_nav</td>
                                    <td></td>
                                    <td><a href="navigations/edit/edit-footer-nav"><button class="btn btns w-fx bg-red"><i class="fas fa-pen"></i> Edit</button></a>
                                        <a href="navigations/edit/edit-footer-nav"><button class="btn btns w-fx bg-lightblue"><i class="fas fa-link"></i>
                                            Links</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 20px"><input type="checkbox"
                                               name="all_data"
                                               id="all_data"></td>
                                    <td>Footer Navigation</td>
                                    <td>footer_nav</td>
                                    <td></td>
                                    <td><a href="navigations/edit/edit-footer-nav"><button class="btn btns w-fx bg-red"><i class="fas fa-pen"></i> Edit</button></a>
                                        <a href="navigations/edit/edit-footer-nav"><button class="btn btns w-fx bg-lightblue"><i class="fas fa-link"></i>
                                            Links</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><button class="btn btns bg-pink"
                                                style="width: 100px"><i class="fas fa-trash"></i> Delete</button></td>
                                </tr>
                                {{-- <tr>
                                    <td colspan="2" class="bg-primary"><button class="btn btns bg-pink"
                                                ><i class="fas fa-trash"></i> Delete</button></td>

                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
