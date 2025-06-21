@extends('admin.layout.master')
@section('container')

<div class="container">

    <div class="settings">
        <h2>Settings</h2>
        <input type="text" placeholder="Update Name" id="nameInput">
        <input type="text" placeholder="Update Location" id="locationInput">
        <input type="email" placeholder="Update Email" id="emailInput">
        <button onclick="updateProfile()">Save Changes</button>
    </div>

</div>
@endsection
