<?php

use AnamarijaPapic\WeightConversions\Weight;

it('can convert kilograms to pounds', function () {
    $pounds = Weight::kilograms(100)->toPounds();

    expect($pounds)->toEqual(220.46);
});

it('can convert kilograms to stones', function () {
    $pounds = Weight::kilograms(100)->toStones();

    expect($pounds)->toEqual(15.747);
});
