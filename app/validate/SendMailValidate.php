<?php
namespace app\validate;

use think\Validate;

class SendMailValidate extends Validate
{
    protected $rule = [
        'account_id' => 'require|number',
        'to'         => 'require|array|min:1',
        'subject'    => 'require|max:255',
        'html'       => 'requireWithout:text',
        'text'       => 'requireWithout:html',
    ];
}
