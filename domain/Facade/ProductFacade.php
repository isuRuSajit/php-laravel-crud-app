<?php
namespace doamin\Facade;

use Illuminate\Support\Facades\Facade;
use doamin\Services\ProductService;

class ProductFacade extends Facade{



protected static function getFacadeAccessor()
{
  return ProductService::class;
}

}
