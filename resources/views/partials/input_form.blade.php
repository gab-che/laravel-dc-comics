{{-- bootstrap is-invalid non funge :( --}}

<div>
    <label for="{{$input_name}}">{{$label}}</label>

    @if($type === 'textarea')
        <textarea name="description" class="form-control" @error('description') is-invalid @enderror>{{old('description')}}</textarea>
    
    @else
        <input type="{{$type}}" class="form-control" name="{{$input_name}}" value="{{old($input_name)}}" @error($input_name) is-invalid @enderror>
    @endif
    
    @error($input_name)
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
</div>