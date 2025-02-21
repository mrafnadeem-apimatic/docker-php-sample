<?php

declare(strict_types=1);

/*
 * PaypalRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalRestApisLib\Models;

/**
 * NACHA (the regulatory body governing the ACH network) requires that API callers (merchants,
 * partners) obtain the consumer’s explicit authorization before initiating a transaction. To stay
 * compliant, you’ll need to make sure that you retain a compliant authorization for each transaction
 * that you originate to the ACH Network using this API. ACH transactions are categorized (using SEC
 * codes) by how you capture authorization from the Receiver (the person whose bank account is being
 * debited or credited). PayPal supports the following SEC codes.
 */
class StandardEntryClassCode
{
    public const TEL = 'TEL';

    public const WEB = 'WEB';

    public const CCD = 'CCD';

    public const PPD = 'PPD';
}
