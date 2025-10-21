<?php
namespace app\model;

use think\Model;

class MailAccount extends Model
{
    protected $name = 'mail_accounts';

    public function oauthToken()
    {
        return $this->hasOne(OauthToken::class);
    }
}
