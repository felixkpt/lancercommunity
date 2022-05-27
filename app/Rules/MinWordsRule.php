<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MinWordsRule implements Rule
{
    private $min_words;

    /**
     * Create a new rule instance.
     * @param integer $min_words
     *
     * @return void
     */
    public function __construct($min_words = 2)
    {
        $this->min_words = $min_words;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return str_word_count($value) <= $this->min_words;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute cannot be less than '.$this->min_words.' words.';
    }
}
