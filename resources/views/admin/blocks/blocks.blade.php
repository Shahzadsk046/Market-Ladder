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
                        <a href="/blocks/new-area"
                           class="text-decoration-none"><button class="btn btns bg-green"><i class="fas fa-plus"></i> &nbsp;
                                New Area</button></a>
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
                        <form action="/blocks/delete_block"
                              method="post">
                            @csrf
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
                                    @foreach ($blocks as $block)
                                        <tr>
                                            <td><input type="checkbox"
                                                       name="ids[{{ $block['id'] }}]"
                                                       id="ids[{{ $block['id'] }}]"
                                                       value="{{ $block['id'] }}"></td>
                                            <td>{{ $block['name'] }}</td>
                                            <td>{{ $block['slug'] }}</td>
                                            <td>{{ $block['description'] }}</td>
                                            <td>
                                                <a href="blocks/edit/{{ $block['id'] }}"><button type="button"
                                                            class="btn btns w-fx bg-red"><i class="fas fa-pen"></i>
                                                        Edit</button></a>
                                                <a href="blocks/view/{{ $block['id'] }}"><button type="button"
                                                            class="btn btns w-fx bg-purple"><i
                                                           class="fas fa-wand-magic-sparkles"></i>
                                                        Blocks</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td><button class="btn btns bg-pink"
                                                    style="width: 100px"><i class="fas fa-trash"></i> Delete</button></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
