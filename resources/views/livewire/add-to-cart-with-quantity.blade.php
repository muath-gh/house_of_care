<div class="row align-items-stretch mb-4">
    <div class="col-sm-5 pr-sm-0">
      <div class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white"><span class="text-gray mr-4 no-select">الكمية</span>
        <div class="quantity">
          <button class="p-0" wire:click="incQuantity"><i class="fas fa-caret-right"></i></button>
          <input class="form-control border-0 shadow-0 p-0 only-numbers" type="text" wire:model="quantity">
          <button class="p-0" wire:click="decQuantity"><i class="fas fa-caret-left"></i></button>
        </div>
      </div>
    </div>
    <div class="col-sm-3 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" wire:click="addToCart()" href="javascript:void(0);">إضافة للسلة</a></div>
  </div>