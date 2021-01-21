<?php

class DiscountCalculatorTest
{

    public function SholdApllyWhenValuesIsAboveTheMinimumTest()
    {
        $discountCalculator = new DiscountCalculator();
        $totalValue = 130;
        $totalWithDiscount = $discountCalculator->apply($totalValue);
        $expectedValue = 110;
        $this->assertEquals($expectedValue, $totalWithDiscount);
    }


    public function SholdApllyWhenValuesIsBellowTheMinimumTest()
    {
        $discountCalculator = new DiscountCalculator();
        $totalValue = 90;
        $totalWithDiscount = $discountCalculator->apply($totalValue);
        $expectedValue = 90;
        $this->assertEquals($expectedValue, $totalWithDiscount);

    }

    public function assertEquals($expectedValue, $actualValue)
    {
        if($expectedValue !== $actualValue){
            $message = 'Expected: ' . $expectedValue. ' but got: ' . $actualValue;
            throw new \Exception($message);
            return;
        }
        echo "teste passed! \n";
    }
}