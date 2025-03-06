<?php

it('make creates new instance')
    ->expect(fn () => \Alkoumi\FilamentImageRadioButton\Forms\Components\ImageRadioGroup::make('test')->animation(true))
    ->toBeInstanceOf(\Alkoumi\FilamentImageRadioButton\Forms\Components\ImageRadioGroup::class);

