<div class="col-md-12">
    <div class="form-group">
        <label class="form-label" for="multi_group">Group</label>
        <div class="form-control-wrap">
            <select class="custom-select" id="multi_group" multiple="" name="group[]">
                @foreach ($group as $index => $item)
                <option
                {{ (collect(old('group',$public))->contains($item->id)) ? 'selected':'' }}
                        value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        @error('group')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
</div>