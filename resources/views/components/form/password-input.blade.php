
<div class="password-area  mb-3">
    <input
        type="password"
        name="{{$name}}"
        placeholder="{{$placeholder}}"
        class="form-control p-2 @error($name) is-invalid @enderror"
        id="{{$id}}"
    />
    {{-- @error('email')
        <div class="error">
            {{$message}}
        </div>
    @enderror --}}
</div>
