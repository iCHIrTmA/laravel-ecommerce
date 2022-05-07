<?php

namespace App\Http\Livewire;

use Algolia\ScoutExtended\Facades\Algolia;
use App\Models\Product;
use Livewire\Component;

class ProductBrowser extends Component
{
    public $category;
    
    public $queryFilters = [];

    public $priceRange = [
        'max' => null,
    ];

    public function mount()
    {
        $this->queryFilters = $this->category
                                ->products
                                ->pluck('variations')
                                ->flatten()
                                ->groupBy('type')
                                ->keys()
                                ->mapWithKeys(fn ($key) => [$key => []])
                                ->toArray();
    }

    public function render()
    {
        $filters = collect($this->queryFilters)->filter()
                ->recursive()
                ->map(function ($value, $key) {
                    return $value->map(fn ($value) => $key . ':' . $value);
                })
                ->flatten()
                ->join(' OR ');

        if($this->priceRange['max']) {
                $filters .= (isset($filters[0]) ? ' AND ' : '') . 'price <= ' . $this->priceRange['max'];
        }
                
        $products = Product::search('')->with([
            'filters' => $filters,
        ])->get()->sortByDesc('price');

        $index = Algolia::index(Product::class);

        $results = $index->search('', [
            'facets' => ['color', 'size']
        ]);

        $maxPrice = $this->category->products()->max('price');

        $this->priceRange['max'] = $this->priceRange['max'] ?: $maxPrice;

        return view('livewire.product-browser',[
            'products' => $products,
            'filters' => $results['facets'],
            'maxPrice' => $maxPrice,
        ]);
    }
}
