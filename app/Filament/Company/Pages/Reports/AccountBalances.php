<?php

namespace App\Filament\Company\Pages\Reports;

use App\Contracts\ExportableReport;
use App\DTO\ReportDTO;
use App\Services\ExportService;
use App\Services\ReportService;
use App\Support\Column;
use App\Transformers\AccountBalanceReportTransformer;
use Filament\Forms\Form;
use Filament\Support\Enums\Alignment;
use Guava\FilamentClusters\Forms\Cluster;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AccountBalances extends BaseReportPage
{
    protected static string $view = 'filament.company.pages.reports.detailed-report';

    protected static ?string $slug = 'reports/account-balances';

    protected static bool $shouldRegisterNavigation = false;

    protected ReportService $reportService;

    protected ExportService $exportService;

    public function boot(ReportService $reportService, ExportService $exportService): void
    {
        $this->reportService = $reportService;
        $this->exportService = $exportService;
    }

    protected static ?string $title = 'Account Balances';

    public function getTitle(): string
    {
        return translate(static::$title);
    }

    /**
     * @return array<Column>
     */
    public function getTable(): array
    {
        return [
            Column::make('account_code')
                ->label(translate('Account Code'))
                ->toggleable()
                ->alignment(Alignment::Center),
            Column::make('account_name')
                ->label(translate('Account'))
                ->alignment(Alignment::Left),
            Column::make('starting_balance')
                ->label(translate('Starting Balance'))
                ->toggleable()
                ->alignment(Alignment::Right),
            Column::make('debit_balance')
                ->label(translate('Debit'))
                ->toggleable()
                ->alignment(Alignment::Right),
            Column::make('credit_balance')
                ->label(translate('Credit'))
                ->toggleable()
                ->alignment(Alignment::Right),
            Column::make('net_movement')
                ->label(translate('Net Movement'))
                ->toggleable()
                ->alignment(Alignment::Right),
            Column::make('ending_balance')
                ->label(translate('Ending Balance'))
                ->toggleable()
                ->alignment(Alignment::Right),
        ];
    }

    public function form(Form $form): Form
    {
        return $form
            ->inlineLabel()
            ->columns()
            ->live()
            ->schema([
                $this->getDateRangeFormComponent(),
                Cluster::make([
                    $this->getStartDateFormComponent(),
                    $this->getEndDateFormComponent(),
                ])->hiddenLabel(),
            ]);
    }

    protected function buildReport(array $columns): ReportDTO
    {
        return $this->reportService->buildAccountBalanceReport($this->startDate, $this->endDate, $columns);
    }

    protected function getTransformer(ReportDTO $reportDTO): ExportableReport
    {
        return new AccountBalanceReportTransformer($reportDTO);
    }

    public function exportCSV(): StreamedResponse
    {
        return $this->exportService->exportToCsv($this->company, $this->report, $this->startDate, $this->endDate);
    }

    public function exportPDF(): StreamedResponse
    {
        return $this->exportService->exportToPdf($this->company, $this->report, $this->startDate, $this->endDate);
    }
}
