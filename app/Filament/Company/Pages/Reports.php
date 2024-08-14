<?php

namespace App\Filament\Company\Pages;

use App\Filament\Company\Pages\Reports\AccountBalances;
use App\Filament\Company\Pages\Reports\AccountTransactions;
use App\Filament\Company\Pages\Reports\TrialBalance;
use App\Infolists\Components\ReportEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Infolist;
use Filament\Pages\Page;
use Filament\Support\Colors\Color;

class Reports extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-chart-bar';

    protected static string $view = 'filament.company.pages.reports';

    protected static ?string $title = 'Reports';

    public function getTitle(): string
    {
        return translate(static::$title);
    }

    public static function getNavigationLabel(): string
    {
        return translate(static::$title);
    }

    public function reportsInfolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->state([])
            ->schema([
                Section::make(translate('Detailed Reports'))
                    ->description(translate('Dig into the details of your business’s transactions, balances, and accounts.'))
                    ->extraAttributes(['class' => 'es-report-card'])
                    ->schema([
                        ReportEntry::make('account_balances')
                            ->hiddenLabel()
                            ->heading(translate('Account Balances'))
                            ->description(translate('Summary view of balances and activity for all accounts.'))
                            ->icon('heroicon-o-currency-dollar')
                            ->iconColor(Color::Teal)
                            ->url(AccountBalances::getUrl()),
                        ReportEntry::make('trial_balance')
                            ->hiddenLabel()
                            ->heading(translate('Trial Balance'))
                            ->description(translate('The sum of all debit and credit balances for all accounts on a single day. This helps to ensure that the books are in balance.'))
                            ->icon('heroicon-o-scale')
                            ->iconColor(Color::Sky)
                            ->url(TrialBalance::getUrl()),
                        ReportEntry::make('account_transactions')
                            ->hiddenLabel()
                            ->heading(translate('Account Transactions'))
                            ->description(translate('A record of all transactions for a company. The general ledger is the core of a company\'s financial records.'))
                            ->icon('heroicon-o-adjustments-horizontal')
                            ->iconColor(Color::Amber)
                            ->url(AccountTransactions::getUrl()),
                    ]),
            ]);
    }
}
