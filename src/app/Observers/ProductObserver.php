<?php

namespace App\Observers;

use App\Models\Manager;
use App\Models\Product;
use App\Models\SystemNotification;

class ProductObserver
{
    public function created(Product $product)
    {
        $admin = Manager::admin()->first();
        $admin->systemNotifications()->create([
            'body' => sprintf('The new product %s created.', $product->name),
            'full_name' => $product->manager()->first()->full_name,
            'sender_id' => $product->manager()->first()->id,
        ]);
    }

    /**
     * Handle the Product "updated" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function updated(Product $product)
    {
        if($product->isDirty('is_active')){
            SystemNotification::create([
                'full_name' => 'Manager',
                'sender_id' => request()->user()->id,
                'manager_id' => $product->manager()->first()->id,
                'body' => $product->is_active ? sprintf('The product %s is published.', $product->name) : sprintf('The product %s is blocked.', $product->name)
            ]);
        }
    }

    /**
     * Handle the Product "deleted" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function deleted(Product $product)
    {
        SystemNotification::create([
            'full_name' => 'Manager',
            'sender_id' => request()->user()->id,
            'manager_id' => $product->manager()->first()->id,
            'body' => sprintf('The product %s is deleted.', $product->name)
        ]);
    }
}
