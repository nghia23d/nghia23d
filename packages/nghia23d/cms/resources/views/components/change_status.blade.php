<select name="status" class="form-control change-status" data-route="{{Request::url()}}/{{$id}}/change-status">
    <option value="1">Kích hoạt</option>
    <option @if(!$status->toHtml()) selected @endif value="0">Chưa kích hoạt</option>
</select>
