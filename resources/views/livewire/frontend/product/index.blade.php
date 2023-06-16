<div>
    <div class="row">
        <div class="col-md-3">
            <div class="card bg-white">

                <div class="card-header bg-white mt-3">
                    <h4>Categories</h4>
                    <div class="card-body">
                        <label class="d-block" for="">
                            <a href="{{ url('collections/mobile') }}"
                                class="btn btn-light bordered mt-2 border w-100">Mobile</a><br>
                            <a href="{{ url('collections/laptop') }}"
                                class="btn btn-light bordered mt-2 border w-100">Laptop</a><br>
                            <a href="{{ url('collections/tablet') }}"
                                class="btn btn-light bordered mt-2 border w-100">Tablet</a><br>
                        </label>
                    </div>
                </div>
            </div>
            <div class="card bg-white mt-3">
                <div class="card-header bg-white mt-3">
                    <h4>Price</h4>
                    <div class="card-body">
                        <label class="d-block" for="">
                            <input type="radio" name="priceSort" class="me-3" wire:model="priceInput"
                                value="high-to-low">High to Low
                        </label>
                        <label class="d-block" for="">
                            <input type="radio" name="priceSort" class="me-3" wire:model="priceInput"
                                value="low-to-high">Low to High
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md 9">
            <div class="row">
                @forelse ($products as $productItem)
                    <div class="col-md-3">
                        <div class="product-card">
                            <div class="product-card-img">
                                <label class="stock bg-success">In Stock</label>
                                <img src="{{ url('upload/product/' . $productItem->image) }}" alt="Laptop">
                            </div>
                            <div class="product-card-body">
                                <p class="product-brand">{{ $category->name }}</p>
                                <h5 class="product-name">
                                    <a href="">
                                        {{ $productItem->name }}
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price">{{ '$' . $productItem->price }}</span>
                                    <span class="original-price">$799</span>
                                </div>
                                <div class="mt-2">
                                    <a href="" class="btn btn1"><i class="fa-solid fa-cart-shopping me-2"></i>Buy
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <div class="p-2">
                            <h4>No Product Available for {{ $category->name }}</h4>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

</div>
