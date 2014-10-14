@extends('layouts.bootstrap')

@section('title')
@parent
[ Login ]
@stop

@section('content')
<section class="container">
    <form class="form form-login" role="form" style="padding:15px;">
        <h2>Sign in</h2>
        <div class="form-group">
            <input class="form-control" type='email' placeholder="email address" autofocus required>
        </div>
        <div>
            <input class="form-control" type='password' placeholder="password">
        </div>
        <div>
            <label class='checkbox'>remember me
                <input type="checkbox">
            </label>
        </div>
        <button class='btn btn-large btn-primary btn-block' type='submit'>Sign in</button>
    </form>
</section>
@stop