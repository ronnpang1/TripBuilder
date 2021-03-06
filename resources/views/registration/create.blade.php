@extends('layouts.master')
@section('content')
<div class="divTableTitle">
    Register
</div>
<div class="demo-card-wide mdl-card mdl-shadow--2dp">
    <form method="POST" action="/register">
        {{ csrf_field() }}
        <div class="mdl-card__supporting-text" style="margin: 0 auto">
            <div class="mdl-textfield mdl-js-textfield" style="width:100%">
                <input class="mdl-textfield__input" type="text" id="name" name="name" required>
                <label class="mdl-textfield__label" for="name">Name</label>
            </div>
            <br/>
            <div class="mdl-textfield mdl-js-textfield" style="width:100%">
                <input class="mdl-textfield__input" type="email" id="email" name="email" required>
                <label class="mdl-textfield__label" for="email">Email</label>
            </div>
            <br/>
            <div class="mdl-textfield mdl-js-textfield" style="width:100%">
                <input class="mdl-textfield__input" type="password" id="password" name="password" required>
                <label class="mdl-textfield__label" for="password">Password</label>
            </div>
            <br/>
            <div class="mdl-textfield mdl-js-textfield" style="width:100%">
                <input class="mdl-textfield__input" type="password" id="password_confirmation" name="password_confirmation" required>
                <label class="mdl-textfield__label" for="password_confirmation">Password Confirmation</label>
            </div>
            <br/>
            <br/>
        </div>
        <div class="mdl-card__actions mdl-card--border">
            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
            Register
            </button>  
        </div>
    </form>
</div>
@endsection