<?php

declare(strict_types=1);

namespace GildedRose;

final class GildedRose
{
    /**
     * @param Item[] $items
     */
    public function __construct(
        private array $items
    ) {
    }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {
            if ($item->name = 'Aged Brie') {
                if ($item->quality > 50){
                    $item->quality = 50;  
                }

                if ($item->quality >= 0) {
                    if($item->sellIn >= 0){
                        $item->quality = $item->quality + 1;
                    }

                    if($item->sellIn < 0){
                        $item->quality = $item->quality + 2;
                    }
                }
            } 

            if ($item->name = 'Backstage passes to a TAFKAL80ETC concert'){

                if ($item->sellIn < 0) {
                    $item->quality = 0;
                }

                if($item->quality >= 50){
                    $item->quality = 50;

                    if ($item->sellIn < 11) {
                        if ($item->quality < 50) 
                            $item->quality = $item->quality + 2;
                    }
                    
                    if ($item->sellIn < 6) {  
                        if ($item->quality < 50) {
                            $item->quality = $item->quality + 3;
                        }
                    }
                }
            }

            if($item->name = 'Sulfuras, Hand of Ragnaros'){
                $item->quality = 80;
            }

            if($item->name = 'Conjured Cake'){
                if ($item->quality < 50) {
                    $item->quality = $item->quality - 1;
                }
            }
        }
    }
}
