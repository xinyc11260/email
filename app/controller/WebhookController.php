<?php
namespace app\controller;

use app\service\SyncService;
use think\Request;

class WebhookController
{
    public function __construct(private SyncService $service)
    {
    }

    public function gmail(Request $request)
    {
        $payload = $request->post();
        $this->service->handleGmailWebhook($payload, $request->header());

        return json(['status' => 'ok']);
    }

    public function graph(Request $request)
    {
        if ($request->isGet()) {
            $validationToken = $request->get('validationToken');
            if ($validationToken !== null) {
                return response($validationToken)->contentType('text/plain');
            }
        }

        $this->service->handleGraphWebhook($request->post(), $request->header());

        return json(['status' => 'ok']);
    }
}
