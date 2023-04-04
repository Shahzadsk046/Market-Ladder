@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid bg-secondary bg-opacity-25">
        <ol class="breadcrumb mb-4 py-3">
            <li class="breadcrumb-item">Blocks Module</li>
            <li class="breadcrumb-item">Blocks</li>
            <li class="breadcrumb-item text-muted">Balloon Banner</li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-12">
                        <a href="/blocks/new-area"
                           class="text-decoration-none"><button class="btn btns bg-green"><i class="fas fa-plus"></i> &nbsp;
                                New Area</button></a>
                    </div>
                </div>
                <div class="row my-3 py-2">
                    <div class="col-12">
                        <form class="d-none d-md-inline-block form-inline ms-auto me-0 my-2 my-md-0">
                            <div class="input-group">
                                <input class="form-control me-3 text-muted"
                                       type="text"
                                       placeholder="Title"
                                       aria-label="Title"
                                       aria-describedby="btnTitle" />
                                {{-- </div>
                            <div class="input-group"> --}}
                                <input class="form-control text-muted"
                                       type="text"
                                       placeholder="Extension"
                                       aria-label="Extension"
                                       aria-describedby="btnExtension" />
                            </div>
                        </form>
                        <button class="btn btns bg-green"><i class="fa-solid fa-filter"></i> Filter</button>
                        <button class="btn btns bg-gray">Clear</button>
                    </div>
                </div>
                <div class="row my-3 py-2">
                    <div class="col-12">
                        <div class="p-3 bg-white">
                            <h3>Balloon Banner</h3>
                            <p class="text-muted">This banner is used in end of all internal Pages, so changes made here
                                will be reflected on every internal page.</p>
                        </div>
                    </div>
                </div>
                <div class="row my-3 py-2">
                    <div class="col-12">
                        <table id="example"
                               class="bg-white">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th><input type="checkbox"
                                    name="all_data"
                                               id="all_data"></th>
                                    <th>Block</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><i class="fa-solid fa-up-down-left-right"></i></td>
                                    <td><input type="checkbox"
                                               name="all_data"
                                               id="all_data"></td>
                                    <td>Raising Balloon Banner</td>
                                    <td><a href="blocks/edit/id1"><button class="btn btns w-fx bg-red"><i
                                                   class="fas fa-pen"></i> Edit</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <div class="tr">

                                        <td><button class="btn btns bg-green"
                                            style="width: 120px"><i class="fa-solid fa-arrow-down-short-wide"></i> Reorder</button></td>
                                        <td><button class="btn btns bg-pink"
                                            style="width: 100px"><i class="fas fa-trash"></i> Delete</button></td>
                                            {{-- <td></td> --}}
                                            {{-- <td></td> --}}
                                            <td></td>
                                            <td></td>
                                        </div>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
