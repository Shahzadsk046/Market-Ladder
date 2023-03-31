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
                        <button class="btn btns bg-green"><i class="fas fa-plus"></i> &nbsp; New Area</button>
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
                               class="table bg-white">
                            <thead>
                                <tr>
                                    <th><input type="checkbox"
                                               name="all_data"
                                               id="all_data"></th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th>Edit</th>
                                    <th>Blocks</th>
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
                                    <td><button class="btn btns bg-red"
                                                style="width: 100px"><i class="fas fa-pen"></i> Edit</button></td>
                                    <td><button class="btn btns bg-lightblue"
                                                style="width: 100px"><i class="fas fa-link"></i>
                                            Links</button></td>
                                </tr>
                                <tr>
                                    <td style="width: 20px"><input type="checkbox"
                                               name="all_data"
                                               id="all_data"></td>
                                    <td>Footer Navigation</td>
                                    <td>footer_nav</td>
                                    <td></td>
                                    <td><button class="btn btns bg-red"
                                                style="width: 100px"><i class="fas fa-pen"></i> Edit</button></td>
                                    <td><button class="btn btns bg-lightblue"
                                                style="width: 100px"><i class="fas fa-link"></i>
                                            Links</button></td>
                                </tr>
                                <tr>
                                    <td colspan="100%">

                                        <button class="btn btns bg-pink"
                                                style="width: 100px"><i class="fas fa-trash"></i> Delete</button>
                                    </td>
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
