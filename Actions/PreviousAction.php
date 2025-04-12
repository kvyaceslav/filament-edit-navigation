<?php

namespace App\Filament\Resources\Actions;

use Filament\Actions\Action;

class PreviousAction extends Action
{
    /**
     * @return string|null
     */
    public static function getDefaultName(): ?string
    {
        return 'previous';
    }

    /**
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->hiddenLabel()
            ->icon('heroicon-o-arrow-left')
            ->outlined()
            ->tooltip("Previous {$this->getRecordTitle()}");
    }
}
