@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid bg-secondary bg-opacity-25">
        <ol class="breadcrumb mb-4 py-3">
            <li class="breadcrumb-item">Blocks Module</li>
            <li class="breadcrumb-item">Areas</li>
            <li class="breadcrumb-item text-muted">Edit</li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row my-3 py-2">
                    <div class="col-12">
                        <div class="container">
                            <div class="row">
                                <form action="/blocks/update_block"
                                      method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-12 bg-white">
                                        <div class="form-row m-3 p-3">
                                            @foreach ($blocks as $item)
                                            <input type="hidden" name="id" value="{{$item['id']}}">
                                                <div class="mb-3">
                                                    <label for="blockName"
                                                           class="form-label">Name <span style="color:red">*</span></label>
                                                    <div id="emailHelp"
                                                         class="form-text mb-3">Specify a short easily identifiable name.
                                                    </div>
                                                    <input type="text"
                                                           class="form-control"
                                                           name="blockName"
                                                           id="blockName"
                                                           value="{{ $item['name'] }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="blockSlug"
                                                           class="form-label">Slug <span style="color:red">*</span></label>
                                                    <div id="emailHelp"
                                                         class="form-text mb-3">The slug will be used when display blocks
                                                        with the plugin.</div>
                                                    <input type="text"
                                                           class="form-control"
                                                           name="blockSlug"
                                                           id="blockSlug"
                                                           value="{{ $item['slug'] }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="blockDesc"
                                                           class="form-label">Description</label>
                                                    <div id="emailHelp"
                                                         class="form-text mb-3">Briefly describe the area and how it will be
                                                        used.</div>
                                                    <textarea class="form-control"
                                                              name="blockDesc"
                                                              id="blockDesc"
                                                              style="height: 14vw; resize:none">
                                                        {{ $item['description'] }}
                                                    </textarea>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                    <div class="col-12 my-3 py-3 bg-white d-flex justify-content-between">
                                        <div>
                                            <button type="submit" class="btn btns bg-green"
                                                    id="save"
                                                    onclick="updateBlock()"><i class="fa-solid fa-floppy-disk"></i>
                                                &nbsp;Update</button>
                                            <button type="submit" class="btn btns bg-green"
                                                    id="create"
                                                    onclick="saveBlock()"><i class="fa-solid fa-floppy-disk"></i> &nbsp;Save
                                                &
                                                Exit</button>
                                        </div>
                                        <div>
                                            <button class="btn btns bg-gray"
                                                    id="cancel">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
