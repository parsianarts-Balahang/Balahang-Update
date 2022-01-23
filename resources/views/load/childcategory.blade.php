<option value="">Select Child Category</option>
@foreach($subcat->childs as $child)
<option value="{{ $child->id }}">{{ $lang ? $child->name_fa : $child->name }}</option>
@endforeach
