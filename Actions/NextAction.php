<?php

namespace App\Filament\Resources\Actions;

use Filament\Actions\Action;

class NextAction extends Action
{
    /**
     * @return string|null
     */
    public static function getDefaultName(): ?string
    {
        return 'next';
    }

    /**
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->hiddenLabel()
            ->icon('heroicon-o-arrow-right')
            ->outlined()
            ->tooltip("Next {$this->getRecordTitle()}");
    }
}
