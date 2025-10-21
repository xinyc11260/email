# 邮件读取与发送系统（ThinkPHP 版）骨架

本仓库提供基于 ThinkPHP 6 的邮件读取与发送服务骨架，实现了文档中描述的基础目录结构、路由定义以及主要服务/Provider/模型的占位实现，便于后续在此基础上补全实际业务逻辑。

## 目录概览

- `app/controller`：API 控制器（发送、同步、Webhook、OAuth 回调）。
- `app/service`：业务服务骨架，包含邮件发送、授权回调和同步处理。
- `app/provider`：邮件服务提供方接口与 Gmail、Microsoft Graph、IMAP/SMTP 适配器的占位实现。
- `app/model`：核心数据模型。
- `app/middleware`：租户鉴权中间件占位。
- `app/validate`：发送邮件的请求校验规则。
- `config`：项目自定义配置（mailhub、queue、cache）。
- `route/app.php`：API、OAuth 回调和 Webhook 路由定义。
- `database/migrations`：邮件相关基础表的迁移示例。
- `extend/helpers`：MIME 构建等扩展辅助函数位置。

## 下一步

- 根据实际需求完善 `app/service` 与 `app/provider` 中的具体逻辑。
- 接入 OAuth、Redis、队列和对象存储等基础设施。
- 扩展迁移文件以覆盖线程、消息、附件等完整表结构。
- 补充单元测试与集成测试，确保发送与同步流程稳定。
