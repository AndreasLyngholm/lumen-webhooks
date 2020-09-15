<?php

namespace Spatie\WebhookServer;

use Illuminate\Foundation\Bus\Dispatchable;

class CallWebhookJob extends CallWebhookJobAbstract
{
    use Dispatchable;
}
