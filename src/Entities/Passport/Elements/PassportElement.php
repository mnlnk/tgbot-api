<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Passport\Elements;

use Manuylenko\Telegram\Bot\Api\Entities\Entity;

/**
 * @link https://core.telegram.org/bots/api#telegram-passport
 */
abstract class PassportElement extends Entity
{
    /**
     * Types
     */
    const T_PERSONAL_DETAILS = 'personal_details';
    const T_PASSPORT = 'passport';
    const T_DRIVER_LICENSE = 'driver_license';
    const T_IDENTITY_CARD = 'identity_card';
    const T_INTERNAL_PASSPORT = 'internal_passport';
    const T_ADDRESS = 'address';
    const T_UTILITY_BILL = 'utility_bill';
    const T_BANK_STATEMENT = 'bank_statement';
    const T_RENTAL_AGREEMENT = 'rental_agreement';
    const T_PASSPORT_REGISTRATION = 'passport_registration';
    const T_TEMPORARY_REGISTRATION = 'temporary_registration';
    const T_PHONE_NUMBER = 'phone_number';
    const T_EMAIL = 'email';
}
