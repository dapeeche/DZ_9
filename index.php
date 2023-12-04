<?php
//pullRequest

interface Taxi
{
    public function priceTaxi() :float;
    public function typeCarTaxi() :string;
}

class EconomTaxi implements Taxi {

    public function priceTaxi(): float
    {
        return 70;
    }

    public function typeCarTaxi(): string
    {
        return "a car for econom taxi";
    }
}

class StandartTaxi implements Taxi {

    public function priceTaxi(): float
    {
        return 100;
    }

    public function typeCarTaxi(): string
    {
        return "a car for standart taxi";
    }
}

class LuxTaxi implements Taxi {

    public function priceTaxi(): float
    {
        return 200;
    }

    public function typeCarTaxi(): string
    {
        return "a car for lux taxi";
    }
}

interface TaxiCreate
{
    public function creationTaxi() :Taxi;
}

class EconomTaxiCreate implements TaxiCreate {
    public function creationTaxi(): Taxi
    {
        return new EconomTaxi();
    }
}

class StandartTaxiCreate implements TaxiCreate {
    public function creationTaxi(): Taxi
    {
        return new StandartTaxi();
    }
}

class LuxTaxiCreate implements TaxiCreate {
    public function creationTaxi(): Taxi
    {
        return new LuxTaxi();
    }
}

function orderTaxi(TaxiCreate $create) {
    $order = $create->creationTaxi();
    echo "You ordered Taxi:" . PHP_EOL;
    echo "Type Taxi Car : " . $order->typeCarTaxi() . PHP_EOL;
    echo "Price: " . $order->priceTaxi() . "grn" . PHP_EOL;
}
print_r(orderTaxi(new EconomTaxiCreate()));
print_r(orderTaxi(new StandartTaxiCreate()));
print_r(orderTaxi(new LuxTaxiCreate()));
