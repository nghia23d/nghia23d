<?php

namespace nghia23d\cms\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    private $table = 'blog';

    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->route($this->table);

        $condThumb  = 'bail|required|max:1024';
        $condTitle  = "bail|required|between:5,50|unique:$this->table,title";

        //rules for edit
        if (!empty($id)) {
            $condThumb   = 'bail|max:1024';
            $condTitle  .= ",$id";
        }
        
        return [
            'title'            => $condTitle,
            'tag'              => 'bail|required',
            'meta_description' => 'bail|required',
            'content'          => 'bail|required|min:5',
            'status'           => 'bail|in:0,1',
            'is_highlight'     => 'bail|in:0,1',
            'thumbnail'        => $condThumb,
        ];
    }
    public function messages()
    {
        return [
            'title.required'            => 'Tiêu đề không được để trống',
            'title.unique'              => 'Tiêu đề bài viết này đã tồn tại. Hãy đặt tiêu đề khác',
            'title.between'             => 'Tiêu đề không được ít hơn :min  kí tực và nhỏ hơn :max',
            'tag.required'              => 'Tag (chủ đề) của bài viết không được để trống',
            'meta_description.required' => 'Meta Description không được để trống',
            'content.required'          => 'Nội dung bài viết không được để trống',
            'content.min'               => 'Nội dung bài viết phải ít nhất 5 kí tự',
            'status.in'                 => 'Vui lòng chọn kích hoạt hoặc không kích hoạt',
            'is_highlight.in'           => 'Vui lòng chọn bài viết nổi bật hoặc không nổi bật',
            'thumbnail.required'        => 'Thumbnail không được để trống',
        ];
    }
}
