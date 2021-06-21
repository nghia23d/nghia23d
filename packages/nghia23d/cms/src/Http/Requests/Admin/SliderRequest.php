<?php

namespace nghia23d\cms\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    private $table = 'slider';

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

        $condImage  = 'bail|required|max:1024';
        $condTitle  = "bail|required|between:5,50|unique:$this->table,title";

        //rules for edit
        if (!empty($id)) {
            $condImage   = 'bail|max:1024';
            $condTitle  .= ",$id";
        }

        return [
            'title'            => $condTitle,
            'description'      => 'bail|required',
            'link'             => 'bail',
            'status'           => 'bail|in:0,1',
            'image'            => $condImage,
        ];
    }
    public function messages()
    {
        return [
            'title.required'            => 'Tiêu đề không được để trống',
            'title.unique'              => 'Tiêu đề bài viết này đã tồn tại. Hãy đặt tiêu đề khác',
            'title.between'             => 'Tiêu đề không được ít hơn :min  kí tực và nhỏ hơn :max',
            'description.required'      => 'Description không được để trống',
            // 'link.required'             => 'Link slider không được để trống',
            'status.in'                 => 'Vui lòng chọn kích hoạt hoặc không kích hoạt',
        ];
    }
}
