<?php

namespace nghia23d\cms\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    private $table = 'review';

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

        $condAvatar  = 'bail|required|max:1024';

        //rules for edit
        if (!empty($id)) {
            $condAvatar   = 'bail|max:1024';
        }

        return [
            'user_name'        => 'bail|required',
            'position'         => 'bail|required',
            'stars'            => 'bail|integer',
            'description'      => 'bail|required',
            'status'           => 'bail|in:0,1',
            'avatar'           => $condAvatar,
        ];
    }
    public function messages()
    {
        return [
            'user_name.required'        => 'Avatar không được để trống',
            'description.required'      => 'Description không được để trống',
            'status.in'                 => 'Vui lòng chọn kích hoạt hoặc không kích hoạt',
        ];
    }
}
