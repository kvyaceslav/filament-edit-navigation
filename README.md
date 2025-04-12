# Filamend Next/Previous navigation for Edit Item

Need to add this folters in **App/Filament/Resources** folder.

## How to use ?

You just need to include this method in EditItem file in **getHeaderActions** method.

Example:
```
use App\Filament\Resources\Actions\NextAction;
use App\Filament\Resources\Actions\PreviousAction;
use App\Filament\Resources\Pages\Concerns\CanPaginateEditRecord;

...

use  CanPaginateEditRecord;

...

protected  function  getHeaderActions(): array
{
    return [
        Actions\DeleteAction::make(),
        PreviousAction::make(),
        NextAction::make(),
    ];
}
```

Thank you, best regards!