<?php
use think\facade\Route;

Route::group('api', function () {
    Route::post('mails/send', 'MailController@send')->middleware(\app\middleware\TenantAuth::class);
    Route::get('mails/threads', 'MailController@listThreads')->middleware(\app\middleware\TenantAuth::class);
    Route::get('mails/threads/:id', 'MailController@getThread')->middleware(\app\middleware\TenantAuth::class);
    Route::get('mails/messages/:id', 'MailController@getMessage')->middleware(\app\middleware\TenantAuth::class);
    Route::get('mails/messages/:id/attachments/:attId', 'MailController@getAttachment')->middleware(\app\middleware\TenantAuth::class);
});

Route::get('oauth/google/callback', 'AuthController@googleCallback');
Route::get('oauth/ms/callback', 'AuthController@msCallback');
Route::post('webhooks/gmail', 'WebhookController@gmail');
Route::post('webhooks/graph', 'WebhookController@graph');
