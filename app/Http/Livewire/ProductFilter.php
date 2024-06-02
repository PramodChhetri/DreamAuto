<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class ProductFilter extends Component
{
    use WithPagination;

    public $name = '';
    public $code = '';
    public $minprice = null;
    public $maxprice = null;
    public $priceOrder = null;

    const ORDER_ASC = 'asc';
    const ORDER_DESC = 'desc';

    public function mount()
    {
        // Initialization if needed
    }

    public function render()
    {
        $products = $this->getFilteredProducts();

        return view('livewire.product-filter', [
            'products' => $products
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'name' => 'nullable|string|max:255',
            'code' => 'nullable|string|max:255',
            'minprice' => 'nullable|numeric|min:0',
            'maxprice' => 'nullable|numeric|min:0',
            'priceOrder' => 'nullable|in:' . self::ORDER_ASC . ',' . self::ORDER_DESC,
        ]);

        $this->resetPage();
    }

    private function getFilteredProducts()
    {
        $query = Product::query();

        if ($this->name) {
            $query->where('name', 'like', '%' . $this->name . '%');
        }

        if ($this->code) {
            $query->where('code', 'like', '%' . $this->code . '%');
        }

        if ($this->minprice !== null && $this->maxprice !== null) {
            $query->whereBetween('price', [$this->minprice, $this->maxprice]);
        } elseif ($this->minprice !== null) {
            $query->where('price', '>=', $this->minprice);
        } elseif ($this->maxprice !== null) {
            $query->where('price', '<=', $this->maxprice);
        }

        if ($this->priceOrder) {
            $query->orderBy('price', $this->priceOrder);
        }

        return $query->paginate(15);
    }
}
