<?php
use think\migration\Migrator;
use think\migration\db\Column;

class CreateMailhubTables extends Migrator
{
    public function change()
    {
        $this->table('mail_accounts')->addColumns([
            Column::integer('user_id')->index(),
            Column::integer('tenant_id')->index(),
            Column::string('provider', 20)->index(),
            Column::string('email_address', 191)->index(),
            Column::string('status', 20)->default('active'),
            Column::timestamp('created_at')->default('CURRENT_TIMESTAMP'),
            Column::timestamp('updated_at')->default('CURRENT_TIMESTAMP'),
        ])->create();

        $this->table('oauth_tokens')->addColumns([
            Column::integer('mail_account_id')->index(),
            Column::text('access_token_encrypted'),
            Column::text('refresh_token_encrypted')->null(),
            Column::timestamp('expires_at')->null(),
            Column::text('scopes_json')->null(),
            Column::timestamp('created_at')->default('CURRENT_TIMESTAMP'),
            Column::timestamp('updated_at')->default('CURRENT_TIMESTAMP'),
        ])->create();
    }
}
