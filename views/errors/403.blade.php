@extends('layouts.headless')
<style>
.invalid-wrapper{
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: -100px;
    flex-direction: column;
    height: calc(100vh - 16px);
}
</style>
@section('content')

<div class="invalid-wrapper">
    <div class="invalid-header mb-3">
        <h3 class="fw-regular d-inline-block text-dark-grey">403 | </h3>
        <span> @lang('auth.invalid_signature')</span>
    </div>
</div>

@endsection
