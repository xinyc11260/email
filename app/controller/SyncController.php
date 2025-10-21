<?php
namespace app\controller;

use app\service\SyncService;
use think\Request;

class SyncController
{
    public function __construct(private SyncService $service)
    {
    }

    public function trigger(Request $request)
    {
        $accountId = (int) $request->post('account_id');
        $processed = $this->service->triggerDeltaSync($accountId);

        return json(['processed' => $processed]);
    }
}
