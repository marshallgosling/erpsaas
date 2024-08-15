<?php

namespace App\Enums\Accounting;

use Filament\Support\Contracts\HasLabel;

enum AccountCategory: string implements HasLabel
{
    case Asset = 'asset';
    case Liability = 'liability';
    case Equity = 'equity';
    case Revenue = 'revenue';
    case Expense = 'expense';

    public function getLabel(): ?string
    {
        return $this->name;
    }

    public function getPluralLabel(): ?string
    {
        return match ($this) {
            self::Asset => translate('Assets'),
            self::Liability => translate('Liabilities'),
            self::Equity => translate('Equity'),
            self::Revenue => translate('Revenue'),
            self::Expense => translate('Expenses'),
        };
    }

    public static function fromPluralLabel(string $label): ?self
    {
        foreach (self::cases() as $case) {
            if ($case->getPluralLabel() === $label) {
                return $case;
            }
        }

        return null;
    }
}
