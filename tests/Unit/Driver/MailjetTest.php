<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Unit\Driver;

use BaseCodeOy\Mailbox\Data\Mail;
use BaseCodeOy\Mailbox\Driver\Mailjet;

it('should parse the payload', function (): void {
    $mail = createRequest(
        Mailjet::class,
        fixtureJson('mailjet'),
    )->toMail();

    expect($mail)->toBeInstanceOf(Mail::class);

    expect($mail)->toMatchSnapshot();
});
