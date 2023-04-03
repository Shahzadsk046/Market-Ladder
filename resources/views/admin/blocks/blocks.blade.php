@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid bg-secondary bg-opacity-25">
        <ol class="breadcrumb mb-4 py-3">
            <li class="breadcrumb-item">Blocks Module</li>
            <li class="breadcrumb-item text-muted">Areas</li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-12">
                        <a href="/blocks/new-area" class="text-decoration-none"><button class="btn btns bg-green"><i class="fas fa-plus"></i> &nbsp; New Area</button></a>
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
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox"
                                               name="all_data"
                                               id="all_data"></td>
                                    <td>Balloon Banner</td>
                                    <td>balloon-banner</td>
                                    <td>This banner is used in end of all internal Pages, so changes made here will be
                                        reflected on every internal page.</td>
                                    <td><button class="btn btns w-fx bg-red"><i class="fas fa-pen"></i> Edit</button>
                                        <button class="btn btns w-fx bg-purple"><i class="fas fa-wand-magic-sparkles"></i>
                                            Blocks</button>
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