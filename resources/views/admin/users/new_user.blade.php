@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid bg-secondary bg-opacity-25">
        <ol class="breadcrumb mb-4 py-3">
            <li class="breadcrumb-item">Users Module</li>
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item text-muted">Create</li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btns bg-green"><i class="fas fa-plus"></i> &nbsp; New User</button>
                    </div>
                </div>
                <div class="row my-3 py-2">
                    <div class="col-12">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active"
                                   aria-current="page"
                                   href="#account">Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="#profile">Profile</a>
                            </li>
                        </ul>
                        <div id="account">
                            <div class="col-12 bg-white p-3">
                                <form action="/newUser"
                                      method="post">
                                    <div class="form-row my-3">
                                        <div class="mb-3">
                                            <label for="userFirstName"
                                                   class="form-label">First Name </label>
                                            <div class="form-text mb-3">Specify the user's real first name.
                                            </div>
                                            <input type="text"
                                                   class="form-control"
                                                   name="userFirstName"
                                                   id="userFirstName">
                                        </div>
                                        <div class="mb-3">
                                            <label for="userLastName"
                                                   class="form-label">Last Name</label>
                                            <div class="form-text mb-3">Specify the user's real last name.</div>
                                            <input type="text"
                                                   class="form-control"
                                                   name="userLastName"
                                                   id="userLastName">
                                        </div>
                                        <div class="mb-3">
                                            <label for="userDisplayName"
                                                   class="form-label">Display Name <span style="color:red">*</span></label>
                                            <div class="form-text mb-3">Specify the user's publicly displayable name.</div>
                                            <input type="text"
                                                   class="form-control"
                                                   name="userDisplayName"
                                                   id="userDisplayName">
                                        </div>
                                        <div class="mb-3">
                                            <label for="username"
                                                   class="form-label">Username <span style="color:red">*</span></label>
                                            <div class="form-text mb-3">Specify a unique username for the user to login.</div>
                                            <input type="text"
                                                   class="form-control"
                                                   name="username"
                                                   id="username">
                                        </div>
                                        <div class="mb-3">
                                            <label for="userEmail"
                                                   class="form-label">Email <span style="color:red">*</span></label>
                                            <div class="form-text mb-3">The email is used for logging in.</div>
                                            <input type="text"
                                                   class="form-control"
                                                   name="userEmail"
                                                   id="userEmail">
                                        </div>
                                        <div class="mb-3">
                                            <label for="userActive"
                                                   class="form-label">Is this user activated?</label>
                                            <div class="form-text mb-3">The user will not be able to login unless activated.</div>
                                            <div class="form-check form-switch ms-4">
                                                <input class="form-check-input bg-red border-danger fs-4" type="checkbox" role="switch" name="userActive" id="userActive">
                                              </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="userEnable"
                                                class="form-label">Is this user enabled?</label>
                                                <div class="form-text mb-3">The user will not be able to login or activate if disabled.</div>
                                                <div class="form-check form-switch ms-4">
                                                  <input class="form-check-input border-success bg-green fs-4" type="checkbox" role="switch" name="userEnable" id="userEnable" checked>
                                                </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="userPassword"
                                                   class="form-label">Password</label>
                                            <div class="form-text mb-3">Specify the user's secure password.</div>
                                            <input type="text"
                                                   class="form-control"
                                                   name="userPassword"
                                                   id="userPassword">
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
