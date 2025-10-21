<?php
namespace app\controller;

use app\service\MailService;
use app\validate\SendMailValidate;
use think\Request;

class MailController
{
    public function __construct(private MailService $service)
    {
    }

    public function send(Request $request)
    {
        (new SendMailValidate())->check($request->post());
        $result = $this->service->send($request->post());

        return json($result);
    }

    public function listThreads(Request $request)
    {
        return json($this->service->listThreads($request->get()));
    }

    public function getThread(int $id)
    {
        return json($this->service->getThread($id));
    }

    public function getMessage(int $id)
    {
        return json($this->service->getMessage($id));
    }

    public function getAttachment(int $id, int $attachmentId)
    {
        return redirect($this->service->getAttachmentUrl($id, $attachmentId));
    }
}
