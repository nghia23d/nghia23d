<?php

namespace nghia23d\cms\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class QuestionAskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    private $table = 'question_ask';

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

        $condQuestion  = "bail|required|min:5|unique:$this->table,question";

        if (!empty($id))
            $condQuestion  .=  ",$id";

        return [
            'question' => $condQuestion,
            'ask'      => "bail|required|min:5",
            'status'   => 'bail|in:0,1',
        ];
    }
    public function messages()
    {
        return [
            'question.required'  => 'Câu hỏi không được để trống',
            'question.unique'    => 'Câu hỏi bài viết này đã tồn tại. Hãy đặt tiêu đề khác',
            'question.min'       => 'Câu hỏi không được ít hơn :min  kí tự',
            'ask.required'       => 'Câu trả lời không được để trống',
            'ask.min'            => 'Câu trả lời không được ít hơn :min  kí tự',
        ];
    }
}
