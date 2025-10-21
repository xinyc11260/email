<?php
namespace app\model;

use think\Model;

class OauthToken extends Model
{
    protected $name = 'oauth_tokens';

    public function toAccessToken(): array
    {
        return [];
    }
}
