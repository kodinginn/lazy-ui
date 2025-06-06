<?php

namespace Rappasoft\LaravelLivewireTables\Tests\Unit\Views\Columns;

use PHPUnit\Framework\Attributes\Group;
use Rappasoft\LaravelLivewireTables\Tests\Models\Pet;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

#[Group('Columns')]
final class BooleanColumnTest extends ColumnTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        self::$columnInstance = BooleanColumn::make('Name', 'name');
    }

    public function test_can_render_field(): void
    {
        $column = BooleanColumn::make('Name')->getContents(Pet::find(1));
        $this->assertNotEmpty($column);
    }

    public function test_can_not_render_field_if_no_title(): void
    {
        $this->expectException(\ArgumentCountError::class);

        BooleanColumn::make()->getContents(Pet::find(1));
    }

    public function test_can_render_field_if_title_callback(): void
    {
        $column = BooleanColumn::make('Name')->getContents(Pet::find(1));

        $this->assertNotEmpty($column);
    }

    public function test_can_set_truthy_value(): void
    {
        $column = BooleanColumn::make('Name')->setSuccessValue(false)->getContents(Pet::find(1));

        $this->assertNotEmpty($column);
    }

    public function test_can_set_boolean_column_icons(): void
    {
        $column = BooleanColumn::make('Name')->setSuccessValue(false)->icons();

        $this->assertSame('icons', $column->getType());
    }

    public function test_can_set_boolean_column_yesno(): void
    {
        $column = BooleanColumn::make('Name')->setSuccessValue(false)->yesNo();

        $this->assertSame('yes-no', $column->getType());
    }

    public function test_can_return_status_true(): void
    {
        $row = Pet::find(1);
        $value = true;
        $column = BooleanColumn::make('Name')->setCallback(function (string $value, $row) {
            return $row->id === 1;
        });
        $curVal = $column->hasCallback() ? call_user_func($column->getCallback(), $value, $row) : (bool) $value === true;
        $this->assertSame($curVal, true);
    }

    public function test_can_return_status_false(): void
    {
        $row = Pet::find(1);
        $value = true;
        $column = BooleanColumn::make('Name')->setCallback(function (string $value, $row) {
            return $row->id === 2;
        });
        $curVal = $column->hasCallback() ? call_user_func($column->getCallback(), $value, $row) : (bool) $value === true;
        $this->assertSame($curVal, false);
    }

    public function test_can_set_toggleable(): void
    {
        $column = BooleanColumn::make('Name', 'name');

        $this->assertFalse(self::$columnInstance->getIsToggleable());
        $this->assertNull(self::$columnInstance->getToggleMethod());
        self::$columnInstance->toggleable('changeStatus');
        $this->assertTrue(self::$columnInstance->getIsToggleable());
        $this->assertSame('changeStatus', self::$columnInstance->getToggleMethod());
    }

    public function test_can_set_toggleable_with_confirm_message(): void
    {
        self::$columnInstance->toggleable('changeStatus');

        $this->assertTrue(self::$columnInstance->getIsToggleable());
        $this->assertSame('changeStatus', self::$columnInstance->getToggleMethod());

        $this->assertFalse(self::$columnInstance->hasConfirmMessage());

        self::$columnInstance->confirmMessage('Are you sure?');

        $this->assertTrue(self::$columnInstance->hasConfirmMessage());

        $this->assertSame('Are you sure?', self::$columnInstance->getConfirmMessage());
    }

    public function test_can_get_value(): void
    {
        $column = BooleanColumn::make('Name')->getContents(Pet::find(1));
        $this->assertSame($column['value'], 'Cartman');
    }

    public function test_can_get_is_tailwind(): void
    {
        $column = BooleanColumn::make('Name')->getContents(Pet::find(1));
        $this->assertSame($column['isTailwind'], true);
        $this->assertSame($column['isBootstrap'], false);

    }
}
