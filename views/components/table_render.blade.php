@if(isset($data) && is_array($data) && count($data) > 0)
@foreach($data as $item)
<tr>
  <th scope="row">
    <div class="form-check">
      <input class="form-check-input fs-15 record-checkbox" type="checkbox" name="checkAll" data-model="{{ $module }}"
        value="" data-status="">
    </div>
  </th>

  @foreach($tableHead as $key => $val)
  @if($key !== 'status')
  <td>
    @if($key === 'img_thumbnail' && !empty($item[$key]))
    <img src="<?= (strpos($item[$key], 'http') === 0) ? $item[$key] : '/' . $item[$key] ?>" alt="Product Image"
      width="50" height="50">

    @else
    {{ array_key_exists($key, $item) ? $item[$key] : 'N/A' }}
    @endif
  </td>
  @endif
  @endforeach

  <td>
    <div class="form-check form-switch">
      <input class="form-check-input updateByField" data-id="{{ $item['id'] }}" data-value="{{ $item['status'] ?? '' }}"
        data-field="status" data-model="{{ $module }}" type="checkbox" role="switch" id="SwitchCheck{{ $item['id'] }}"
        @if(isset($item['status']) && $item['status']==2) checked @endif>
    </div>
  </td>

  <td class="items-center space-x-4">
    <div class="d-flex gap-3">
      <a class="edit-item-btn" href="/admin/{{$module}}/edit/{{$item['id']}}">
        <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>Edit
      </a>
      <a>
        <form action="/admin/{{$module}}/delete/{{$item['id']}}" method="POST"
          onsubmit="return confirm('Are you sure you want to delete ?');">
          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
      </a>
    </div>
  </td>
</tr>
@endforeach
@else
<tr>
  <td colspan="{{ count($tableHead) + 2 }}">No data available.</td>
</tr>
@endif
