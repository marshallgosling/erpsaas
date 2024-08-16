<?php

namespace App\Enums\Banking;

use App\Enums\Concerns\ParsesEnum;
use Filament\Support\Contracts\HasLabel;

enum BankAccountType: string implements HasLabel
{
    use ParsesEnum;

    case Investment = 'investment';
    case Credit = 'credit';
    case Depository = 'depository';
    case Loan = 'loan';
    case Other = 'other';

    public const DEFAULT = self::Depository;

    public function getLabel(): ?string
    {
        return translate($this->name);
    }

    public function getDefaultSubtype(): string
    {
        return match ($this) {
            self::Depository => translate('Cash and Cash Equivalents'),
            self::Credit => translate('Short-Term Borrowings'),
            self::Loan => translate('Long-Term Borrowings'),
            self::Investment => translate('Long-Term Investments'),
            self::Other => translate('Other Current Assets'),
        };
    }
}
